<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone', 'email', 'img', 'img_webp', 'description','start_week',
                        'end_week', 'start_time', 'end_time', 'map', 'latitude', 'longitude'];
}
