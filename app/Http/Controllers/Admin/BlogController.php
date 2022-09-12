<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    /**
     * Generate a Version 4 UUID
     *
     * @return string
     */
    function generate_uuid(){
        $mxxx=dechex(16384|random_int(0, 4095));
        $nxxx=dechex(32768|random_int(0,16383));
        $time_low=bin2hex(random_bytes(4));
        $time_mid=bin2hex(random_bytes(2));
        $node=bin2hex(random_bytes(6));
        return implode("-",array($time_low,$time_mid,$mxxx,$nxxx,$node));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_blogs=\App\Models\Blog::all();
        return view("admin.blog.index")->with("all_blogs",$all_blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $token=$this->generate_uuid();
        return view("admin.blog.create")->with("thumb_token",$token);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->input("title");
        $description=$request->input("description");
        $content=$request->input("content");
        $thumb_token=$request->input("thumb_token");
        $hascount=\App\Models\Blog_thumbnail::where("thumbnail_token",$thumb_token)->count();
        if (!$hascount){
            $thumb_entry=new \App\Models\Blog_thumbnail();
            $thumb_entry->thumbnail_token=$thumb_token;
            $thumb_entry->image="blog_images/default_image.png";
            $thumb_entry->save();
        }
        $blog_entry=new \App\Models\Blog();
        $blog_entry->title=$title;
        $blog_entry->short_description=$description;
        $blog_entry->content=$content;
        $blog_entry->thumbnail_token=$thumb_token;
        if ($request->has("hidden")){
            $blog_entry->is_viewable=0;
        }
        $blog_entry->save();

        return redirect(route("blog.index"));
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
        $token=$this->generate_uuid();
        $blog_item=\App\Models\Blog::find($id);
        return view("admin.blog.modify")->with("thumb_token",$token)->with("blog_item",$blog_item);
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
        $title=$request->input("title");
        $description=$request->input("description");
        $content=$request->input("content");
        $thumb_token=$request->input("thumb_token");
        $hascount=\App\Models\Blog_thumbnail::where("thumbnail_token",$thumb_token)->count();
        $blog_entry=\App\Models\Blog::find($id);
        $blog_entry->title=$title;
        $blog_entry->short_description=$description;
        $blog_entry->content=$content;
        $blog_entry->is_viewable=1;
        if ($hascount){
            $blog_entry->thumbnail_token=$thumb_token;
        }
        if ($request->has("hidden")){
            $blog_entry->is_viewable=0;
        }
        $blog_entry->save();

        return redirect(route("blog.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_entry=\App\Models\Blog::find($id);
        if ($blog_entry){
            $blog_entry->delete();
        }
        return redirect(route("blog.index"));
    }

    public function upload(Request $request)
    {
        $thumb_token=$request->input("thumb_token");
        $file=$request->file("file");
        $path="blog_images/default_image.png";
        if ($file){
            if ($request->file("file")->isValid()){
                $path=$file->store("blog_images","public");
            }
        }
        $thumb_entry=new \App\Models\Blog_thumbnail();
        $thumb_entry->thumbnail_token=$thumb_token;
        $thumb_entry->image=$path;
        $thumb_entry->save();
    }
}
