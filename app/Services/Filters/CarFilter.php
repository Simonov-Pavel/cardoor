<?php

namespace App\Services\Filters;

use App\Models\ClassCar;
use App\Models\Body;

class CarFilter extends BaseFilter
{
    public function class($slug){
        $class = ClassCar::where('slug', $slug)->first();
        return $this->builder->where('class_car_id', $class->id);
    }

    public function body($slug){
        $body = Body::where('slug', $slug)->first();
        return $this->builder->where('body_id', $body->id);
    }
}