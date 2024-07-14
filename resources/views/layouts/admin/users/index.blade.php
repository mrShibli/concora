@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <p class="card-title mb-2">All Users</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mt-3" id="userstab">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>

                                        @switch($user->role)
                                            @case('super_admin')
                                                <td>Super Admin</td>
                                            @break

                                            @case('group_admin')
                                                <td>Group Admin</td>
                                            @break

                                            @case('admin')
                                                <td>Admin</td>
                                            @break

                                            @case('supervisor')
                                                <td>Supervisor</td>
                                            @break

                                            @case('manager')
                                                <td>Manager</td>
                                            @break

                                            @case('checker')
                                                <td>Checker</td>
                                            @break

                                            @case('operator')
                                                <td>Operator</td>
                                            @break

                                            @default
                                                <td>User</td>
                                        @endswitch

                                        <td>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn p-0">
                                                <img src="{{ asset('edit.svg') }}" style="width: 25px !important;">
                                            </a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn p-0"
                                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                                    <img src="{{ asset('delete.svg') }}" style="width: 27px !important;">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mt-3">Create User</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#userstab').DataTable();
        });
    </script>
@endsection
