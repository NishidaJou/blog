<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return View('posts.index')->with(['posts' =>$post->getPaginateByLimit(5)]);
    }
    
   public function show(Post $post)
{
    return view('posts.show')->with(['post' => $post]);
}

public function create()
{
   return view('posts/create');
}
public function edit(Post $post)
{
    return view('posts.edit')->with(['post' => $post]);
}

}
