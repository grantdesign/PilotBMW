<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
use App\Category;
use App\Tool;
use App\Message;

class MainController extends Controller
{
    public function index()
    {
    	return view('admin.index', [
    		'title' => 'Панель управления',
    		'cars' => Car::count(),
    		'messages' => Message::count(),
    		'tools' => Tool::count(),
    		'categories' => Category::count(),
    	]);
    }
}
