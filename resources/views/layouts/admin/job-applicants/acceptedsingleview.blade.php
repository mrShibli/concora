@extends('layouts.master')

@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .bg-White-c.p-2.py-4.pb-8.Tablet\:p-8.Laptop\:py-12.shadow-sm.rounded-xl {
            height: 105vh;
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
            padding: 10px 5px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            flex: 1;
            margin: 0 5px;
        }

        .tab-d,
        .tab-add {
            padding: 10px 5px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: no-drop;
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
            width: 250px;
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

        img.eimg {
            margin-left: 50px;
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
            width: 100%;
        }

        .form-details {
            flex: 3;
        }

        .upload-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 10px;
            margin-top: -10px;
        }

        .form-group.payableinput label {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .upload-button {
            border: 1px dashed #0062ff;
            color: red;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .qrcodecontainer {
            width: 300px;
            text-align: center;
        }

        .qrcodecontainer .upload-button {
            border: none;
            color: #000;
        }

        .qrcodecontainer button {
            padding-top: 10px;
            padding-left: 12px;
        }


        .uploadarea {
            padding: 20px 5px;
        }

        .upload-button img {
            text-align: center;
            position: relative;
            left: 38%;
        }

        .qrcodecontainer img {
            left: 15%;
        }

        .upload-button input {
            /* text-align: center; */
            position: relative;
            left: 19%;
        }

        .form-group.payableinput input {
            padding: 0px;
            width: 100% !important;
            display: block;
            border: none;
        }

        .form-group.payableinput span {
            padding: 0 !important;
            margin: 0 !important;
            display: inline-block;
            width: 100%;
        }

        .paymenttypeArea {
            display: flex;
            gap: 13px;
            padding: 10px 10px 14px 10px;
            margin-left: 191px;
        }

        .tab-content form {
            display: flex;
        }

        .tab-content .lefttabcontent {
            width: 100%;
        }

        .submitbuttonarea {
            display: flex;
            justify-content: right;
        }


        .submitbuttonarea button {
            display: flex;
            justify-content: space-between;
            align-content: center;
            border: none;
            background: #fcaa00;
            ;
            color: #000000;
            padding: 11px 45px;
            font-size: 1rem !important;
            border-radius: 5px;
        }

        .submitbuttonarea img {
            padding-left: 6px;
            padding-top: 4px;
        }

        .upload-info {
            border: 1px solid black;
            padding: 15px 10px;
            margin-bottom: 8px;
            color: #000;
            text-align-last: left;
        }

        button.btn.btn-primary.updatebtn {
            background: black;
            color: #fff;
            padding: 10px 20px;
        }
        .btndd{
            display: block;
        }
    </style>
@endsection

@section('content')
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a
                    href="{{ route('applicants.accepted') }}" class="text-xs text-blue-600 hover:underline">Applicants
                    /</a>
                <a href="" class="text-xs text-gray-500 hover:underline">View</a>
            </div>
        </div>

        <div class="bg-White-c p-2 py-4 pb-8 Tablet:p-8 Laptop:py-12 shadow-sm rounded-xl">
            <!-- resources/views/payment.blade.php -->
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
            <div class="containermy form-container">
                <div class="form-details">

                    <div class="tabs">
                        <div class="tab active" data-tab="overview">Update status</div>
                    </div>




                    <div class="tab-content" id="overview" style="display: block;">
                        <form action="{{ route('updateStatus', ['id' => $applicant->id]) }}" class="sttausupate"
                            method="POST" style="display: inline-block;">
                            @csrf
                            <div class="lefttabcontent">
                                <div class="form-group">
                                    <label>Submission ID</label>
                                    <div>{{ $applicant->submissionid }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <div>{{ $applicant->first_name }} {{ $applicant->last_name }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <div>{{ $applicant->nationality }}</div>
                                </div>
                                <div class="form-group emailaddress">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                                style="padding-left: 3px;" class="eimg">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25"
                                                style="padding-left: 3px;" class="eimg">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ref Code</label>
                                    <div>
                                        {{ in_array($applicant->reference, ['LS1994ND40', 'QM1990ZD12', 'WK1978SI41', 'GK1980MM51']) ? $applicant->reference : 'No' }}
                                        &nbsp; </div>
                                </div>
                                <div class="form-group">
                                    <label>Meeting Code</label>
                                    <div><span class="highlight-red">{{ $applicantInterview->meetingurl }}</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Meeting Pass (if any)</label>
                                    <div><span class="highlight-green">{{ $applicantInterview->meetingpass }}</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Meeting Time</label>
                                    <div><span class="highlight-black">{{ $applicantInterview->time }} , Time Zone By
                                            {{ $applicantInterview->zonecountry }}</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Note (if any)</label>
                                    <div><span class="highlight-black">{{ $applicantInterview->message }}</span></div>
                                </div>




                                <div class="form-group">
                                    <label>Applicant Interview Status</label>
                                    <div>
                                        <select class="form-control statusSelect" name="status">
                                            @foreach (['new_entry', 'accepted', 'checked', 'invited', 'called', 'hired', 'rejected', 'under_review', 'pending', 'reschedule_requested'] as $status)
                                                <option value="{{ $status }}"
                                                    {{ $applicant->applicant_status == $status ? 'selected' : '' }}>
                                                    {{ ucfirst(str_replace('_', ' ', $status)) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group btndd" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary updatebtn"
                                        style="border-radius: 7px !important;display:inline-block">Update Status</button>
                                </div>

                            </div>

                            

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
