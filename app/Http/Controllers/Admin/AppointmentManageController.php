<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentNotify;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // appointment join with user, hospital, department, doctor
        $doctors = Doctor::all();
        $appointments = Appointment::join('users', 'appointments.user_id', '=', 'users.id')
            ->join('hospitals', 'appointments.hospital_id', '=', 'hospitals.id')
            ->join('departments', 'appointments.department_id', '=', 'departments.id')
            ->leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.id')
            ->select('appointments.*', 'users.first_name', 'users.last_name', 'hospitals.name as hospital_name', 'departments.name as department_name', 'doctors.first_name as doctor_first_name')
            ->get();
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
        return view('admin.appointment.book-appointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = Auth::user();
        $appointment = Appointment::find($id);
        $appointment->doctor_id = $request->doctor_id;
        $appointment->hospital_id = $request->hospital_id;
        $appointment->department_id = $request->department_id;
        $appointment->date = date('Y-m-d', strtotime($request->datetime));
        $appointment->time = date('H:i:s', strtotime($request->datetime));
        $appointment->save();

        $appointment->message = 'Your appointment has been updated successfully.';
        Mail::to((string)$user->email)->send(new AppointmentNotify($appointment));
        return redirect()->route('all-appointment.index')->with('success', 'Appointment has been updated successfully.');
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
}
