@extends('layout')

@section('title', 'Cars')

@section('content')
    @foreach ($cars as $c)
        <div>
            <b>Plate</b> {{$c->plate}}<br>
            <b>Price</b> {{$c->price}}<br>
            <b>Image</b> {{$c->filename}}<br>
            <b>Image hash</b> {{$c->filename_hash}}<br>
        </div>
        <hr>
    @endforeach
@endsection