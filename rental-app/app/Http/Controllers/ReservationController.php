<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;
use DateTime;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = [];
        foreach (Reservation::all() as $reservation) {
            $car = Car::find($reservation->car_id);
            if ($car && $car->is_active) {
                $reservations[] = $reservation;
            }
        }

        return view('reservations', ['reservations' => $reservations, 'cars' => Car::all()]);
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
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'telephone' => ['required', 'regex:/\+[0-9]{11}/'],
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'days' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
            'car_id' => 'required|exists:cars,id',

        ]);

        // Create a new reservation using Reservation::create
        $reservation = Reservation::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'telephone' => $validatedData['telephone'],
            'date1' => $validatedData['start_date'],
            'date2' => $validatedData['end_date'],
            'days' => $validatedData['days'],
            'total' => $validatedData['total'],
            'car_id' => $validatedData['car_id'],
        ]);

        return view('success', ['reservation' => $reservation]);
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

    // rent a car
    public function rent(string $carId, $carPrice, $start_date, $end_date)
    {
        $startDate = new DateTime($start_date);
        $endDate = new DateTime($end_date);
        $differenceInDays = $differenceInDays = $endDate->diff($startDate)->days;
        return view('rent', [
            'carId' => $carId, 'carPrice' => $carPrice,
            'start_date' => $start_date, 'end_date' => $end_date,
            'differenceInDays' => $differenceInDays,
        ]);
    }
}
