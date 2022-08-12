<?php

namespace App\Http\Controllers;

use App\Models\MedicinePill;
use Illuminate\Http\Request;

class MedicinePillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsMed = MedicinePill::all();
        return view('web.medicine.index')->with('lsMed', $lsMed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $med = new MedicinePill();
        $med->check_out_history_id = $request->check_out_history_id;
        $med->details = $request->details;
        $med->save();

        $request->session()->flash('success', 'Medicine pill created sucessfully.');
        return redirect(route('medicine.index'));
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
        $med = MedicinePill::find($id);
        return view('web.medicine.edit')->with('med', $med);
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
        $med = MedicinePill::find($id);
        $med->check_out_history_id = $request->check_out_history_id;
        $med->details = $request->details;
        $med->save();

        $request->session()->flash('success', 'Medicine pill updated sucessfully.');
        return redirect(route('medicine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $med = MedicinePill::find($id);
        if($med == null) {
            $request->session()->flash('danger', 'Medicine pill not found.');
        } else {
            $med->delete();
            $request->session()->flash('success', 'Medicine pill deleted sucessfully.');
        }
        return redirect(route('medicine.index'));
    }
}
