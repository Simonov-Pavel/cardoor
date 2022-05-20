<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Service;

class ServiceComposer 
{
    public function compose(View $view){
        $service = new Service;
        $services = $service->select('id', 'header', 'img', 'img_webp')->orderBy('id', 'desc')->paginate(9);
        $view->with('services', $services);
    }
}