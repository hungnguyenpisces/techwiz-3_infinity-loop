<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Notification;
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

    


   
}
