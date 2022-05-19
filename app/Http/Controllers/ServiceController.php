<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('service');
    }

    public function show(Service $service){
        return view('service-show', compact('service'));
    }
}
