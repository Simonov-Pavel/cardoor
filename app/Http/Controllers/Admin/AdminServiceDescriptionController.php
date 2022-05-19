<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceDescription;
use Illuminate\Http\Request;

class AdminServiceDescriptionController extends Controller
{
    public function index()
    {
        return view('admin.service-description.index');
    }

    public function create()
    {
        return view('admin.service-description.form');
    }

    public function store(ServiceDescriptionRequest $request)
    {
        $params = $request->all();
        ServiceDescription::create($params);
        return to_route('service-description.index')->with('success', 'Успешно добавленно');
        
    }

    public function edit(ServiceDescription $service_description)
    {
        return view('admin.service-description.form', compact('service_description'));
    }

    public function update(ServiceDescriptionRequest $request, ServiceDescription $service_description)
    {
        $service_description->update($request->all());
        return to_route('service-description.index')->with('success', 'Успешно обновлено');
    }

}
