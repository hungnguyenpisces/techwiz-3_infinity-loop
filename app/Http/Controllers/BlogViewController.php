<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogViewController extends Controller
{
    public function list_blogs(Request $request){
        $all_blogs=\App\Models\Blog::where("is_viewable","TRUE");
        $recent_blogs=\App\Models\Blog::where("is_viewable","TRUE")->orderBy('created_at','desc')->take(3)->get();
        $tags=\App\Models\Tag::all();
        $query=$request->input("q","");
        if ($query){
            return view("web.blog")->with("all_blogs",$all_blogs->where("title","like","%".$query."%")->get())->with("recent_blogs",$recent_blogs)->with("tags",$tags);
        }
        return view("web.blog")->with("all_blogs",$all_blogs->get())->with("recent_blogs",$recent_blogs)->with("tags",$tags);
    }

    public function view_blog(Request $Request, $id){
        $blog_data=\App\Models\Blog::where("id",$id)->where("is_viewable","TRUE");
        if ($blog_data->count()){
            return view("web.blog-view")->with("blog_data",$blog_data->first());
        }
        abort(404);
    }

    public function tags_lookup(Request $request, $id){
        $all_blogs=\App\Models\BluTack::where("tag_id",$id)->get();
        $recent_blogs=\App\Models\Blog::where("is_viewable","TRUE")->orderBy('created_at','desc')->take(3)->get();
        $tags=\App\Models\Tag::all();
        return view("web.blog-tags")->with("all_blogs",$all_blogs)->with("recent_blogs",$recent_blogs)->with("tags",$tags);
    }
}
