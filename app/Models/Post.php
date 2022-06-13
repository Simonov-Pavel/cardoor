<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['header', 'slug', 'description', 'img', 'img_webp'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'header']
        ];
    }
}
