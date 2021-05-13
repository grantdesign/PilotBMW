<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ModelShowController extends Controller
{
    public function index(Car $car)
    {
    	return view('car', [
    		'title' => $car->name,
    		'menus' => $this->getMenu(),
    		'car' => $car,
    	]);
    }
}
