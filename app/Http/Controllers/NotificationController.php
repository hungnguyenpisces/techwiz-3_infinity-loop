<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    //
    public function isRead($notif) {
        $notification = Notification::find($notif);

        $notification->is_read = true;
        $notification->save();

        return redirect(route('user.updateInfo'));

    } 

    public function isRead2($id,$notif) {
        $notification = Notification::find($notif);

        $notification->is_read = true;
        $notification->save();

        return redirect(route('appointment.detail', $id));
    } 
    
}
