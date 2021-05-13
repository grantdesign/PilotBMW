<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index()
    {
    	$cars = Car::orderBy('id', 'desc')->get();

    	return view('home', [
    		'title' => 'BMW Pilot',
    		'menus' => $this->getMenu(),
    		'cars' => $cars,
    	]);
    }
}
