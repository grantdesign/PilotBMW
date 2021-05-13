<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class AboutController extends Controller
{
    public function index()
    {
    	$teams = Team::all();

    	return view('about', [
    		'title' => 'О компании',
    		'menus' => $this->getMenu(),
    		'teams' => $teams,
    	]);
    }
}
