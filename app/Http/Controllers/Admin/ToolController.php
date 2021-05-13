<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tool;
use App\Car;
use Storage;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = Tool::orderBy('id', 'desc')->with('car')->paginate(5);

        return view('admin.tools.index', [
            'title' => 'Список запчастей',
            'tools' => $tools,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();

        return view('admin.tools.create', [
            'title' => 'Добавление запчасти',
            'cars' => $cars,
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
            
            $path = $request->file('img')->store('tools');
            $input['img'] = $path;

        }

        Tool::create($input);
        return redirect()->route('tools.index')->with('status', 'Запчасть добавлена.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::all();
        $tool = Tool::find($id);

        return view('admin.tools.edit', [
            'title' => 'Изменение запчасти',
            'cars' => $cars,
            'tool' => $tool,
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

        $tool = Tool::find($id);
        $input = $request->except('_token', '_method');

        if ($request->hasFile('img')) {
            
            Storage::delete($tool->img);
            $path = $request->file('img')->store('tools');
            $input['img'] = $path;

        } else $input['img'] = $tool->img;

        $tool->update($input);
        return redirect()->route('tools.index')->with('status', 'Запчасть изменена.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tool = Tool::find($id);
        Storage::delete($tool->img);
        $tool->delete();

        return redirect()->route('tools.index')->with('status', 'Запчасть удалена.');
    }
}
