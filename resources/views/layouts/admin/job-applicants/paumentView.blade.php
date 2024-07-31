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

        .containermy {
            width: auto;
            margin: 0 auto;
        }

        .tabs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            flex: 1;
            margin: 0 5px;
        }

        .tab.active {
            background-color: #d1e7fd;
        }

        .form-group {
            display: flex;
            margin-bottom: 10px;
        }

        .form-group label {
            width: 200px;
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
        }

        .form-group div {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-left: none;
            border-radius: 0 5px 5px 0;
            display: flex;
            align-items: center;
        }

        .form-group div span {
            margin-right: auto;
        }

        .form-group div.email-icon::before {
            content: "\2709";
            margin-right: 10px;
        }

        .highlight-red {
            color: red;
        }

        .highlight-green {
            color: green;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
        }

        .form-details {
            flex: 3;
        }

        .upload-container {
            flex: 1;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .upload-button {
            border: 1px solid red;
            color: red;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
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

        <div class=" bg-White-c p-2 py-4 pb-8 Tablet:p-8 Laptop:py-12 shadow-sm rounded-xl ">

            <div class="containermy form-container">
                <div class="form-details">
                    <div class="tabs">
                        <div class="tab">Deposit</div>
                        <div class="tab">Add payment</div>
                        <div class="tab active">Req for Credit</div>
                        <div class="tab">Send for eVisa</div>
                    </div>
                    <div class="form-group">
                        <label>Submission ID</label>
                        <div>{{ $applicant->submissionid }}</div>
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <div>{{ $applicant->first_name }} {{ $applicant->last_name }}</div>
                    </div>
                    <div class="form-group">
                        <label>Whatsapp Number</label>
                        <div>{{ $applicant->whatsapp_number }}</div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <div>{{ $applicant->email }}
                            @if ($applicant->otp_verified == 0)
                                <img src="{{ asset('email-not-verified.svg') }}" width="25" style="padding-left: 3px;">
                            @endif

                            @if ($applicant->otp_verified == 1)
                                <img src="{{ asset('email-verified.svg') }}" width="25" style="padding-left: 3px;">
                            @endif 
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ref Code</label>
                        <div>
                            {{ in_array($applicant->reference, ['PK2024S7', 'KP2024P3', 'MS2024K8', 'MN2024U5', 'SZ2024A9', 'WK1978SI41']) ? $applicant->reference : 'No' }}
                            &nbsp; </div>
                    </div>
                    <div class="form-group">
                        <label>Total Amount</label>
                        <div><span class="highlight-red">AED 7,500</span></div>
                    </div>
                    <div class="form-group">
                        <label>Discount (if any)</label>
                        <div><span class="highlight-green">AED 1,500</span></div>
                    </div>
                    <div class="form-group">
                        <label>Receivable Amount</label>
                        <div><span class="highlight-green">AED 0</span></div>
                    </div>
                    <div class="form-group">
                        <label>Total Due</label>
                        <div class="totalammount">AED {{ $applicant->balance }}</div>
                    </div>
                </div>
                <div class="upload-container">
                    <div class="upload-button">
                        Slip/Voucher Upload
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('script')
@endsection
