<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['header', 'slug', 'text', 'text_preview', 'img', 'img_webp'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'header']
        ];
    }
}
