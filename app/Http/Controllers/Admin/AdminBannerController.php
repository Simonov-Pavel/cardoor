<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Http\Requests\Admin\BannerRequest;

class AdminBannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner)
    {
        $banner->update($request->all());
        return to_route('banner.index')->with('success', 'Успешно обнавленно');
    }
}
