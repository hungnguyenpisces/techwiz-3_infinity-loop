<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Department;
use App\Models\HealthIndex;
use App\Models\User;
use Carbon\Carbon;


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
        $healthIndex->save();

        return view('user.user-profile')->with(compact('healthIndex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $healthIndex = HealthIndex::where('user_id', $user->id)->orderBy("created_at","desc")->first();
        $now = Carbon::now();
        $nowbefore7day = $now->subDays(7);
        if($healthIndex->created_at > $nowbefore7day) {
            return redirect("user.user-health-list");
        } else {
            return view('user.user-health');
        }

//        return view('user.user-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//        $height = $request->input('height');
//        $weight = $request->input('weight');
//        $heart_rate = $request->input('heart_rate');
//        $blood_pressure = $request->input('blood_pressure');
        $user = Auth::user();

        $healthIndex = HealthIndex::where('user_id', $user->id)->orderBy("created_at","desc")->first();

//        $last_7_days = HealthIndex::where('created_at','>=',Carbon::now()
//            ->subdays(7))
//            ->first(['id','created_at']);

        $now = Carbon::now();
        $nowbefore7day = $now->subDays(7);

        if($healthIndex->created_at > $nowbefore7day) {
            return redirect()->back()->with('warning', 'You added health information this week then you can edit it or add a new one in 1 week ');

//            return redirect(route('user.healthList'));
        } else {

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

//        $healthIndex = new HealthIndex();
//        $healthIndex->user_id = $user->id;
//        $healthIndex->height = $height;
//        $healthIndex->weight = $weight;
//        $healthIndex->heart_rate = $heart_rate;
//        $healthIndex->blood_pressure = $blood_pressure;
//
//        $healthIndex->save();
//
//        $request->session()->flash('success', 'Health Index created sucessfully.');
//        return view('web.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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

        return view('user.user-profile', compact('healthIndex','user'));
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
    public function healthList(){
        $user = Auth::user();
        $health_indices = HealthIndex::join('users', 'health_indices.user_id', '=', 'users.id')
            ->select('health_indices.*', 'users.first_name', 'users.last_name',
                'health_indices.height as healthIndex_height',
                'health_indices.weight as healthIndex_weight',
                'health_indices.blood_pressure as healthIndex_blood_pressure',
                'health_indices.heart_rate as healthIndex_heart_rate')
            ->where('user_id', $user->id)
            ->get();

        return view('user.user-health-list', compact('health_indices','user'));
    }

    public function updateInfo()
    {
        return view('user.user-update-info');
    }
}

