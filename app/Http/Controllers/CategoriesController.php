<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Category;

class CategoriesController extends Controller
{
	public function index(Category $category)
	{
		$cars = Car::where('category_id', $category->id)->paginate(6);

    	return view('category', [
	    	'title' => $category->name,
	    	'menus' => $this->getMenu(),
	    	'categories' => $this->getCategory(),
	    	'cars' => $cars,
    	]);
	}
}
