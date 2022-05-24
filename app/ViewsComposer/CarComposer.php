<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Car;

class CarComposer 
{
    public function compose(View $view){
        $cars = Car::orderBy('created_at', 'desc')->paginate(10);
        $view->with('cars', $cars);
    }
}