<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentNotify;
use App\Mail\NewAccount;

use App\Models\Appointment;
use App\Models\CheckOutHistory;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\HealthIndex;
use App\Models\MedicinePill;
use App\Models\User;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AppointmentManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        if (Auth::user()->hasRole('Staff') || (Auth::user()->hasRole('Super-Admin')) && ( Auth::user()->hospital_id != null)) {
            $appointments = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')
            ->where('hospitals.id', Auth::user()->hospital_id)
            ->get();
        } else {
            $appointments = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')

            ->get();
        }

        return view('admin.appointment.all-appointment', compact('appointments', 'doctors'));
    }

    public function doctorSchedule()
    {

        return view('admin.appointment.doctor-schedule');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.appointment.book-appointment', compact('departments'));
    }

    public function createAppointment(Request $request) {
        $user = new User();
        $user->username=$request->username;
        $randPwd = Str::random(8);
        $user->password= $randPwd;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->blood_group= $request->blood_group;
        $user->gender=$request->gender;
        $user->save();

        $appointment = new Appointment();
        $appointment->user_id = $user->id;
        $appointment->hospital_id = Auth::user()->hospital_id;
        $appointment->department_id = $request->department_id;
        $appointment->doctor_id = $request->doctor_id;
        $date = date('Y-m-d', strtotime($request->date));
        $appointment->date = $date;
        $time = date('H:i:s', strtotime($request->date));
        $appointment->time = '19:00:00';
        $appointment->self_check_symptom=$request->self_check_symptom;
        $appointment->status = 'Pending';
        $appointment->save();

        Mail::to((string)$request->email)->send (new NewAccount($user));

        $user->password = Hash::make($randPwd);
        $user->save();

        return redirect()->route('all-appointment.index')->with('success', 'Appointment created successfully');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicineName = $request->input('medicineName');
        $unitpertime = $request->input('unitpertime');
        $timeperday = $request->input('timeperday');
        $period = $request->input('period');
        $note = $request->input('staff_note');
        //        $medicineName1 = $request->input('medicineName');
//        $unitpertime1 = $request->input('unitpertime');
//        $timeperday1 = $request->input('timeperday');
//        $period1 = $request->input('period');
//        $note1 = $request->input('staff_note');
        $this->validate($request, [
            'details' => ['required', 'array'],
            'details.*.name' => ['required', 'string'],
            'details.*.time' => ['required', 'int'],
            'details.*.day' => ['required', 'int'],
            'details.*.peroid' => ['required', 'int'],
        ]);
        $user = Auth::user();
        $checkouthistory = CheckOutHistory::all();
        $medicine = new MedicinePill();

        $medicine->details = $request->post('details'); // No need to decode as it's already an array
        $note = $request->input('staff_note');
        $medicine->save();

//        return Redirect::to("/paste/{$paste->uuid}")
//            ->with('success', 'Created');
//        $detail = [];

//
//
//        $checkouthistory = CheckOutHistory::all();
//        $medicine = new MedicinePill();
//        $detail []=[
//            'name' => $medicineName,
//            'time' => $unitpertime,
//            'day' => $timeperday,
//            'period' => $period,
////            $medicineName.$unitpertime.$timeperday.$period
//        ];
//        $detail->json_encode($detail);
//        $medicine->check_out_history_id = $checkouthistory->id;
//        $medicine->details = $detail;
//        $medicine->conclution = $note;
//
//        $medicine->save();
//
//        $request->session()->flash('success', 'created sucessfully.');
//        return view('web.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // appointment join with user, hospital, department, doctor
        $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')
            ->where('appointments.id', $id)
            ->first();

        $doctors = Doctor::all();
        $departments = Department::all();
        $hospitals = Hospital::all();
        // dd($appointment);
        return view('admin.appointment.appointment-detail', compact('appointment', 'doctors', 'departments', 'hospitals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')
            ->where('appointments.id', $id)
            ->first();

        $doctors = Doctor::all();
        $departments = Department::all();
        $hospitals = Hospital::all();
        return view('admin.appointment.appointment-edit', compact('appointment', 'doctors', 'departments', 'hospitals'));
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
//        $user = Auth::user();
//        $appointment = Appointment::find($id);
//        $appointment->doctor_id = $request->doctor_id;
//        $appointment->hospital_id = $request->hospital_id;
//        $appointment->department_id = $request->department_id;
//        $appointment->date = date('Y-m-d', strtotime($request->datetime));
//        $appointment->time = date('H:i:s', strtotime($request->datetime));
//        $appointment->staff_note = $request->staff_note;
//        $appointment->save();
//
//        $appointment->message = 'Your appointment has been updated successfully.';
//        Mail::to((string)$user->email)->send(new AppointmentNotify($appointment));
//        return redirect()->route('all-appointment.index')->with('success', 'Appointment has been updated successfully.');

        $medicineName = $request->input('medicineName');
        $unitpertime = $request->input('unitpertime');
        $timeperday = $request->input('timeperday');
        $period = $request->input('period');
        $note = $request->input('staff_note');
        $checkouthistory = CheckOutHistory::find($id);
        $medicine = new MedicinePill();
        $detail []=[
            'name' => $medicineName,
            'time' => $unitpertime,
            'day' => $timeperday,
            'period' => $period,
//            $medicineName.$unitpertime.$timeperday.$period
        ];
        $detail->json_encode($detail);
        $medicine->check_out_history_id = $id;
        $medicine->details = $detail;
        $medicine->conclution = $note;

        $medicine->save();

        $request->session()->flash('success', 'created sucessfully.');
        return view('web.success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reject($id)
    {
        $appointment = Appointment::find($id);
        $appointment->status = 'Cancelled';
        $appointment->save();

        $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_name')
            ->where('appointments.id', $id)
            ->first();

        $appointment->message = 'Your appointment has been cancelled';

        Mail::to((string)$appointment->user->email)->send(new AppointmentNotify($appointment));
        return redirect()->route('all-appointment.index')->with('success', 'Appointment has been accepted');
    }

    public function approve(Request $request, $id)
    {
        $apmt = Appointment::find($id);
        $apmt->status = 'Accepted';
        $apmt->doctor_id = $request->doctor_id;
        $apmt->save();

        $appointment = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_name')
            ->where('appointments.id', $id)
            ->first();
        $appointment->message = 'Your appointment has been accepted by Staff';
        Mail::to((string)$appointment->user->email)->send(new AppointmentNotify($appointment));
        return redirect()->route('all-appointment.index')->with('success', 'Appointment has been accepted');
    }

    /**
     * Displays the cancel rate per user in percentages
     *
     * @return \Illuminate\Http\Response
     */
    public function excessiveCancels(){
        $users=User::all();
        return view("admin.appointment.excessive-cancels")->with("users",$users);
    }

    public function done(Request $request, $id) {
        $apmt = Appointment::find($id);
        $apmt -> status = 'Done';
        $apmt -> is_rated = true;
        $apmt -> save();

        return redirect() -> route('all-appointment.index') -> with('success', 'Appointment is now done!');
        
    }
}
