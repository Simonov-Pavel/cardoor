<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Http\Requests\Admin\AboutRequest;
use App\Services\Images;
use Illuminate\Support\Str;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        if($request->has('image')){
            Images::createImages($request, 'about', 698, 241);
        }
        $params = $request->all();
        About::create($params);
        return to_route('about.index')->with('success', 'Успешно добавленно');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.form', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\AboutRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, About $about)
    {
        $request->video = Str::replace(Str::of($request->video)->after('</iframe>'), '', $request->video);
        
        if($request->has('image')){
            Images::updateImages($request, $about, 'about', 698, 241);
        }
        $params = $request->all();

        $about->update($params);
        return to_route('about.index')->with('success', 'Успешно обновлено');
    }
}
