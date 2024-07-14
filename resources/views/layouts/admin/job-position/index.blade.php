@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "> <a href="{{ route('dashboard') }}"> Home </a> </li>
                <li class="breadcrumb-item bactive"><a href="{{ route('job_positions.index') }}"> Positions </a>
                </li>
            </ol>
        </nav>
        <div class="row">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-2">Latest Job Positions</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-3" id="jobpositons">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($positions as $position)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="font-weight-bold">{{ $position->title }}</td>
                                            <td class="font-weight-bold">
                                                @if ($position->status)
                                                    Active
                                                @else
                                                    Inactive
                                                @endif
                                            </td>
                                            <td>{{ $position->created_at->format('F d, Y') }}</td>
                                            <td>{{ $position->updated_at->format('F d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('job_positions.edit', ['id' => $position->id]) }}"
                                                    class="btn p-0">
                                                    <img src="{{ asset('edit.svg') }}" style="width: 25px !important;">
                                                </a>
                                                <form action="{{ route('job_positions.destroy', ['id' => $position->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn p-0"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <img src="{{ asset('delete.svg') }}" style="width: 27px !important;">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No data available</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <a href="{{ Route('job_positions.create') }}" class="btn btn-primary mt-3">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#jobpositons').DataTable();
        });
    </script>
@endsection
