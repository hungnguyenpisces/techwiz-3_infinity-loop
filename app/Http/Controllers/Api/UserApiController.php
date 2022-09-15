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
        //get notification by user_id order by created_at desc
        $notifications = Notification::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $count_notifications = Notification::where('user_id', auth()->user()->id)->count();
        return response()->json(
            ['data' => $notifications,
            'count_notif' => $count_notifications]
        );
    }

    // get data for health index chart
    public function getHealthIndexChart() {
        $user = User::find(auth()->user()->id);
        $health_index = HealthIndex::where('user_id', auth()->user()->id)->whereMonth('created_at', '>=', 1)->get();
        
        
        //week array = 1 to 52
        $weeks = [];
        for ($i = 1; $i < 53; $i++) {
            $weeks[] = $i;
        }

        $height_by_week = [];
 
        foreach ($weeks as $week) {
            $height_by_week[] = HealthIndex::where('user_id', auth()->user()->id)
                ->where('created_at', date('m', strtotime($week)))
                ->whereYear('created_at', date('Y', strtotime($week)))
                ->avg('height');
        }

        //average weight by week
        $weight_by_week = [];
        foreach ($weeks as $week) {
            $weight_by_week[] = HealthIndex::where('user_id', auth()->user()->id)
                ->whereMonth('created_at', date('m', strtotime($week)))
                ->whereYear('created_at', date('Y', strtotime($week)))
                ->avg('weight');
        }

        //average blood pressure by week
        $blood_pressure_by_week = [];
        foreach ($weeks as $week) {
            $blood_pressure_by_week[] = HealthIndex::where('user_id', auth()->user()->id)
                ->whereMonth('created_at', date('m', strtotime($week)))
                ->whereYear('created_at', date('Y', strtotime($week)))
                ->avg('blood_pressure');
        }

        //average heart rate by week
        $heart_rate_by_week = [];
        foreach ($weeks as $week) {
            $heart_rate_by_week[] = HealthIndex::where('user_id', auth()->user()->id)
                ->whereMonth('created_at', date('m', strtotime($week)))
                ->whereYear('created_at', date('Y', strtotime($week)))
                ->avg('heart_rate');
        }

        return response()->json([
            'weeks' => ($weeks),
            'height_by_week' => array_reverse($height_by_week),
            'weight_by_week' => array_reverse($weight_by_week),
            'blood_pressure_by_week' => array_reverse($blood_pressure_by_week),
            'heart_rate_by_week' => array_reverse($heart_rate_by_week),
        ]);

    }


   
}
