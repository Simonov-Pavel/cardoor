<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Car;

class CarPageComposer 
{
    public function compose(View $view){
        $cars = Car::with('body', 'engine', 'transmission', 'brand', 'description')->orderBy('created_at', 'desc')->paginate(4);
        $view->with('cars', $cars);
    }
}