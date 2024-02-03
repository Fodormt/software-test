@extends('layout')

@section('title', 'Cars')

@section('content')
    <div class="container mt-5">
        <a href="{{ route('/') }}" class="btn btn-primary">Back to Search</a>
        <a href="{{ route('/admin') }}" class="btn btn-secondary">Back to Admin Dashboard</a>
        <hr>

        @foreach ($cars as $c)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Plate: {{ $c->plate }}</h5>
                    <p class="card-text">Price: {{ $c->price }}</p>
                    <p class="card-text">Is Active: {{ $c->is_active }}</p>
                    @if ($c->filename === null)
                        <img src="{{ asset('images/default_car_image.jpg') }}" class="img-fluid" alt="Car Image"><br>
                    @else
                        <img src="{{ asset('images/' . $c->filename) }}" class="img-fluid" alt="Car Image"><br>
                    @endif
                    <a href="{{ route('cars.edit', ['car' => $c->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('cars.destroy', ['car' => $c->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deactivate</button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="mt-3">
            <a href="{{ route('/') }}" class="btn btn-primary">Back to Search</a>
            <a href="{{ route('/admin') }}" class="btn btn-secondary">Back to Admin Dashboard</a>
        </div>
    </div>
@endsection
