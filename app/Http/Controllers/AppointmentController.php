<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.appointment');
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
        $amt = new Appointment();
        $amt->users_id = $request->users_id;
        $amt->department_id = $request->department_id;
        $amt->self_check_symptom = $request->self_check_symptom;
        $amt->time = $request->time;
        $amt->date = $request->date;
        $amt->status = $request->status;
        $amt->save();

        $request->session()->flash('success', 'Appointment created sucessfully.');
        return redirect(route('appointment.index'));
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
