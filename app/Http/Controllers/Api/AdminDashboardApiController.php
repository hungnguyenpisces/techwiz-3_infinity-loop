<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class AdminDashboardApiController extends Controller
{
    public function countPatientAndAppointment()
    {
        $months = [];
        for ($i = 0; $i < 13; $i++) {
            $months[] = date('Y-M', strtotime("-$i months"));
        }
        $users_count_by_month = [];
        foreach ($months as $month) {
            $users_count_by_month[] = User::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y', strtotime($month)))
                ->count();
        }
        $appointments_count_by_month = [];
        foreach ($months as $month) {
            $appointments_count_by_month[] = Appointment::whereMonth('created_at', date('m', strtotime($month)))
                ->whereYear('created_at', date('Y', strtotime($month)))
                ->count();
        }
        return response()->json([
            'months' => array_reverse($months),
            'users_count_by_month' => array_reverse($users_count_by_month),
            'appointments_count_by_month' => array_reverse($appointments_count_by_month),
        ]);
    }
}

