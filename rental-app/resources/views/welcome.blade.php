@extends('layout')

@section('content')
    <button><a href="{{ route('reservations.index') }}">Rent a car</a></button>
    <button><a href="{{ route('cars.index') }}">Admin</a></button>
@endsection