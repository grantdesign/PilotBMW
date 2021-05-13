<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ModelsController extends Controller
{
    public function index()
    {
    	$cars = Car::orderBy('id', 'desc')->paginate(3);

    	return view('cars', [
    		'title' => 'Модели',
    		'menus' => $this->getMenu(),
    		'cars' => $cars,
            'categories' => $this->getCategory(),
    	]);
    }
}
