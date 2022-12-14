<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use App\Models\Hospital;
use App\Models\MedicinePill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\MailTest;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;



class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        $departments = Department::all();
        return view('web.appointment', compact('hospitals', 'departments'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $epoch_time_curent = time();
        $epoch_time_appointment = strtotime($request->date . ' ' . $request->time);

        if ($epoch_time_appointment < $epoch_time_curent) {
            return redirect()->back()->with('warning', 'Date and time must be greater than current date and time.');
        } else {
            $user = Auth::user();
            $appointment = new Appointment();
            $appointment->user_id = $user->id;
            $appointment->hospital_id = $request->hospital_id;
            $appointment->department_id = $request->department_id;
            $appointment->self_check_symptom = $request->self_check_symptom;
            $appointment->date = $request->date;
            $appointment->time = $request->time;
            $appointment->status = 'Pending';
            $appointment->save();
            $request->session()->flash('success', 'Appointment successfully created.');
            return view('web.success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $user = Auth::user();
        $hospitals = Hospital::all();
        $departments = Department::all();
        $appointments = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')
            ->where('user_id', $user->id)->get();
        //            dd($appointments);
        return view('user.user-appointments', compact('hospitals', 'departments', 'appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amt = Appointment::find($id);
        return view('appointment.edit')->with('amt', $amt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $amt = Appointment::find($id);
        $amt->users_id = $request->users_id;
        $amt->department_id = $request->department_id;
        $amt->self_check_symptom = $request->self_check_symptom;
        $amt->time = $request->time;
        $amt->date = $request->date;
        $amt->status = $request->status;
        $amt->save();

        $request->session()->flash('success', 'Appointment updated sucessfully.');
        return redirect(route('appointment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {

        $amt = Appointment::find($id);
        if ($amt == null) {
            $request->session()->flash('danger', 'Appointment not found.');
        } else {
            $amt->delete();
            $request->session()->flash('success', 'Appointment deleted sucessfully.');
        }
        return redirect(route('appointment.index'));
    }
    public function userHistory()
    {
        $user = Auth::user();
        $appointments = Appointment::where('user_id', $user->id)->get();
        return view('user.user-history', compact('appointments'));
    }

    // showDetail $id
    public function showDetail($id)
    {
        $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name','hospitals.location as hospital_location')
            ->where('appointments.id', $id)
            ->first();

        $departments = Department::all();
        $hospitals = Hospital::all();
        return view('user.user-appointment-detail', compact('appointment', 'departments', 'hospitals'));

    }
//    public function medicine()
    //        $obj = [];
//        for ($i = 0 ; $i ++ ; $i <= 10){
//            if ($request->except('name_'.$i)){
//                $obj[$request->get('name_'.$i)] = [
//                    'nameb'=>$request->get('name_'.$i),
//                    'time'=>$request->get('name_'.$i),
//                    'day'=>$request->get('name_'.$i),
//                    'period'=>$request->get('name_'.$i),
//                ];
//            }
//        }
//        $a = new MedicinePill();
//        $a->update('detail',$obj);
//        json_encode($obj);
    //luuu vao detail database
}
