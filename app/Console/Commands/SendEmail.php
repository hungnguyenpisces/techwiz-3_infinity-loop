<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\AppointmentNotify;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class SendEmail extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'sendemail';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'send email to user';

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {

    $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
      ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
      ->join('departments', 'appointments.department_id', '=', 'departments.id')
      ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
      ->select('appointments.*', 'users.first_name', 'users.last_name', 'users.email as email', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_name')
      ->get();

    $out = new (ConsoleOutput::class);

    foreach ($appointment as $app) {

      //check if appointment date is today
      if ($app->status == 'Accepted' && $app->date == date('Y-m-d')) {
        $app->message = 'Your appointment has been accepted by Staff';
        $out->writeln($app->email);
        Mail::to((string)$app->email)->send(new AppointmentNotify($app));
        $this->info('Email sent!');
        $this->info($app->email);

        // Mail::send('mail.infomail', compact('appointment'), function ($message) use ($app) {
        //   $message->to($app->email)->subject('Appointment Reminder');
        // });
      }
    }
  }
}
