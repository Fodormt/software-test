@extends('layout')

@section('title', 'Reservations')

@section('content')
    @foreach ($reservations as $r)
        <div>
            <b>CarID</b> {{$r->car_id}}<br>
            <b>Name</b> {{$r->name}}<br>
            <b>Email</b> {{$r->email}}<br>
            <b>Address</b> {{$r->address}}<br>
            <b>Telephone</b> {{$r->telephone}}<br>
            <b>Start date</b> {{$r->date1}}<br>
            <b>End date</b> {{$r->date2}}<br>
            <b>Days</b> {{$r->days}}<br>
            <b>Total</b> {{$r->total}}<br>
        </div>
        <hr>
    @endforeach
@endsection