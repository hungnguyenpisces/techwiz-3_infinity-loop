<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\FAQ;
use App\Models\Comment;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Searchable\Search;
use Spatie\Searchable\ModelSearchAspect;
use Illuminate\Support\Facades\Hash;



class HomeController extends Controller
{
    public function changePassword()
    {
        return view('user.change-password');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
    public function index()
    {
        return view('web.index');
    }

    public function hospital()
    {
        // search 
        $hospitals = Hospital::all();
        $search = request()->input('query');
        if ($search) {
            $search = strtolower($search);
            $hospitals = Hospital::where('name', 'LIKE', "%{$search}%")
                ->orWhere('location', 'LIKE', "%{$search}%")
                ->orWhere('phone', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $hospitals = Hospital::all();
        }

        return view('web.hospital-search', compact('hospitals', 'search'));
        dd($hospitals);
    }

    public function hospitalDetail($id) {
        $hospital = Hospital::find($id);
        // paginate

        $comment = Comment::join('appointments', 'comments.app_id', '=', 'appointments.hospital_id')
            ->where('appointments.hospital_id', $id)
            ->paginate(5);

        return view ('web.hospital-detail', compact('hospital', 'comment'));
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
