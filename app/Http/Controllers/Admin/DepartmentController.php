<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsDep = Department::all();
        return view('department.index')->with('lsDep', $lsDep);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dep = new Department();
        $dep->name = $request->name;
        $dep->hospital_id = $request->hospital_id;
        $dep->image = $request->image;
        $dep->introduction = $request->introduction;
        $dep->save();

        $request->session()->flash('success', 'Department created sucessfully.');
        return redirect(route('department.index'));
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
        $dep = Department::find($id);
        return view('department.edit')->with('dep', $dep);
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
        $dep = Department::find($id);
        $dep->name = $request->name;
        $dep->hospital_id = $request->hospital_id;
        $dep->image = $request->image;
        $dep->introduction = $request->introduction;
        $dep->save();

        $request->session()->flash('success', 'Department updated sucessfully.');
        return redirect(route('department.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $dep = Department::find($id);
        if($dep == null) {
            $request->session()->flash('danger', 'Department not found.');
        } else {
            $dep->delete();
            $request->session()->flash('success', 'Department deleted sucessfully.');
        }
        return redirect(route('department.index'));
    }
}
