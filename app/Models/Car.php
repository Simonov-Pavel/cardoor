<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Description;
use App\Models\Option;
use App\Models\Brand;
use App\Models\Body;
use App\Models\ClassCar;
use App\Models\Engine;
use App\Models\Transmission;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Services\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class Car extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['model', 'slug', 'brithday', 'price', 'img', 'img_webp', 'brand_id', 'body_id', 'class_cars_id', 'engine_id', 'transmission_id'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'model']
        ];
    }

    public function description()
    {
        return $this->hasOne(Description::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function body()
    {
        return $this->belongsTo(Body::class);
    }

    public function class_car()
    {
        return $this->belongsTo(ClassCar::class);
    }

    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function scopeFilter(Builder $builder, BaseFilter $filter)
    {
        return $filter->apply($builder);
    }
}
