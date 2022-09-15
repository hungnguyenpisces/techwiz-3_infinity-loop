<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsCmt = Comment::all();
        return view('')->with('lsCmt', $lsCmt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.feedback.feedback-create');
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
        $cmt->users_id = $request->users_id;
        $cmt->hospital_id = $request->hospital_id;
        $cmt->content = $request->content;
        $cmt->rate = $request->rate;
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
        $cmt->users_id = $request->users_id;
        $cmt->hospital_id = $request->hospital_id;
        $cmt->content = $request->content;
        $cmt->rate = $request->rate;
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
        if($cmt == null) {
            $request->session()->flash('danger', 'Comment not found.');
        } else {
            $cmt->delete();
            $request->session()->flash('success', 'Comment deleted sucessfully.');
        }
        return redirect(route('comment.index'));
    }
}
