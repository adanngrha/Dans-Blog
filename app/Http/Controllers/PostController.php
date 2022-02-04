<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blogs', [
            "title" => "Blogs",
            "posts" => Post::all(),
        ]);
    }

    public function show ($slug)
    {
        return view('blog', [
            "title" => "Single Post",
            "post" => Post::find($slug),
        ]);
    }

}
