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
use Illuminate\Support\Facades\DB;

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
        
        $appointment = DB::table('appointments')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.email as email', 'doctors.last_name as name')
            ->get();
        

        foreach ($appointment as $app) {

            //check if appointment date is today
            if ($app->status == 'Accepted' && $app->date == date('Y-m-d')) {

             Mail::to ((string)$app->email)->send(new AppointmentNotify($app));
             $this->info('Email sent!');
             $this->info($app->email);

            Mail::send ('mail.infomail', compact('appointment'), function ($message) use ($app) {
                $message->to ( $app->email )->subject ( 'Appointment Reminder' );
            } );
            }


                
        

        }


    }

}