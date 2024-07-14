@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-2">All Quotations</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-3" id="quation">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Enquiry for</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Created at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($allquotation as $quotation)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $quotation->enquiry }}</td>
                                            <td>{{ $quotation->firstName }}</td>
                                            <td>{{ $quotation->phoneNumber_qut }}</td>
                                            <td>{{ $quotation->email }}</td>
                                            <td>{{ $quotation->created_at->format('F d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('qauotation.show', ['id' => $quotation->id]) }}"
                                                    class="btn p-0">
                                                    <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                                                </a>
                                                <form action="{{ route('qauotation.destroy', ['id' => $quotation->id]) }}"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#quation').DataTable();
        });
    </script>
@endsection
