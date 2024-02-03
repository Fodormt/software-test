@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('/admin') }}" class="btn btn-primary">Admin</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{ route('search.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="start-date">Start Date:</label>
                        <input type="date" id="start-date" name="start_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" name="end_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
@endsection
