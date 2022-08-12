<?php

namespace App\Http\Controllers;

use App\Models\CheckOutHistory;
use Illuminate\Http\Request;

class CheckOutHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsCoh = CheckOutHistory::all();
        return view('web.checkout.index')->with('lsCoh', $lsCoh);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.checkout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coh = new CheckOutHistory();
        $coh->users_id = $request->users_id;
        $coh->department_id = $request->department_id;
        $coh->symptoms = $request->symptoms;
        $coh->conclusion = $request->conclusion;
        $coh->created_by = $request->created_by;
        $coh->doctor_id = $request->doctor_id;
        $coh->save();

        $request->session()->flash('success', 'History created sucessfully.');
        return redirect(route('checkout.index'));
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
        $coh = CheckOutHistory::find($id);
        return view('web.checkout.edit')->with('coh', $coh);
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
        $coh = CheckOutHistory::find($id);
        $coh->users_id = $request->users_id;
        $coh->department_id = $request->department_id;
        $coh->symptoms = $request->symptoms;
        $coh->conclusion = $request->conclusion;
        $coh->created_by = $request->created_by;
        $coh->updated_by = $request->updated_by;
        $coh->doctor_id = $request->doctor_id;
        $coh->save();

        $request->session()->flash('success', 'History updated sucessfully.');
        return redirect(route('checkout.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $coh = CheckOutHistory::find($id);
        if($coh == null) {
            $request->session()->flash('danger', 'History not found.');
        } else {
            $coh->delete();
            $request->session()->flash('success', 'History deleted sucessfully.');
        }
        return redirect(route('checkout.index'));
    }
}
