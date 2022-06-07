<?php

namespace App\Services\Rent;

use Carbon\Carbon;

class RentService
{
    public static function validateDate($request){
        $start = Carbon::createFromFormat('d.m.Y', $request->startRent);
        $end = Carbon::createFromFormat('d.m.Y', $request->endRent);
        $today = Carbon::now();
        if($start->lte($today) || $start->gte($end)){
            return false;
        }
            return true;       
    }
}