@extends('layouts.master')

@section('content')
    <style>
        tr,
        td {
            border: 1px solid black;
            padding: 5px;
        }

        td.flex.gap-2 {
            border: none;
        }
    </style>

    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">
        @if (Auth::user()->role == 'user')
            <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
                <div class="">
                    <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a>
                    <a href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants
                        /</a>
                </div>
            </div>
        @elseif(true)
            <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
                <div class="">
                    <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a>
                    <a href="{{ route('admin.users.index') }}" class="text-xs text-blue-600 hover:underline">Users
                        /</a> <a href="{{ url()->current() }}" class="text-xs text-gray-500 hover:underline">All
                        Users</a>
                </div>
            </div>
        @endif



        <div class=" bg-White-c p-3 py-4 pb-8 Tablet:p-6 Laptop:p-8 Laptop:py-10  shadow-sm rounded-xl ">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div id="Job_Application " class="overflow-x-scroll Tablet:overflow-x-hidden">
                <h2 class="text-base Tablet:text-xl font-bold text-Primary-c">All Users</h2>

                <table class="border  bg-White-c w-full my-6 overflow-x">
                    <tr>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Sl No</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Name</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Email</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Phone</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Role</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Action</th>
                    </tr>



                    @foreach ($users as $user)
                        <tr>

                            <td style="text-align: center">{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact_number }}</td>
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

                            <td class="flex gap-2">
                                <!-- View data link -->
                                <a href="" class="btn p-0">
                                    <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                                </a>


                            </td>
                        </tr>
                    @endforeach



                </table>
                

            </div>

            <div class="text-right ">
                <a href="{{ route('admin.users.create') }}" class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Add New User</a>
                <a href="{{ route('aggetn.create') }}" class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Add New Agent</a>
            </div>

            <div class="mt-4">
                {{-- {{ $users->links('vendor.pagination.simple-tailwind') }} --}}
            </div>

        </div>


    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        });
    </script>
@endsection


