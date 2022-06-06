<?php

namespace App\Services\Rent;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RentService
{
    public static function validateDate($startRent, $endRent){
        $start = Carbon::createFromFormat('d.m.Y', $startRent);
        $end = Carbon::createFromFormat('d.m.Y', $endRent);
        $today = Carbon::now();
        if($start->lte($today) || $start->gte($end)){
            return false;
        }
        return true;
    }
}