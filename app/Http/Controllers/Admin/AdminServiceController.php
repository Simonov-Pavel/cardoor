<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\Admin\ServiceRequest;
use App\Services\Images;

class AdminServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function create()
    {
        return view('admin.service.form');
    }

    public function store(ServiceRequest $request)
    {
        if($request->has('image')){
            Images::createImages($request, 'service', 640);
        }
        $params = $request->all();
        Service::create($params);
        return to_route('service.index')->with('success', 'Новый услуга успешно добавлена');
    }

    public function edit(Service $service)
    {
        return view('admin.service.form', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        if($request->has('image')){
            Images::updateImages($request, $service, 'service', 640);
        }
        $params = $request->all();

        $service->update($params);
        return to_route('service.index')->with('success', 'Успешно обновлено');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        Images::deleteImages($service, 'service');
        return to_route('service.index')->with('warning', "Услуга $service->header удалена");
    }
}
