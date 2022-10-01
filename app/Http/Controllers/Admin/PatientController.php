<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //paginate 11 rows per pages

        $patients = User::join('check_out_histories', 'users.id', '=', 'check_out_histories.user_id')
        ->join('departments', 'check_out_histories.department_id', '=', 'departments.id')
        ->join('hospital_departments', 'departments.id', '=', 'hospital_departments.department_id')
        ->join('hospitals', 'hospital_departments.hospital_id', '=', 'hospitals.id')
        ->select('users.*','departments.name as department_name', 'hospitals.name as hospital_name', 'hospitals.id as hospital_id')
        ->where('hospitals.id', Auth::user()->hospital_id)
        ->where('users.hospital_id', null)
        ->paginate(11);

        return view('admin.patient.index') ->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.create');
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
    public function show()
    {
        return view('admin.patient.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
