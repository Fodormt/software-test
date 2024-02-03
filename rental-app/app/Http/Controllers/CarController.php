<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cars', ['cars' => Car::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-car');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'plate' => 'required|string|regex:/^[A-Z]{3}-\d{3}$/i',
            'price' => 'required|numeric',
            'filename' => 'required|image|max:2048',
        ]);

        // Handle file upload
        $imageName = time() . '.' . $request->filename->extension();
        $request->filename->move(public_path('images'), $imageName);

        // Create a new car record
        Car::create([
            'plate' => $request->plate,
            'price' => $request->price,
            'filename' => $imageName,
        ]);

        // Redirect back with success message
        return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('add-car', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'plate' => 'required|string|regex:/^[A-Z]{3}-\d{3}$/i',
            'price' => 'required|numeric',
            'filename' => 'nullable|image|max:2048', // Allow the filename to be nullable
        ]);

        // Find the car record by its ID
        $car = Car::findOrFail($id);

        // Update the car's data
        $car->plate = $request->plate;
        $car->price = $request->price;

        // Check if a new image file is provided
        if ($request->hasFile('filename')) {
            // Handle file upload
            $imageName = time() . '.' . $request->filename->extension();
            $request->filename->move(public_path('images'), $imageName);
            // Update the filename in the database
            $car->filename = $imageName;
        }

        // Save the changes to the database
        $car->save();

        // Redirect back with success message
        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        // Find the car record by its ID
        $car = Car::findOrFail($id);

        // Update the car's is_active attribute to false (deactivate)
        $car->is_active = false;

        // Save the changes to the database
        $car->save();

        // Redirect back with success message
        return redirect()->route('cars.index');
    }
}
