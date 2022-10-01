<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendnotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Work as medicine reminder, appointment reminder or health index reminder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //join medicine, check_out_histories, users by user_id
        $medicine = DB::table('medicine')
            ->join('check_out_histories', 'medicine.check_out_history_id', '=', 'check_out_histories.id')
            ->join('users', 'check_out_histories.user_id', '=', 'users.id') 
            ->select('medicine.*', 'check_out_histories.*', 'users.*')
            ->get();

        foreach ($medicine as $med) {
                $notification = new Notification();
                $notification->user_id = $med->user_id;
                $notification->content = 'Dont forget to take your medicine on time';
                $notification->type = 1;
                $notification->save();
            
        }

        $appointment = DB::table('appointments')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.*', 'doctors.last_name as name')
            ->get();
        

        foreach ($appointment as $app) {
            if ($app->status == 'Accepted' && $app->date == date('Y-m-d')) {
                $notification = new Notification();
                $notification->user_id = $app->user_id;
                $notification->content = 'You have an appointment with Dr.' . $app->name . ' today';
                $notification->type = 2;
                $notification->app_id= $app->id;
                $notification->save();
            
            }

            if ($app->status == 'Done' && $app->is_rated == false && $app->is_notified == false) {
                $notification = new Notification();
                $notification->app_id = $app->id;
                $notification->user_id = $app->user_id;
                $notification->content = 'You just finished appointment with Dr.' . $app->name . '. Please rate your experience for our improvement';
                $notification->type = 4;
                $notification->save();

                DB::table('appointments')
                    ->where('id', $app->id)
                    ->update(['is_notified' => true]);

            }

         
            // if ($app->status == 'Accepted' && $app->date == date('Y-m-d', strtotime('+1 day'))) {
            //     $notification = new Notification();
            //     $notification->user_id = $app->user_id;
            //     $notification->content = 'You have an appointment with ' . $app->name. ' at ' . $app->time . ' on ' . $app->date;
            //     $notification->type = 2;
            //     $notification->save();
            // }

        }

        $health_index = DB::table('health_indices')
            ->join('users', 'health_indices.user_id', '=', 'users.id')
            ->select('health_indices.*', 'users.*')
            ->get();

        foreach ($health_index as $index) {
            //check if lastest health index is 7 days ago
            $lastest = DB::table('health_indices')
                ->where('user_id', $index->user_id)
                ->orderBy('created_at', 'desc')
                ->first();
           
            $diff = date_diff(date_create($lastest->created_at), date_create(date('Y-m-d')));
            //$diff to int
            $diff = (int)$diff->format('%a');

            if ($diff >=7) {
                $time = $diff/7;

                $notification = new Notification();
                $notification->user_id = $index->user_id;
                if ($time == 1) {
                    $notification->content = 'You have not updated your health index for 7 days';
                } else {
                    $notification->content = 'You have not updated your health index for ' . $time . ' weeks';
                }
                $notification->type = 3;
                $notification->save();
            }
           
        }

        $this->info('Notification sent successfully!');

    }

}
