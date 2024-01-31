<!-- search-results.blade.php -->

@extends('layout')

@section('content')
@php
    $counter = 0
@endphp
@foreach ($availableCars as $c)
        <div>
            @php $counter++
            @endphp
            <b>NO</b> {{$counter}}<br>
            <b>Plate</b> {{$c->plate}}<br>
            <b>Price</b> {{$c->price}}<br>
            <b>Image</b> {{$c->filename}}<br>
            <b>Image hash</b> {{$c->filename_hash}}<br>
        </div>
        <hr>
    @endforeach
@endsection
