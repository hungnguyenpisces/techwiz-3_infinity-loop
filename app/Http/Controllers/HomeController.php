<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function hospital()
    {
        return view('web.hospital');
    }

    public function hospitalSearch()
    {
        return view('web.hospital-search');
    }

    public function departments()
    {
        return view('web.departments');
    }

    public function time_table()
    {
        return view('web.timetable');
    }

    public function doctor()
    {
        return view('web.doctor');
    }

    public function doctorSearch()
    {
        return view('web.doctor-search');
    }

    public function doctorDetail()
    {
        return view('web.doctor-detail');
    }

    public function contact_us()
    {
        return view('web.contact-us');
    }
}
