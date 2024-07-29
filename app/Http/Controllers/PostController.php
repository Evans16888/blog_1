<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        //$posts = \App\Post::all();
        return view('posts.index', [
            'posts'=> Post::latest()->paginate()
        ]);
    }
    public function create(post $post){
        return view('posts.create',compact('post'));
    }
    public function edit(post $post){
        return view('posts.edit', ['post'=> $post]);
         //tambien se puede usar  ['post'=> $post] al igual que compact()
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        $post = $request->user()->posts()->create([
            'title' => $title= $request->title,
            'slug' => str::slug('title'),
            'body' => $request->body,

        ]);
        return redirect()->route('posts.edit', $post)->with('success', 'Post created successfully.');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        //return back();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');


    }
}
