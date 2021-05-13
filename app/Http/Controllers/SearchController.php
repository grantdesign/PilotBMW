<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::where('name', 'LIKE', "%{$request->s}%")->orderBy('id', 'desc')->paginate(6)->appends(request()->only('s'));

        return view('search', [
            'title' => 'Поиск',
            'menus' => $this->getMenu(),
            'cars' => $cars,
            'categories' => $this->getCategory(),
        ]);
    }
}
