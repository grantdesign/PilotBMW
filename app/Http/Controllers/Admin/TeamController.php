<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(5);

        return view('admin.teams.index', [
            'title' => 'Список участников',
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create', [
            'title' => 'Добавление участника',
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
            'image' => 'Файл не является изображением.',
        ];

        $request->validate([
            'img' => 'required|image',
        ], $messages);

        $input = $request->except('_token');

        if ($request->hasFile('img')) {

            $path = $request->file('img')->store('teams');
            $input['img'] = $path;

        }

        Team::create($input);
        return redirect()->route('teams.index')->with('status', 'Участник добавлен.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);

        return view('admin.teams.edit', [
            'title' => 'Изменение участника',
            'team' => $team,
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
            'image' => 'Файл не является изображением.',
        ];

        $request->validate([
            'img' => 'image',
        ], $messages);

        $team = Team::find($id);
        $input = $request->except('_token', '_method');

        if ($request->hasFile('img')) {
            
            Storage::delete($team->img);
            $path = $request->file('img')->store('teams');
            $input['img'] = $path;

        } else $input['img'] = $team->img;

        $team->update($input);
        return redirect()->route('teams.index')->with('status', 'Участник изменен.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        Storage::delete($team->img);
        $team->delete();

        return redirect()->route('teams.index')->with('status', 'Участник удален.');
    }
}
