@extends('layouts.master')

@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .bg-White-c.p-2.py-4.pb-8.Tablet\:p-8.Laptop\:py-12.shadow-sm.rounded-xl {
            height: 100vh;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        form.w-\[500px\].bg-White-c.shadow-md.rounded.py-5 {
            z-index: 100;
        }

        #videointerview {
            display: none;
            /* Initially hidden */
        }

        #onlineinterview {
            display: none;
            /* Initially hidden */
        }

        #personinterview {
            display: none;
            /* Initially hidden */
        }

        .cross:hover {
            color: red;
            cursor: pointer;
        }
    </style>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-icon {
            cursor: pointer;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a
                    href="{{ route('applicants.duesPayment') }}" class="text-xs text-blue-600 hover:underline">Applicants
                    /</a>
                <a href="" class="text-xs text-gray-500 hover:underline">View</a>
            </div>
        </div>

        <div class=" bg-White-c p-2 py-4 pb-8 Tablet:p-8   Laptop:py-12  shadow-sm rounded-xl ">

            <h2 style="padding-bottom: 9px;">Payment Details</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Submission Date</th>
                        <th>Payment Date</th>
                        <th>Payment Type</th>
                        <th>Ref/Agency</th>
                        <th>Passport</th>
                        <th>Payment Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payactivity as $activity)
                        <tr>
                            <td class="action-icon">
                                <a
                                    href="{{ route('applicants.paymentView', ['applicant_id' => $activity->applicant->id, 'payid_id' => $activity->id]) }}">👁️</a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($activity->applicant->created_at)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($activity->payment_date)->format('d M Y') }}</td>
                            <td>{{ $activity->method }}</td>
                            <td>{{ in_array($activity->applicant->reference, ['LS1994ND40', 'QM1990ZD12', 'WK1978SI41', 'GK1980MM51']) ? $activity->applicant->reference : 'No' }}
                            </td>
                            <td>{{ $activity->applicant->passportno }}</td>
                            <td>{{ $activity->deposit_amount }}</td>
                            <td> {{ ucwords(str_replace('_', ' ', $activity->status)) }} </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="action-icon">
                                <a href="{{ route('applicants.paymentView', ['applicant_id' => $applicant->id]) }}">👁️</a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($applicant->created_at)->format('d M Y') }}</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>{{ in_array($applicant->reference, ['LS1994ND40', 'QM1990ZD12', 'WK1978SI41', 'GK1980MM51']) ? $applicant->reference : 'No' }}
                            </td>
                            <td>{{ $applicant->passportno }}</td>
                            <td>N/A</td>
                            <td>No Payment</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </div>
@endsection

@section('script')
@endsection
