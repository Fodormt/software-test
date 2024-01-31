@extends('layout')

@section('title', 'Search')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search Available Cars</div>
                <div class="card-body">
                    <form action="{{ route('search.store') }}" method="POST">
                            <label for="start_date">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" required>
                            <label for="end_date">End Date:</label>
                            <input type="date" id="end_date" name="end_date" required>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endpush
