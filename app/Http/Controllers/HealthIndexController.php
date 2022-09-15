<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\HealthIndex;
use App\Models\Hospital;
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
        $healthIndex = HealthIndex::where('user_id', $user->id)->orderBy("created_at","desc")->first();

        return view('user.user-profile', [
            'user' => $user,
            'healthIndex' => $healthIndex

        ]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $height = $request->input('height');
        $weight = $request->input('weight');
        $heart_rate = $request->input('heart_rate');
        $blood_pressure = $request->input('blood_pressure');

        $user = Auth::user();
        $healthIndex = new HealthIndex();
        $healthIndex->user_id = $user->id;
        $healthIndex->height = $height;
        $healthIndex->weight = $weight;
        $healthIndex->heart_rate = $heart_rate;
        $healthIndex->blood_pressure = $blood_pressure;

        $healthIndex->save();

        $request->session()->flash('success', 'Health Index created sucessfully.');
        return view('web.success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $healthIndex = HealthIndex::join('users', 'healthIndex.user_id', '=', '$user.id')
            ->select('healthIndex.*', 'users.first_name', 'users.last_name',
                'healthIndex.height as healthIndex_height',
                'healthIndex.weight as healthIndex_weight',
                'healthIndex.blood_pressure as healthIndex_blood_pressure',
                'healthIndex.heart_rate as healthIndex_heart_rate')
            ->where('user_id', $user->id)
            ->first();
        dd($healthIndex);
        return view('user.user-profile', compact('healthIndex','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthIndex = HealthIndex::find($id);
        return view('user.user-editHealth')->with('healthIndex', $healthIndex);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $height = $request->input('height');
        $weight = $request->input('weight');
        $heart_rate = $request->input('heart_rate');
        $blood_pressure = $request->input('blood_pressure');

        $healthIndex = HealthIndex::find($id);

        $healthIndex->user_id = $user->id;
        $healthIndex->height = $height;
        $healthIndex->weight = $weight;
        $healthIndex->heart_rate = $heart_rate;
        $healthIndex->blood_pressure = $blood_pressure;

        $healthIndex->save();

        $request->session()->flash('success', 'Health Index created sucessfully.');
        return view('web.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
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
        $user = Auth::user();
        $healthIndex = HealthIndex::where('user_id', $user->id)->firstOrFail();
        return view('user.user-health', [
            'user' => $user,
            'healthIndex' => $healthIndex
        ]);
    }

    public function updateInfo()
    {
        return view('user.user-update-info');
    }

}
