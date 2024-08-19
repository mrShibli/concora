@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        .Laptop\:p-8 {
            padding: 1.5rem;
            height: 100vh;
        }

        table#example {
            font-size: 15px;
        }

        table.dataTable.row-border tbody tr:first-child th,
        table.dataTable.row-border tbody tr:first-child td,
        table.dataTable.display tbody tr:first-child th,
        table.dataTable.display tbody tr:first-child td,
        table.dataTable td {
            border-top: none;
            padding: 10px 4px !important;
        }

        th.sorting {
            padding: 10px 4px !important;
            font-size: 15px !important;
            background-color: #4B49AC;
            color: #fff;
        }

        .Laptop\:p-8 {
            padding: 1.5rem;
        }

        div#example_length,
        div#example_filter {
            margin-bottom: 8px;
        }

        h2.text-base.Tablet\:text-xl.font-bold.text-Primary-c {
            margin-bottom: 13px;
        }

        table.dataTable thead .sorting:last-child {
            background-image: none;
        }

        table.dataTable thead .sorting:first-child {
            padding-right: 12px !important;
        }
    </style>
@endsection

@section('content')
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
                    <a href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants
                        /</a> <a href="{{ url()->current() }}" class="text-xs text-gray-500 hover:underline">All
                        Applicants</a>
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

                <h2 class="text-base Tablet:text-xl font-bold text-Primary-c">All Applicants</h2>

                <table class="display" id="example" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Position</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Submitted</th>
                            <th>Actions</th>
                            <th style="display: none;">PN</th>
                            <th style="display: none;">SI</th>
                            <th style="display: none;">RF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applicants as $applicant)
                            @if (
                                (in_array(Auth::user()->email, [
                                    'shubash@conquerorgroup.ae',
                                    'kamal@conquerorgroup.ae',
                                    'nepal@conquerorgroup.ae',
                                    'santoshgirisir7@gmail.com',
                                ]) &&
                                    $applicant->nationality === 'Nepal') ||
                                    (Auth::user()->email === 'india@conquerorgroup.ae' && $applicant->nationality === 'India') ||
                                    (Auth::user()->email === 'noman@conquerorgroup.ae' && $applicant->nationality === 'Pakistan') ||
                                    !in_array(Auth::user()->email, [
                                        'shubash@conquerorgroup.ae',
                                        'kamal@conquerorgroup.ae',
                                        'nepal@conquerorgroup.ae',
                                        'santoshgirisir7@gmail.com',
                                    ]))
                                <tr class="{{ $applicant->viewed > 0 ? 'viewed' : 'notviewed' }}">
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td>{{ $applicant->first_name }}</td>
                                    <td>{{ $applicant->nationality }}</td>
                                    <td>{{ $applicant->position->title ?? 'Position Not Found' }}</td>
                                    <td>{{ $applicant->contact_number }}</td>
                                    <td class="emailstatus">
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25">
                                        @endif {{ $applicant->email }}
                                    </td>
                                    <td>{{ $applicant->created_at->format('F d, Y') }}</td>
                                    <td style="display: none;">{{ $applicant->passportno }}</td>
                                    <td style="display: none;">{{ $applicant->submissionid }}</td>
                                    <td style="display: none;">{{ $applicant->reference }}</td>
                                    <td>
                                        <a href="{{ route('applicants.paymentReqCreditApproval', ['id' => $applicant->id]) }}">
                                            View
                                        </a>

                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="8">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


            </div>

            {{-- <div class="mt-4">
                {{ $applicants->links('vendor.pagination.simple-tailwind') }} 
            </div> --}}

        </div>


    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Document ready. Initializing DataTable.");
            try {
                $('#example').DataTable({
                    pageLength: 10
                });
                console.log("DataTable initialized successfully.");
            } catch (e) {
                console.error("Error initializing DataTable:", e);
            }
        });
    </script>
@endsection
