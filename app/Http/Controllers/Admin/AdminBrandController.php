<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Requests\Admin\BrandRequest;

class AdminBrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }

    public function create()
    {
        return view('admin.brand.form');
    }

    public function store(BrandRequest $request)
    {
        //
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.form', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        //
    }

    public function destroy(Brand $brand)
    {
        //
    }
}
