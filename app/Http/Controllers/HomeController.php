<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
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
        $lsHospital = Hospital::paginate(5);
        

        $searchResults = Hospital::where('name', 'LIKE', '%'.$searchterm.'%')
		            // ->orWhere('last_name', 'LIKE', '%'.$searchterm.'%')
		            ->get();

        // dd($searchResults);

        return view('web.hospital-search', compact('searchResults', 'searchterm', 'lsHospital'));
    }

    public function searchDoctorRs(Request $request)
    {
        
        $searchterm = $request->input('query');
        $lsHospital = Hospital::all();
        $lsDepartment = Department::all();
        $lsDoctors = Doctor::all();
        $department_filter = $request->input('department_id');
        $hospital_filter = $request->input('hospital_id');
        
        //filter doctor by department_id and hospital_id
        $searchResults= Doctor::all();
        if($department_filter != null || $hospital_filter!= null || $searchterm !='' ) {
            $searchResults = Doctor::join('departments', 'doctors.department_id', '=', 'departments.id')
            ->join('hospital_departments', 'hospital_departments.department_id', '=', 'departments.id')
            //select doctor
            ->select('doctors.*')
            
            ->where('doctors.first_name', 'LIKE', '%'.$searchterm.'%')
            ->where('doctors.department_id', $department_filter)
            ->where('hospital_departments.hospital_id', $hospital_filter)
    
            ->get();
    
        }
        
        // $hospital_filter = $request->input('hospital_id');


        return view('web.doctor-search', compact('searchResults', 'searchterm', 'lsDoctors', 'lsHospital', 'lsDepartment', 'department_filter', 'hospital_filter'));
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
