@extends('layout')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="telephone">Telephone number</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" pattern="\+[0-9]{11}" required>
                @error('telephone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="start_date">Start date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $start_date }}"
                    readonly>
            </div>
            <div class="form-group">
                <label for="end_date">End date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $end_date }}"
                    readonly>
            </div>
            <div class="form-group">
                <label for="days">Days</label>
                <input type="number" class="form-control" id="days" name="days" value="{{ $differenceInDays }}"
                    readonly>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" class="form-control" id="total" name="total"
                    value="{{ $differenceInDays * $carPrice }}" readonly>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="car_id" name="car_id" value="{{ $carId }}"
                    readonly>
            </div>
            <button type="submit" class="btn btn-primary">Rent</button>
        </form>
    </div>
@endsection
