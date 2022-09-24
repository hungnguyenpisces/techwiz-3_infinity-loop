<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CheckOutHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            $user = Auth::user();
            $utls = Comment::join('departments', 'comment.department_id', '=', 'departments.id')
                ->join('hospitals', 'comment.hospital_id', '=', 'hospitals.id')
                ->select('comment.*', 'hospitals.name as hospital_name', 'departments.name as department_name')
                ->where('comment.user_id', $user->id)
                ->get();
            return view('web.feedback.feedback-index', compact('utls'));
        }
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            $user = Auth::user();
            $check_out_histories = CheckOutHistory::join('hospitals', 'check_out_histories.hospital_id', '=', 'hospitals.id')
                ->join('departments', 'check_out_histories.department_id', '=', 'departments.id')
                ->select('check_out_histories.*', 'hospitals.name as hospital_name', 'departments.name as department_name')
                ->where('check_out_histories.user_id', $user->id)
                ->where('check_out_histories.id', $id)
                ->first();
            // dd($check_out_histories->id);
            return view('web.feedback.feedback-create', compact('check_out_histories'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cmt = new Comment();
        $cmt->check_out_history_id = $request->check_out_history_id;
        $cmt->doctor_rate = $request->doctor_rate;
        $cmt->hospital_rate = $request->hospital_rate;
        $cmt->department_rate = $request->department_rate;
        $cmt->overall_rate = $request->overall_rate;
        $cmt->content = $request->content;
        $cmt->save();

        $request->session()->flash('success', 'Comment created sucessfully.');
        return redirect(route('comment.index'));
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
        $cmt = Comment::find($id);
        return view('comment.edit')->with('cmt', $cmt);
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
        $cmt = Comment::find($id);
        $cmt->check_out_history_id = $request->check_out_history_id;
        $cmt->doctor_rate = $request->doctor_rate;
        $cmt->hospital_rate = $request->hospital_rate;
        $cmt->department_rate = $request->department_rate;
        $cmt->overall_rate = $request->overall_rate;
        $cmt->content = $request->content;
        $cmt->save();

        $request->session()->flash('success', 'Comment updated sucessfully.');
        return redirect(route('comment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $cmt = Comment::find($id);
        if ($cmt == null) {
            $request->session()->flash('danger', 'Comment not found.');
        } else {
            $cmt->delete();
            $request->session()->flash('success', 'Comment deleted sucessfully.');
        }
        return redirect(route('comment.index'));
    }
}
