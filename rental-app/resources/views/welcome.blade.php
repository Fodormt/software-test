{{-- welcome.blade --}}
@extends('layout')

@section('content')
<div>
    <button><a href="{{ route('reservations.index') }}">All reservations</a></button>
    <button><a href="{{ route('cars.index') }}">All cars</a></button>

    <div>
        <form action="{{ route('search.store') }}" method="POST">
            @csrf
            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" name="start_date">
            <br>
            <label for="end-date">End Date:</label>
            <input type="date" id="end-date" name="end_date">
    
            <button type="submit">Search</button>
        </form>
    </div>
</div>
    
@endsection