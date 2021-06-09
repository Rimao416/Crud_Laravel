<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addPost()
    {
        return view('add-post');
    }
    public function createPost(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_created','Post has been created successfully');
    }
    public function getPost(){
        $posts=Post::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }
    public function getPostById($id){
        $post=Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_deleted','Post has been delete successfully');
    }
    public function editPost($id)
    {
        $post=Post::find($id);
        return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request)
    {
        $post=Post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_updated','YES YES');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
