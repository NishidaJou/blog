<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return View('posts.index')->with(['posts' =>$post->getPaginateByLimit(10)]);
    }
    
   public function show(Post $post)
{
    return view('posts.show')->with(['post' => $post]);
}

public function create(Category $category)
{
    return view('posts.create')->with(['categories' => $category->get()]);
}
public function edit(Post $post)
{
    return view('posts.edit')->with(['post' => $post]);
}
public function delete(Post $post)
{
    $post->delete();
    return redirect('/');
}


}
