<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $fillable = ['name', 'description', 'text', 'img', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tools()
    {
        return $this->hasMany(Tool::class);
    }
}
