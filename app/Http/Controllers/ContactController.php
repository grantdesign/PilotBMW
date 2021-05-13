<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Message;

class ContactController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->isMethod('post')) {

    		$input = $request->except('_token');

    		$messages = [
    			'required' => 'Поле :attribute обязательно для заполнения.',
    			'email' => 'Поле :attribute имеет неверный формат.',
    			'numeric' => 'Поле :attribute имеет неверный формат.',
    		];

    		$validate = Validator::make($input, [
    			'name' => 'required',
    			'email' => 'required|email',
    			'phone' => 'required|numeric',
    		], $messages);

    		if ($validate->fails()) return redirect()->route('contact')->withErrors($validate)->withInput();

            Message::create($request->all());

    		return redirect()->route('contact')->with('status', 'Сообщение отправлено.');

    	}

    	return view('contact', [
    		'title' => 'Контакты',
    		'menus' => $this->getMenu(),
    	]);
    }
}