@extends('layouts.master')

@section('content')
    <div class="content-wrapper">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "> <a href="{{ route('dashboard') }}"> Home </a> </li>
                <li class="breadcrumb-item bactive"><a href="{{ route('job_positions.create') }}"> Add Position </a>
                </li>
            </ol>
        </nav>

        <h3>Create New Job Position</h3>
        @if ($errors->any())
            <div class="center allerror">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <form method="POST" action="{{ route('job_positions.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="status">Position Status:</label>
                <input type="checkbox" id="status" name="status">
                <!-- Checkbox field for checked status -->
            </div>

            <div class="form-group">
                <label for="status">Position for Riders :</label>
                <input type="checkbox" id="rider" name="rider">
                <!-- Checkbox field for checked status -->
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
