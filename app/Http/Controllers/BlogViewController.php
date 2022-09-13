<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogViewController extends Controller
{
    public function list_blogs(){
        $all_blogs=\App\Models\Blog::all();
        return view("web.blog")->with("all_blogs",$all_blogs);
    }

    public function view_blog(Request $Request, $id){
        $blog_data=\App\Models\Blog::where("id",$id)->where("is_viewable","TRUE");
        if ($blog_data->count()){
            return view("web.blog-view")->with("blog_data",$blog_data->first());
        }
        abort(404);
    }
}
