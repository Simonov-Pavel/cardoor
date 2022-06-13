<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Post;

class PostComposer 
{
    public function compose(View $view){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $view->with('posts', $posts);
    }
}