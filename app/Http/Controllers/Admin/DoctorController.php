<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\Hospital;
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
        $lsDoc = Doctor::join('hospital_departments', 'hospital_departments.department_id', '=', 'doctors.department_id')
            ->join('hospitals', 'hospitals.id', '=', 'hospital_departments.hospital_id')
            ->join('departments', 'doctors.department_id', '=', 'departments.id')
            ->select('doctors.*', 'departments.name as department_name', 'hospitals.name as hospital_name')
            ->get();
        
        return view('admin.doctor.index')->with('lsDoc', $lsDoc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
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
        return redirect(route('admin.doctor.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.doctor.show');
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
        return view('admin.doctor.edit')->with('doc', $doc);
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
        return redirect(route('admin.doctor.index'));
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
        return redirect(route('admin.doctor.index'));
    }
}
