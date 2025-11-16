<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'category',
        'latitude',
        'longitude',
        'address',
        'city',
        'postal_code',
        'phone',
        'website'
    ];

}
