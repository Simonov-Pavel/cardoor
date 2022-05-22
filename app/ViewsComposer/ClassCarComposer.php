<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\ClassCar;

class ClassCarComposer 
{
    public function compose(View $view){
        $clases = ClassCar::get();
        $view->with('clases', $clases);
    }
}