<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Notification;
use App\Models\HealthIndex;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class UserApiController extends Controller
{

    public function getAllNotifications() {
        $notifications = Notification::all();
        return response()->json($notifications);
    }

    // get notification by user_id
    public function getNotificationsByUser() {
        $notifications = Notification::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $count_notifications = Notification::where('user_id', auth()->user()->id)->where('is_read', false)->count();
       
        return response()->json(
            ['data' => $notifications,
            'count_notif' => $count_notifications,
            ]
        );
    }

    // get data for health index chart
    public function getHealthIndexChart() {
       
        $months = [];
        for ($i = 0; $i < 13; $i++) {
            $months[] = date('Y-M', strtotime("-$i months"));
        }

        $height_by_month= [];
        $weight_by_month= [];
        $blood_pressure_by_month=[];
        $heart_rate_by_month=[];

        foreach ($months as $month) {
            $height_by_month[] = HealthIndex::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y', strtotime($month)))
                ->where('user_id', auth()->user()->id)
                ->avg('height');
        }

        foreach ($months as $month) {
            $weight_by_month[] = HealthIndex::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y', strtotime($month)))
                ->where('user_id', auth()->user()->id)
                ->avg('weight');
        }

        foreach ($months as $month) {
            $blood_pressure_by_month[] = HealthIndex::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y'))
                ->where('user_id', auth()->user()->id)
                ->avg('blood_pressure');
        }

        foreach ($months as $month) {
            $heart_rate_by_month[] = HealthIndex::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y'))
                ->where('user_id', auth()->user()->id)
                ->avg('heart_rate');
        }
        
        return response()->json([
            'months' =>array_reverse($months),
            'height' => array_reverse($height_by_month),
            'weight' =>array_reverse($weight_by_month),
            'blood_pressure' =>array_reverse($blood_pressure_by_month),
            'heart_rate' =>array_reverse($heart_rate_by_month)
        ]);



    
        // return health index by month



       

    }


   
}
