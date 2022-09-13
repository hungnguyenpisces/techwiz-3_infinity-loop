<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\FAQ;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Searchable\Search;
use Spatie\Searchable\ModelSearchAspect;


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
        $lsDoctors = Doctor::all();
        return view('web.doctor-search', compact('lsDoctors'));
    }

    public function searchHospitalRs(Request $request)
    {
        $searchterm = $request->input('query');
        $lsHospital = Hospital::all();

        $searchResults = Hospital::where('name', 'LIKE', '%'.$searchterm.'%')
		            // ->orWhere('last_name', 'LIKE', '%'.$searchterm.'%')
		            ->get();

        // dd($searchResults);

        return view('web.hospital-search', compact('searchResults', 'searchterm', 'lsHospital'));
    }

    public function searchDoctorRs(Request $request)
    {
        $searchterm = $request->input('query');
        $lsDoctors = Doctor::all();

        $searchResults = Doctor::where('first_name', 'LIKE', '%'.$searchterm.'%')
		            ->orWhere('last_name', 'LIKE', '%'.$searchterm.'%')
		            ->get();

        // dd($searchResults);

        return view('web.doctor-search', compact('searchResults', 'searchterm', 'lsDoctors'));
    }

    public function doctorDetail()
    {
        return view('web.doctor-detail');
    }

    public function faq()
    {
        $faq = FAQ::all();
        return view('web.faq')->with('faq',$faq);
    }

    public function contact_us()
    {
        return view('web.contact-us');
    }
}
