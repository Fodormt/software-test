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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    // Search cars by date
    public function search(Request $request)
    {
        // Validate the input
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Extract the start and end dates from the request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Find cars available between the specified dates
        $availableCars = Car::whereDoesntHave('reservations', function ($query) use ($startDate, $endDate) {
            $query->where('date2', '>', $startDate)
                ->where('date1', '<', $endDate);
        })->get();

        // Pass the available cars to the view
        return view('search-results', compact('availableCars'));
    }
}
