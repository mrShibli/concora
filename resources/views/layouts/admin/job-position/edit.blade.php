@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <h3>Create New Job Position</h3>
        <form method="POST" action="{{ route('job_positions.update', ['id' => $jobPosition->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" value="{{ $jobPosition->title }}" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="status">Position Status:</label>
                <input type="checkbox" id="status" name="status" {{ $jobPosition->status == '1' ? 'checked' : '' }}>
                <!-- Checkbox field for checked status -->
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection