<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\Admin\PostRequest;
use App\Services\Images;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.post.index');
    }

    public function create()
    {
        return view('admin.post.form');
    }

    public function store(PostRequest $request)
    {
        if($request->has('image')){
            Images::createImages($request, 'posts', 1000, 667);
        }
        $params = $request->all();
        $car = Post::create($params);
        return to_route('post.index')->with('success', "Статья $request->header успешно добавленна");
    }

    public function edit(Post $post)
    {
        return view('admin.post.form', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        if($request->has('image')){
            Images::updateImages($request, $post, 'posts', 1000, 667);
        }
        $params = $request->all();

        $post->update($params);
        return to_route('post.index')->with('success', "Статья $post->header успешно обновленна");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        Images::deleteImages($post, 'posts');
        return to_route('post.index')->with('warning', "Статья $post->header удалена");
    }
}
