{{-- rent.blade --}}
@extends('layout')

@section('content')
    <div>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
            <br>
            <label for="telephone">Telephone number</label>
            <input type="tel" id="telephone" name="telephone" pattern="\+[0-9]{11}" required>
            <br>
            <label for="start_date">Start date</label>
            <input type="date" id="start_date" name="start_date" value="{{ $start_date }}" readonly>
            <br>
            <label for="end_date">End date</label>
            <input type="date" id="end_date" name="end_date" value="{{ $end_date }}" readonly>
            <br>
            <label for="days">Days</label>
            <input type="number" id="days" name="days" value="{{ $differenceInDays }}" readonly>
            <br>
            <label for="total">Days</label>
            <input type="number" id="total" name="total" value="{{ $differenceInDays * $carPrice }}" readonly>
            <br>
            <input type="number" id="car_id" name="car_id" value="{{ $carId }}" readonly>
            <br>
            <button type="submit">Rent</button>
        </form>
    </div>
@endsection
