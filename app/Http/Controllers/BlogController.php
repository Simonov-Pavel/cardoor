<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        return view('blog');
    }

    public function show(Post $post){
        return view('post-show', compact('post'));
    }
}
