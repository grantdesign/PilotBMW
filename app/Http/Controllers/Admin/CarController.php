<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
use App\Category;
use Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->with('category')->paginate(5);

        return view('admin.cars.index', [
            'title' => 'Список автомобилей',
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.cars.create', [
            'title' => 'Добавление автомобиля',
            'categories' => $categories,
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
            
            $path = $request->file('img')->store('cars');
            $input['img'] = $path;

        }

        Car::create($input);
        return redirect()->route('cars.index')->with('status', 'Автомобиль добавлен.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $car = Car::find($id);

        return view('admin.cars.edit', [
            'title' => 'Изменение автомобиля',
            'categories' => $categories,
            'car' => $car,
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

        $car = Car::find($id);
        $input = $request->except('_token', '_method');

        if ($request->hasFile('img')) {
            
            Storage::delete($car->img);
            $path = $request->file('img')->store('cars');
            $input['img'] = $path;

        } else $input['img'] = $car->img;

        $car->update($input);
        return redirect()->route('cars.index')->with('status', 'Автомобиль изменен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if ($car->tools->count() == 0) {

            Storage::delete($car->img);
            $car->delete();
            return redirect()->route('cars.index')->with('status', 'Автомобиль удален.');

        } else return redirect()->back()->withErrors('Ошибка! В данный автомобиль добавлена запчасть.');
    }
}
