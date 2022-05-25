<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Http\Requests\Admin\OptionRequest;

class AdminOptionController extends Controller
{
    public function index()
    {
        return view('admin.option.index');
    }

    public function create()
    {
        return view('admin.option.form');
    }

    public function store(OptionRequest $request)
    {
        //
    }

    public function show(Option $option)
    {
        //
    }

    public function edit(Option $option)
    {
        return view('admin.option.form', compact('option'));
    }

    public function update(OptionRequest $request, Option $option)
    {
        //
    }

    public function destroy(Option $option)
    {
        //
    }
}
