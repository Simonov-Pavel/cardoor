<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentRequest;
use App\Services\Rent\RentService;
use App\Models\Rent;
use App\Models\Car;
use App\Events\RentCreated;
use Carbon\Carbon;

class RentController extends Controller
{
    public function create(string $slug)
    {
        $car = Car::where('slug', $slug)->first();
        return view('rent', compact('car'));
    }

    public function store(RentRequest $request)
    {
        $validate = RentService::validate($request);
        if(!$validate){
            return redirect()->back()->with('warning', 'Произошла ошибка, проверьте даты аренды и попробуйте снова');
        }
        $request['user_id'] = auth()->user()->id;
        $rent = Rent::create($request->all());
        $email = config('mail.admin.address');
        event(new RentCreated($rent, $email));
        return to_route('car')->with('success', 'Ув. '.$rent->user->name.' ваша заявка на аренду автомобиля '.$rent->car->model.' с '.$rent->startRent.' по '.$rent->endRent.' принята, в ближайшее время с вами свяжется наш менеджер по указанному вами номеру '.$rent->user->phone);
    }
}
