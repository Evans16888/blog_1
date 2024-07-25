<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //$posts = \App\Post::all();
        return view('posts.index', [
            'posts'=> Post::latest()->paginate()
        ]);
    }
    public function create(post $post){
        return view('posts.create',['post'=> $post]);
    }
    public function edit(post $post){
        return view('posts.edit', compact('post'));
         //tambien se puede usar  ['post'=> $post] al igual que compact()
    }
    public function destroy(Post $post)
    {
        $post->delete();
        //return back();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');


    }
}
