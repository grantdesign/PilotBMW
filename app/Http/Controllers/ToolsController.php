<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolsController extends Controller
{
	public function index()
	{
		$tools = Tool::orderBy('id', 'desc')->paginate(6);

		return view('tools', [
			'title' => 'Запчасти',
			'menus' => $this->getMenu(),
			'tools' => $tools,
	        'categories' => $this->getCategory(),
		]);
	}
}
