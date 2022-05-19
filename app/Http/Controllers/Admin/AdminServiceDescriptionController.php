<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceDescription;
use Illuminate\Http\Request;

class AdminServiceDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.servise-description.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceDescription  $serviceDescription
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceDescription $serviceDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceDescription  $serviceDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceDescription $serviceDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceDescription  $serviceDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceDescription $serviceDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceDescription  $serviceDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceDescription $serviceDescription)
    {
        //
    }
}
