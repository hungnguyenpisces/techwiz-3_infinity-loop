<?php

namespace App\Http\Controllers;

use App\Models\HealthIndex;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $healthIndex = new HealthIndex();
        $healthIndex->user_id = $user->id;
        $healthIndex->height = 170;
        $healthIndex->weight = 70;
        $healthIndex->heart_rate = 70;
        $healthIndex->blood_pressure = 70;
        return view('user.user-profile')->with(compact('healthIndex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user-profile');
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
        $heal = new HealthIndex();
        $heal->users_id = $user->id;
        $heal->height = $request->height;
        $heal->weight = $request->weight;
        $heal->heart_rate = $request->heart_rate;
        $heal->blood_pressure = $request->blood_pressure;
        $heal->save();

        $request->session()->flash('success', 'Health Index created sucessfully.');
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
        $heal = HealthIndex::find($id);
        return view('user.user-profile')->with('heal', $heal);
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
        $heal = HealthIndex::find($id);
        $heal->users_id = $request->users_id;
        $heal->height = $request->height;
        $heal->weight = $request->weight;
        $heal->heart_rate = $request->heart_rate;
        $heal->blood_pressure = $request->blood_pressure;
        $heal->save();

        $request->session()->flash('success', 'Health Index updated sucessfully.');
        return view('web.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $heal = HealthIndex::find($id);
        if ($heal == null) {
            $request->session()->flash('danger', 'Index not found.');
        } else {
            $heal->delete();
            $request->session()->flash('success', 'Index deleted sucessfully.');
        }
        return redirect(route('user.index'));
    }

    public function bmi()
    {
        return view('user.user-bmi');
    }

    public function health()
    {
        return view('user.user-health');
    }

    public function updateInfo()
    {
        return view('user.user-update-info');
    }
}
