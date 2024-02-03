@extends('layout')

@section('title', 'Reservations')

@section('content')
    <div class="container mt-5">
        <a href="{{ route('/') }}" class="btn btn-primary">Back to search</a>
        <a href="{{ route('/admin') }}" class="btn btn-primary">Back to admin dashboard</a>
        <br>
        <hr>
        @foreach ($reservations as $r)
            <div class="card mb-3">
                <div class="card-body">
                    @foreach ($cars as $c)
                        @if ($c->id === $r->car_id)
                            <p class="card-text"><b>Plate:</b> {{ $c->plate }}</p>
                        @break
                    @endif
                @endforeach
                <p class="card-text"><b>Name:</b> {{ $r->name }}</p>
                <p class="card-text"><b>Email:</b> {{ $r->email }}</p>
                <p class="card-text"><b>Address:</b> {{ $r->address }}</p>
                <p class="card-text"><b>Telephone:</b> {{ $r->telephone }}</p>
                <p class="card-text"><b>Start date:</b> {{ $r->date1 }}</p>
                <p class="card-text"><b>End date:</b> {{ $r->date2 }}</p>
                <p class="card-text"><b>Days:</b> {{ $r->days }}</p>
                <p class="card-text"><b>Total:</b> {{ $r->total }}</p>
            </div>
        </div>
        <hr>
    @endforeach
    <a href="{{ route('/') }}" class="btn btn-primary">Back to search</a>
    <a href="{{ route('/admin') }}" class="btn btn-primary">Back to admin dashboard</a>
</div>
@endsection
