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
                        <p class="card-title mb-2">Contact Form Data</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-3" id="contactformdatatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Subject</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Submitted at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->fname }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>
                                                @if (strlen($contact->message) > 15)
                                                    <details>
                                                        <summary>{{ substr($contact->message, 0, 15) }}...</summary>
                                                        {{ $contact->message }}
                                                    </details>
                                                @else
                                                    {{ $contact->message }}
                                                @endif
                                            </td>
                                            <td>{{ $contact->created_at->format('F d, Y') }}</td>
                                            <td>
                                                <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}"
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
            $('#contactformdatatable').DataTable();
        });
    </script>
@endsection
