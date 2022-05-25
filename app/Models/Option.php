<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
