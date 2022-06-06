<?php

namespace App\Services\Rent;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RentService
{
    public static function validate($request){
        $start = Carbon::createFromFormat('d.m.Y', $request->startRent);
        $end = Carbon::createFromFormat('d.m.Y', $request->endRent);
        $today = Carbon::today();
        if($start->lte($today) || $start->gte($end)){
            return false;
        }
        
        return $request;
    }
}