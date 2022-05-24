<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Car extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['model', 'slug', 'brithday', 'price', 'img', 'img_webp', 'brand', 'body', 'class', 'engine', 'transmission'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'model']
        ];
    }

}
