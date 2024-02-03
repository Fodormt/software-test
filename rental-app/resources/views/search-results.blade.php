@extends('layout')

@section('content')
<div class="container">
    <div class="my-4">
        <a href="{{ route('/') }}" class="btn btn-primary">Back to Search</a>
        <br>
        <b>Start Date:</b> {{ $start_date }}<br>
        <b>End Date:</b> {{ $end_date }}<br>
    </div>
    <hr>

    <div class="row">
        @foreach ($availableCars as $c)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <b>Plate:</b> {{ $c->plate }}<br>
                        <b>Price:</b> {{ $c->price }}<br>
                        @if ($c->filename === null)
                        <img src="{{ asset('images/default_car_image.jpg') }}" alt="Car Image" class="img-fluid"><br>
                        @else
                        <img src="{{ asset('images/' . $c->filename) }}" alt="Car Image" class="img-fluid"><br>
                        @endif
                    </p>
                    <a href="{{ route('reservations.rent', ['carId' => $c->id, 'carPrice' => $c->price, 'start_date' => $start_date, 'end_date' => $end_date]) }}" class="btn btn-primary">Rent This Car</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
