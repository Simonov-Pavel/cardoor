<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Post;

class MainPostComposer 
{
    public function compose(View $view){
        $posts = Post::select('id', 'header', 'img', 'img_webp', 'text_preview')->orderBy('id','desc')->take(3)->get();
        $view->with('posts', $posts);
    }
}