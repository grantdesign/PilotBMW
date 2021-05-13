<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolShowController extends Controller
{
    public function index(Tool $tool)
    {
    	return view('tool', [
    		'title' => $tool->name,
    		'menus' => $this->getMenu(),
    		'tool' => $tool,
    	]);
    }
}
