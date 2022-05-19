<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Service;

class ServiceComposer 
{
    public function compose(View $view){
        $service = new Service;
        $services = $service->paginate(10);
        $view->with('services', $services);
    }
}