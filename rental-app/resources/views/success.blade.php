@extends('layout')

@section('content')
    <div class="container mt-5">
        <p>Your reservation has been successfully submitted:</p>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $reservation->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $reservation->email }}</li>
            <li class="list-group-item"><strong>Address:</strong> {{ $reservation->address }}</li>
            <li class="list-group-item"><strong>Telephone:</strong> {{ $reservation->telephone }}</li>
            <li class="list-group-item"><strong>Start Date:</strong> {{ $reservation->date1 }}</li>
            <li class="list-group-item"><strong>End Date:</strong> {{ $reservation->date2 }}</li>
            <li class="list-group-item"><strong>Days:</strong> {{ $reservation->days }}</li>
            <li class="list-group-item"><strong>Total:</strong> {{ $reservation->total }}</li>
        </ul>
        <p class="mt-3">Thank you for choosing our service.</p>
        <a href="{{ route('/') }}" class="btn btn-primary mt-3">Back to search</a>
    </div>
@endsection
