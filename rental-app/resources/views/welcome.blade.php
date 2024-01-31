{{-- welcome.blade --}}
@extends('layout')

@section('content')<div>
    <button><a href="{{ route('reservations.index') }}">All reservations</a></button>
    <button><a href="{{ route('cars.index') }}">All cars</a></button>

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Search Available Cars</div>
        
                        <div class="card-body">
                            <form action="{{ route('search.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="start-date">Start Date:</label>
                                    <input type="date" id="start-date" name="start_date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="end-date">End Date:</label>
                                    <input type="date" id="end-date" name="end_date" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection