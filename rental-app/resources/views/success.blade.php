<!-- resources/views/success.blade.php -->

@extends('layout')

@section('content')
    <div>
        <p>Your reservation has been successfully submitted:</p>
        <ul>
            <li><strong>Name:</strong> {{ $reservation->name }}</li>
            <li><strong>Email:</strong> {{ $reservation->email }}</li>
            <li><strong>Address:</strong> {{ $reservation->address }}</li>
            <li><strong>Telephone:</strong> {{ $reservation->telephone }}</li>
            <li><strong>Start Date:</strong> {{ $reservation->date1 }}</li>
            <li><strong>End Date:</strong> {{ $reservation->date2 }}</li>
            <li><strong>Days:</strong> {{ $reservation->days }}</li>
            <li><strong>Total:</strong> {{ $reservation->total }}</li>
        </ul>
        <p>Thank you for choosing our service.</p>
    </div>
@endsection
