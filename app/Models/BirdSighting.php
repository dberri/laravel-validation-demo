<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirdSighting extends Model
{
    use HasFactory;

    protected $fillable = [
        'common_name',
        'species',
        'sighted_at',
        'quantity',
        'latitude',
        'longitude',
    ];
}
