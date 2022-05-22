<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Transmission;

class TransmissionComposer 
{
    public function compose(View $view){
        $transmissions = Transmission::orderBy('id', 'desc')->get();
        $view->with('transmissions', $transmissions);
    }
}