<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsDoc = Doctor::all();
        return view('doctor.index')->with('lsDoc', $lsDoc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'first_name' => 'required|min:1|max:10',
            'last_name' => 'required|min:1|max:10',
            'department_id' => 'required'
        ]);

        $doc = new Doctor();
        $doc->first_name = $request->first_name;
        $doc->last_name = $request->last_name;
        $doc->image = $request->image;
        $doc->department_id = $request->department_id;
        $doc->save();

        $request->session()->flash('success', 'Doctor created sucessfully.');
        return redirect(route('doctor.index'));
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
        $doc = Doctor::find($id);
        return view('doctor.edit')->with('doc', $doc);
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
        $this->validate($request,
        [
            'first_name' => 'required|min:1|max:10',
            'last_name' => 'required|min:1|max:10',
            'department_id' => 'required'
        ]);

        $doc = Doctor::find($id);
        $doc->first_name = $request->first_name;
        $doc->last_name = $request->last_name;
        $doc->department_id = $request->department_id;
        $doc->save();

        $request->session()->flash('success', 'Doctor updated sucessfully.');
        return redirect(route('doctor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $doc = Doctor::find($id);
        if($doc == null) {
            $request->session()->flash('danger', 'Doctor not found.');
        } else {
            $doc->delete();
            $request->session()->flash('success', 'Doctor deleted sucessfully.');
        }
        return redirect(route('doctor.index'));
    }
}
