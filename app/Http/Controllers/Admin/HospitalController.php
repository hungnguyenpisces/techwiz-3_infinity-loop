<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsHpt = Hospital::all();
        return view('hospital.index')->with('lsHpt', $lsHpt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hpt = new Hospital();
        $hpt->name = $request->name;
        $hpt->image = $request->image;
        $hpt->position = $request->position;
        $hpt->department_id = $request->department_id;
        $hpt->save();

        $request->session()->flash('success', 'Hospital created sucessfully.');
        return redirect(route('hospital.index'));
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
        $hpt = Hospital::find($id);
        return view('hospital.edit')->with('hpt', $hpt);
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
        $hpt = Hospital::find($id);
        $hpt->name = $request->name;
        $hpt->image = $request->image;
        $hpt->position = $request->position;
        $hpt->department_id = $request->department_id;
        $hpt->save();

        $request->session()->flash('success', 'Hospital updated sucessfully.');
        return redirect(route('hospital.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $hpt = Hospital::find($id);
        if ($hpt == null) {
            $request->session()->flash('danger', 'Hospital not found.');
        } else {
            $hpt->delete();
            $request->session()->flash('success', 'Hospital deleted sucessfully.');
        }
        return redirect(route('hospital.index'));
    }
}
