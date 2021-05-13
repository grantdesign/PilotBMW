<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = ['name', 'description', 'text', 'img', 'car_id'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
