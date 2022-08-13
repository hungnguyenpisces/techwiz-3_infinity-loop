<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsSf = Staff::all();
        return view('staff.index')->with('lsSf', $lsSf);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'first_name' => 'required|min:1|max:10',
                'last_name' => 'required|min:1|max:10',
            ]
        );

        $lsSf = new Staff();
        $lsSf->first_name = $request->first_name;
        $lsSf->last_name = $request->last_name;
        $lsSf->gender = $request->gender;
        $lsSf->role = $request->role;
        $lsSf->date_of_birth = $request->date_of_birth;
        $lsSf->username = $request->username;
        $lsSf->email = $request->email;
        $lsSf->phone = $request->phone;
        $lsSf->address = $request->address;
        $lsSf->password = $request->password;
        $lsSf->save();

        $request->session()->flash('success', 'Staff created sucessfully.');
        return redirect(route('staff.index'));
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
        $lsSf = Staff::find($id);
        return view('staff.edit')->with('lsSf', $lsSf);
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
        $this->validate(
            $request,
            [
                'first_name' => 'required|min:1|max:10',
                'last_name' => 'required|min:1|max:10',
            ]
        );

        $lsSf = Staff::find($id);
        $lsSf->first_name = $request->first_name;
        $lsSf->last_name = $request->last_name;
        $lsSf->gender = $request->gender;
        $lsSf->role = $request->role;
        $lsSf->date_of_birth = $request->date_of_birth;
        $lsSf->username = $request->username;
        $lsSf->email = $request->email;
        $lsSf->phone = $request->phone;
        $lsSf->address = $request->address;
        $lsSf->password = $request->password;
        $lsSf->save();

        $request->session()->flash('success', 'Staff updated sucessfully.');
        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $lsSf = Staff::find($id);
        if ($lsSf == null) {
            $request->session()->flash('danger', 'Staff not found.');
        } else {
            $lsSf->delete();
            $request->session()->flash('success', 'Staff deleted sucessfully.');
        }
        return redirect(route('staff.index'));
    }
}
