<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['Description', 'Make', 'Model','Year','Longitude', 'Latitude', 'price'];
}
