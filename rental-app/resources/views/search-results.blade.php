<!-- search-results.blade.php -->

@extends('layout')

@section('content')
    <div>
        <b>Start date</b> {{ $start_date }}<br>
        <b>End date</b> {{ $end_date }}<br>
    </div>
    <hr>
    <hr>
    @php
        $counter = 0;
    @endphp
    @foreach ($availableCars as $c)
        <div>
            @php
                $counter++;
            @endphp
            <b>NO</b> {{ $counter }}<br>
            <b>Plate</b> {{ $c->plate }}<br>
            <b>Price</b> {{ $c->price }}<br>
            <b>Image</b> {{ $c->filename }}<br>
            <b>Image hash</b> {{ $c->filename_hash }}<br>
            <button><a
                    href="{{ route('reservations.rent', [
                        'carId' => $c->id,
                        'carPrice' => $c->price,
                        'start_date' => $start_date,
                        'end_date' => $end_date,
                    ]) }}">Rent this car</a></button>
        </div>
        <hr>
    @endforeach
@endsection
