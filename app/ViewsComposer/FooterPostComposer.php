<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Post;

class FooterPostComposer 
{
    public function compose(View $view){
        $posts = Post::select('id', 'header')->orderBy('id','desc')->take(4)->get();
        $view->with('posts', $posts);
    }
}