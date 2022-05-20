<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Service;

class ServiceMainComposer 
{
    public function compose(View $view){
        $services = Service::select('id', 'header', 'img', 'img_webp')->orderBy('id', 'desc')->take(6)->get();
        $view->with('services', $services);
    }
}