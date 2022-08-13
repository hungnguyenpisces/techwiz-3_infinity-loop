<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Hospital::all();
        $department = Department::all();
        return view('web.appointment', compact('hospital', 'department'));
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
        $user = Auth::user();
        $amt = new Appointment();
        $amt->user_id = $user->id;
        $amt->department_id = $request->department_id;
        $amt->hospital_id = $request->hospital_id;
        $amt->self_check_symptom = $request->self_check_symptom;
        $amt->time = $request->time;
        $amt->date = $request->date;
        $amt->status = 'pending';
        $amt->save();

        $request->session()->flash('success', 'Appointment created sucessfully.');
        return view('web.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
