<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		if (Auth::attempt([
    		    'email' => $request->email,
    		    'password' => $request->password,
    		])) {

    		    session()->flash('status', 'Вы успешно авторизованы.');
    		    
    		    if (Auth::user()->is_admin) {
    		        return redirect()->route('admin.index');
    		    } else {
    		        return redirect()->route('home');
    		    }

    		} else return redirect()->route('login')->withErrors('Вы ввели неверный email и/или пароль.');

    	}

    	return view('login', [
    		'title' => 'Авторизация',
    		'menus' => $this->getMenu(),
    	]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
