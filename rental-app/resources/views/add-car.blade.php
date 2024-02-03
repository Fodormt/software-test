@extends('layout')

@section('content')
    <div class="container mt-5">
        <form action="{{ isset($car) ? route('cars.update', $car->id) : route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($car))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="plate">Plate:</label>
                <input type="text" class="form-control" id="plate" name="plate" value="{{ old('plate', isset($car) ? $car->plate : '') }}" required>
                @error('plate')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', isset($car) ? $car->price : '') }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="filename">Car Image:</label>
                <input type="file" class="form-control-file" id="filename" name="filename" accept="image/*">
                @error('filename')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            @if(isset($car))
                <input type="hidden" name="car_id" value="{{ $car->id }}">
            @endif

            <button type="submit" class="btn btn-primary">{{ isset($car) ? 'Update Car' : 'Add Car' }}</button>
        </form>
    </div>
@endsection
