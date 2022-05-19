<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Http\Requests\Admin\PartnerRequest;
use App\Services\Images;

class AdminPartnerController extends Controller
{
    public function index()
    {
        return view('admin.partner.index');
    }

    public function create()
    {
        return view('admin.partner.form');
    }

    public function store(PartnerRequest $request)
    {
        if($request->has('image')){
            Images::createImages($request, 'partner', 250, 105);
        }
        $params = $request->all();
        Partner::create($params);
        return to_route('partner.index')->with('success', 'Новый партнер успешно добавлен');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partner.form', compact('partner'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
        if($request->has('image')){
            Images::updateImages($request, $partner, 'partner', 250, 105);
        }
        $params = $request->all();

        $partner->update($params);
        return to_route('partner.index')->with('success', 'Успешно обновлено');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        Images::deleteImages($partner, 'partner');
        return to_route('partner.index')->with('warning', "Партнер $partner->title удален");
    }
}
