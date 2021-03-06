<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Car;

class MainCarComposer 
{
    public function compose(View $view){
        $cars = Car::with('body', 'engine', 'transmission')->orderBy('created_at', 'desc')->take(6)->get();
        $view->with('cars', $cars);
    }
}