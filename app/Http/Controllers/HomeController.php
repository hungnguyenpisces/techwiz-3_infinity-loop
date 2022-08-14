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


    public function time_table()
    {
        return view('web.timetable');
    }

    public function testimonial()
    {
        return view('web.testimonial');
    }

    public function project_detail()
    {
        return view('web.projectdetail');
    }

    public function faq()
    {
        return view('web.faq');
    }

    public function service()
    {
        return view('web.service');
    }

    public function service_detail()
    {
        return view('web.servicedetail');
    }

    public function doctor()
    {
        return view('web.doctor');
    }

    public function doctor_detail()
    {
        return view('web.doctordetail');
    }

    public function blog()
    {
        return view('web.blog');
    }

    public function blog_detail()
    {
        return view('web.blogdetail');
    }

    public function contact_us()
    {
        return view('web.contact-us');
    }
}
