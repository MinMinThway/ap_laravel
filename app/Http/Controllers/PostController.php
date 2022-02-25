<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $datas = Post::all();
      return view('home', compact("datas"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:225",
            "description" => "required|max:225" 
        ]);
        // DB::table("posts")->insert([
        //     "name" => $request->name,
        //     "description" => $request->description,
        // ]);
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('posts.index')->with("success", "Creating success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        dd($post->categories);
        return view("show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view("edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

    //    $post = Post::findOrFail($id);
       $post->name = $request->name;
       $post->description = $request->description;
       $post->save();
       return redirect()->route('posts.index')->with("success", "Updating success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        // $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with("success", "Deleting success");
    }
}
