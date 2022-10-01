<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
        $tags=explode(",",$request->input("tags"));
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
        $blog_entry->user_id=Auth::user()->id;
        if ($request->has("hidden")){
            $blog_entry->is_viewable=0;
        }
        $blog_entry->save();
        if ($tags){
            foreach ($tags as $index=>$tag){
                $tag_exists=\App\Models\Tag::where("tag_name",$tag);
                $tag_id=0;
                if ($tag_exists->count()){
                    $tag_id=$tag_exists->first()->id;
                }
                else{
                    $new_tag=new \App\Models\Tag();
                    $new_tag->tag_name=$tag;
                    $new_tag->save();
                    $tag_id=$new_tag->id;
                }
                $new_blutack=new \App\Models\BluTack();
                $new_blutack->blog_id=$blog_entry->id;
                $new_blutack->tag_id=$tag_id;
                $new_blutack->save();
            }
        }

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
        $blog_tags=array();
        foreach($blog_item->blutack as $tag_item){
            $blog_tags[]=$tag_item->tag_name;
        }
        return view("admin.blog.modify")->with("thumb_token",$token)->with("blog_item",$blog_item)->with("blog_tags",implode(",",$blog_tags));
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
        $tags=explode(",",$request->input("tags"));

        $hascount=\App\Models\Blog_thumbnail::where("thumbnail_token",$thumb_token)->count();
        $blog_entry=\App\Models\Blog::find($id);

        $old_tags=array();
        foreach($blog_entry->blutack as $tag_item){
            $old_tags[]=$tag_item->tag_name;
        }
        // n² complexity, nobody's inserting a thousand tags for the lulz, but still a stupid design choice
        $insert_tags=array_diff($tags,$old_tags);
        $remove_tags=array_diff($old_tags,$tags);
        foreach ($insert_tags as $insert_tag){
            $tag_id=0;
            $tag_exists=\App\Models\Tag::where("tag_name",$insert_tag);
            if ($tag_exists->count()){
                $tag_id=$tag_exists->first()->id;
            }
            else {
                $new_tag=new \App\Models\Tag();
                $new_tag->tag_name=$insert_tag;
                $new_tag->save();
                $tag_id=$new_tag->id;
            }
            $new_blutack=new \App\Models\BluTack();
            $new_blutack->blog_id=$id;
            $new_blutack->tag_id=$tag_id;
            $new_blutack->save();
        }
        foreach ($remove_tags as $remove_tag){
            $del_tag=\App\Models\Tag::where("tag_name",$remove_tag)->first();
            $del_blutack=\App\Models\BluTack::where("tag_id",$del_tag->id);
            if ($del_blutack->count()<=1){
                $del_tag->delete();
            }
            $del_blutack->where("blog_id",$id)->first()->delete();
        }

        $blog_entry->title=$title;
        $blog_entry->short_description=$description;
        $blog_entry->content=$content;
        $blog_entry->user_id=Auth::user()->id;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_entry=\App\Models\Blog::find($id);
        if ($blog_entry){
            $remove_tags=array();
            foreach($blog_entry->blutack as $tag_item){
                $remove_tags[]=$tag_item->tag_name;
            }
            foreach ($remove_tags as $remove_tag){
                $del_tag=\App\Models\Tag::where("tag_name",$remove_tag)->first();
                $del_blutack=\App\Models\BluTack::where("tag_id",$del_tag->id);
                if ($del_blutack->count()<=1){
                    $del_tag->delete();
                }
                $del_blutack->where("blog_id",$id)->first()->delete();
            }
            $blog_entry->delete();
        }
        return redirect(route("blog.index"));
    }

    /**
     * Upload a file with a given thumbnail token
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function upload(Request $request)
    {
        $thumb_token=$request->input("thumb_token");
        $file=$request->file("file");
        $path="blog_images/default_image.png";
        if ($file){
            if ($file->isValid()){
                $path=$file->store("blog_images","public");
            }
        }
        $thumb_entry=new \App\Models\Blog_thumbnail();
        $thumb_entry->thumbnail_token=$thumb_token;
        $thumb_entry->image=$path;
        $thumb_entry->save();
    }

    /**
     * Upload a file to be used within CKEditor
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ck_upload(Request $request)
    {
        $thumb_token=$request->input("thumb_token");
        $file=$request->file("upload");
        $path="/storage/blog_images/default_image.png";
        if ($file){
            if ($file->isValid()){
                $path="/storage/".$file->store("blog_images","public");
            }
        }
        return response()->json([
            "url"=>$path
        ]);
    }
}
