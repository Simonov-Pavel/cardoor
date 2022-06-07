<?php

namespace App\Services\Filters;

use App\Models\ClassCar;
use App\Models\Body;
use App\Models\Car;
use Carbon\Carbon;

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

    public function date($string){
        $date = explode(',', $string);
        $start = Carbon::createFromFormat('d.m.Y', $date[0]);
        $end = Carbon::createFromFormat('d.m.Y', $date[1]);
        $car_ids = [];
        $cars = Car::get();
        foreach ($cars as $car) {
            if($car->rents->count() > 0){
                foreach($car->rents as $rent){
                    $startRent = Carbon::createFromFormat('d.m.Y', $rent->startRent);
                    $endRent = Carbon::createFromFormat('d.m.Y', $rent->endRent);
                    if(!($start->between($startRent, $endRent) || $end->between($startRent, $endRent) || $startRent->between($start, $end))){
                        $car_ids[] = $car->id;
                    }
                }
            }else $car_ids[] = $car->id;
            
        }
        return $this->builder->whereIn('id', $car_ids);
    }
}