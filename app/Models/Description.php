<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Description extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'text_preview', 'text'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
