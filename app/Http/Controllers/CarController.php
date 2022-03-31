<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $data['data'] = Car::all();
        return view('car.index', $data);
    }

    public function create()
    {
        $data['data'] = null;
        $data['route'] = route('car.store');

        return view('car.form', $data);
    }

    public function store(Request $request)
    {
        $validated_input = $request->validate([
            'manufactured_date' => 'required',
            'name' => ['required'],
            'manufacture' => ['required'],
            'price' => ['required', 'numeric'],
            'description' => ['nullable']
        ]);

        $validated_input['uuid'] = Str::uuid();

        Car::create($validated_input);

        return redirect()->route('car.index');
    }

    public function edit(Car $car)
    {
        $data['data'] = $car;
        $data['route'] = route('car.update', $car->id);

        return view('car.form', $data);
    }

    public function update(Car $car, Request $request)
    {
        $validated_input = $request->validate([
            'manufactured_date' => 'required',
            'name' => ['required'],
            'manufacture' => ['required'],
            'price' => ['required', 'numeric'],
            'description' => ['nullable']
        ]);

        $car->update($validated_input);

        return redirect()->route('car.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('car.index');
    }
}
