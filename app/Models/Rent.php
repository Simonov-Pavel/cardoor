<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Car;
use App\Models\User;

class Rent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['car_id', 'user_id', 'startRent', 'endRent'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
