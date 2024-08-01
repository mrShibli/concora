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
            padding: 10px 5px;
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
            border: 1px solid red;
            color: red;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .uploadarea {
            padding: 20px 5px;
        }

        .upload-button img {
            text-align: center;
            position: relative;
            left: 38%;
        }

        .upload-button input {
            /* text-align: center; */
            position: relative;
            left: 19%;
        }

        .form-group.payableinput input {
            padding: 10px;
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

        .submitbuttonarea button {
            display: flex;
            justify-content: space-between;
            align-content: center;
            border: none;
            background: #2978B8;
            ;
            color: #fff;
            padding: 11px 35px;
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

        <div class="bg-White-c p-2 py-4 pb-8 Tablet:p-8 Laptop:py-12 shadow-sm rounded-xl">

            <div class="containermy form-container">
                <div class="form-details">
                    <div class="tabs">
                        <div class="tab active" data-tab="overview">Overview</div>
                        <div class="tab" data-tab="deposit">Deposit</div>
                        <div class="tab" data-tab="add-payment">Add payment</div>
                        <div class="tab" data-tab="req-credit">Req for Credit</div>
                        <div class="tab" data-tab="send-visa">Send for eVisa</div>
                    </div>

                    <div class="tab-content" id="overview" style="display: block;">
                        <form action="" method="post" enctype="multipart/form-data">
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
                                    <label>Whatsapp Number</label>
                                    <div>{{ $applicant->whatsapp_number }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
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
                                <div class="submitbuttonarea">
                                    <button type="submit" name="submit"> Submit <img src="{{ asset('submit.svg') }}"
                                            width="20" alt=""> </button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-button">
                                    <input type="file" name="voucher" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-content" id="deposit" style="display: none;">
                        <form action="" method="post" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
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
                                    <label>Total Payable Amount</label>
                                    <div><span class="highlight-red">AED 7,500</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Discount (if any)</label>
                                    <div><span class="highlight-green">AED 1,500</span></div>
                                </div>
                                <div class="form-group payableinput">
                                    <label>Deposit Amount</label>
                                    <div><span class="highlight-green">
                                            <input type="text" name="payableammount">
                                        </span></div>
                                </div>
                                <div class="paymenttypediv">
                                    <div class="paymenttypeArea">
                                        <div class="ptype1">
                                            <input type="radio" name="paymenttype" id="paymenttypebank">
                                            <label for="paymenttypebank">Bank Deposit</label>
                                        </div>
                                        <div class="ptype1">
                                            <input type="radio" name="paymenttype" id="paymenttypecash">
                                            <label for="paymenttypecash">Cash</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group payableinput">
                                    <label>Payment Date</label>
                                    <div class="totalammount">
                                        <input type="date" name="payableammount">
                                    </div>
                                </div>

                                <div class="submitbuttonarea">
                                    <button type="submit" name="submit"> Submit <img src="{{ asset('submit.svg') }}"
                                            width="20" alt=""> </button>
                                </div>

                            </div>
                            <div class="upload-container">
                                <div class="upload-button">
                                    <input type="file" name="voucher" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-content" id="add-payment" style="display: none;">
                        <form action="" method="post" enctype="multipart/form-data">
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
                                    <label>Whatsapp Number</label>
                                    <div>{{ $applicant->whatsapp_number }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
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
                                    <label>Total Payable Amount</label>
                                    <div><span class="highlight-red">AED 6000</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Total Payable Amount</label>
                                    <div><span class="highlight-green">AED 3000</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Dues Amount</label>
                                    <div><span class="highlight-green">AED ####</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Total Due</label>
                                    <div class="totalammount">AED {{ $applicant->balance }}</div>
                                </div>
                                <div class="form-group payableinput">
                                    <label>Payment Date</label>
                                    <div class="totalammount">
                                        <input type="date" name="payableammount">
                                    </div>
                                </div>
                                <div class="form-group payableinput">
                                    <label>Invoice/Slip No</label>
                                    <div><span class="highlight-green">
                                            <input type="text" name="payableammount" value="ENBD-24619">
                                        </span></div>
                                </div>
                                <div class="submitbuttonarea">
                                    <button type="submit" name="submit"> Balance Update <img src="{{ asset('submit.svg') }}"
                                            width="20" alt=""> </button>
                                </div>
                            </div>

                            <div class="upload-container">
                                <div class="upload-button">
                                    <input type="file" name="voucher" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-content" id="req-credit" style="display: none;">
                        <form action="" method="post" enctype="multipart/form-data">
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
                                    <label>Whatsapp Number</label>
                                    <div>{{ $applicant->whatsapp_number }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
                                        @endif

                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25"
                                                style="padding-left: 3px;">
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
                                    <label>Receivable Amount</label>
                                    <div><span class="highlight-red">AED 6000</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Walltet Balance</label>
                                    <div><span class="highlight-green">AED 3,500</span></div>
                                </div>

                                <div class="form-group payableinput">
                                    <label>Recommendation Note</label>
                                    <div><span class="highlight-green">
                                            <input type="text" name="payableammount"
                                                value="Plz check the Application and take necessary action
for Proceeding eVisa. This is very potential reference"
                                                style="color:#000;">
                                        </span></div>
                                </div>

                                <div class="submitbuttonarea">
                                    <button type="submit" name="submit"> Req for Approval <img
                                            src="{{ asset('submit.svg') }}" width="20" alt=""> </button>
                                </div>
                            </div>
                            <div class="upload-container" style="border:none;">

                                <div class="upload-button">
                                    <div class="upload-info">
                                        <p>Payment by: Mujahid Noman</p>
                                        <p>Time: 16:35:54</p> <br>

                                        <p>File Checked by: Zahid Sultan</p><br>

                                        <p>Update: 28/07/2024</p>
                                        <p>By Santosh Giri</p> <br>

                                        <p>Last Update: 30/07/2024</p>

                                    </div>
                                    <div class="uploadarea" style="border: 1px solid red;">
                                        <input type="file" name="voucher" accept="image/*">
                                        <img src="{{ asset('upload.svg') }}" width="70">
                                        <button type="submit">Upload Slip/Voucher here</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-content" id="send-visa" style="display: none;">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="lefttabcontent" style="text-align: center;">
                                <p>Coming soon...</p>
                            </div>
                            <div class="upload-container">
                                <div class="upload-button">
                                    <input type="file" name="voucher" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tab');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.style.display = 'none');

                tab.classList.add('active');
                document.getElementById(tab.dataset.tab).style.display = 'block';
            });
        });
    });
</script>
@endsection
