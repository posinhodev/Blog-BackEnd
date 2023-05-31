<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return Post::latest()->get();
    }

    public function store(Request $request, Post $post){
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();
        return $post;
    }
    
    public function show(Post $post){
        return $post;
    }
}
