<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\ServiceDescription;

class ServiceDescriptionComposer 
{
    public function compose(View $view){
        $service_description = ServiceDescription::first();
        $view->with('service_description', $service_description);
    }
}