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
                    <a href="{{ route('admin.contact') }}" class="text-xs text-blue-600 hover:underline">Contacts
                        /</a>
                </div>
            </div>
        @elseif(true)
            <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
                <div class="">
                    <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a>
                    <a href="{{ route('admin.contact') }}" class="text-xs text-blue-600 hover:underline">Contacts
                        /</a> <a href="{{ url()->current() }}" class="text-xs text-gray-500 hover:underline">All
                        Contacts</a>
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
                <h2 class="text-base Tablet:text-xl font-bold text-Primary-c">All Contacts</h2>

                <table class="border  bg-White-c w-full my-6 overflow-x">
                    <tr>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Sl</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Subject</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Name</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Email</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Phone</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Message</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Submitted</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Actions</th>
                    </tr>



                    @foreach ($contacts as $contact)
                        <tr>

                            <td style="text-align: center">{{ $loop->index + 1 }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->fname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
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

                            <td class="flex gap-2">
                                <!-- View data link -->
                                <a href="" class="btn p-0">
                                    <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                                </a>
                                <a href="" class="btn p-0">
                                    <img src="{{ asset('delete.svg') }}" style="width: 27px !important;">
                                </a>


                            </td>
                        </tr>
                    @endforeach



                </table>


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
            $('#contactformdatatable').DataTable();
        });
    </script>
@endsection



