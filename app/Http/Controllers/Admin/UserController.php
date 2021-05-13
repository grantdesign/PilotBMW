<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('admin.users.index', [
            'title' => 'Список пользователей',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', [
            'title' => 'Добавление пользователя',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'confirmed' => 'Пароли не совпадают.',
        ];

        $request->validate([
            'password' => 'confirmed',
        ], $messages);

        $input = $request->except('_token', 'password_confirmation');
        $input['password'] = Hash::make($request->password);

        User::create($input);
        return redirect()->route('users.index')->with('status', 'Пользователь добавлен.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $roles = [
            ['value' => '0', 'title' => 'Пользователь'],
            ['value' => '1', 'title' => 'Администратор'],
        ];

        return view('admin.users.edit', [
            'title' => 'Изменение пользователя',
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'confirmed' => 'Пароли не совпадают.',
        ];

        $request->validate([
            'password' => 'confirmed',
        ], $messages);

        $user = User::find($id);
        $input = $request->except('_token', '_method', 'password_confirmation');

        if ($input['password'] == null) {

            $input['password'] = $user->password;

        } else $input['password'] = Hash::make($request->password);

        $user->update($input);
        return redirect()->route('users.index')->with('status', 'Пользователь изменен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('status', 'Пользователь удален.');
    }
}
