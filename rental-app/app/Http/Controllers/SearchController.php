<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Search;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validate the input
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Extract the start and end dates from the request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // store search history
        Search::create([
            'start_date' => $startDate,
            'end_date' => $endDate,
        ]);

        // Select available cars
        $availableCars = Car::whereNotIn('id', function ($query) use ($startDate, $endDate) {
            $query->select('car_id')
                ->from('reservations')
                ->where(function ($query) use ($startDate, $endDate) {
                    $query->where('date1', '<', $startDate)
                        ->where('date2', '<', $startDate);
                })
                ->orWhere(function ($query) use ($startDate, $endDate) {
                    $query->where('date1', '>', $endDate)
                        ->where('date2', '>', $endDate);
                });
        })->get();




        return view('search-results', ['availableCars' => $availableCars]);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
