<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Car;

class Engine extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title', 'slug'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
