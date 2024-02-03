@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="mb-3">
            <a href="{{ route('reservations.index') }}" class="btn btn-primary">All reservations</a>
            <a href="{{ route('cars.index') }}" class="btn btn-primary">All cars</a>
            <a href="{{ route('cars.create') }}" class="btn btn-success">Add car</a>
        </div>
        <div>
            <a href="{{ route('/') }}" class="btn btn-secondary">Back to search</a>
        </div>
    </div>
@endsection
