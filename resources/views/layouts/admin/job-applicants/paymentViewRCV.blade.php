@extends('layouts.master')

@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

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
            padding: 10px 20px 20px 20px;
            margin-top: -10px;
            width: 30%;
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
            width: 70%;
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

        .alert-success {
            padding: 9px 12px;
            background: rgb(43, 113, 65);
            color: #fff;
            font-size: 1rem;
            margin-bottom: 7px;
            border-radius: 5px;

        }
        .invoicefles img{
            width: 100%;
            margin-top: 10px;
        }
        .viewtab{
            margin-top: 10px;
            font-size: 0.9rem;
            color: #0099ff;
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
            <!-- resources/views/payment.blade.php -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-success" style="background:rgb(146, 7, 7) !important;">
                    {{ session('error') }}
                </div>
            @endif

            <div class="containermy form-container">
                <div class="form-details">
                    <div class="tabs">
                        <div class="tab active" data-tab="overview">Back</div>
                        <div class="tab" data-tab="deposit">Sent for Modification</div>
                        <div class="tab" data-tab="req-credit">Req for Credit</div>
                        <div class="tab" data-tab="send-visa">Send for eVisa</div>
                    </div>

                    <div class="tab-content" id="overview" style="display: block;">
                        <form action="{{ route('applicants.updateBalance', $applicant->id) }}" method="POST">
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
                                <div class="form-group emailaddress">
                                    <label>Email Address</label>
                                    <div>{{ $applicant->email }}
                                        @if ($applicant->otp_verified == 0)
                                            <img src="{{ asset('email-not-verified.svg') }}" width="25" style="padding-left: 3px;" class="eimg">
                                        @endif
                        
                                        @if ($applicant->otp_verified == 1)
                                            <img src="{{ asset('email-verified.svg') }}" width="25" style="padding-left: 3px;" class="eimg">
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
                                    <label>Total Payable Amount</label>
                                    <div><span class="highlight-red">AED {{ abs($applicant->balance) }}</span></div>
                                </div>
                                <div class="form-group">
                                    <label>Deposited Amount</label>
                                    <div><span class="highlight-green">AED {{ $payment->deposit_amount }}</span></div>
                                    <input type="hidden" name="deposit_amount" value="{{ $payment->deposit_amount }}">
                                </div>
                                
                                <div class="form-group">
                                    <label>Payment Date</label>
                                    <div class="totalammount">{{ \Carbon\Carbon::parse($payment->payment_date)->format('d M Y') }}</div>
                                </div>
                                <div class="form-group payableinput">
                                    <label>Invoice/Slip No</label>
                                    <div><span class="highlight-green">
                                            <input type="text" name="slip_invoice_number" required>
                                        </span></div>
                                </div>
                                <input type="hidden" name="applicant_id" value="{{ $applicant->id }}">
                                <input type="hidden" name="is_payment" value="yes">
                                <input type="hidden" name="pay_activity_id" value="{{ $payment->id }}"> <!-- Hidden input for pay_activity_id -->
                                <div class="submitbuttonarea">
                                    <button type="submit" name="submit"
                                    @if ($payment->status == 'receive_deposit') 
                                        disabled 
                                        style="cursor: not-allowed; opacity: 0.6;" 
                                    @endif>
                                        Balance Update <img src="{{ asset('submit.svg') }}" width="20" alt=""> 
                                    </button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="invoicefles">
                                    <p>Payment Slip / Invoice Files</p>
                                    <a href="{{ asset($payment->slip_invoice_file) }}" data-lightbox="payment" data-title="Payment Slip">
                                        <img src="{{ asset($payment->slip_invoice_file) }}" width="70">
                                    </a>
                                    <button type="button" onclick="viewImage()" class="viewtab">View in Tab</button>
                                </div>
                            </div>
                        </form>
                        
                        
                    </div>

                    <div class="tab-content" id="deposit" style="display: none;">
                        <form>
                            @csrf

                            <div class="lefttabcontent" style="text-align: center;">
                                <p>Coming soon..</p>
                            </div>

                            <div class="upload-container">
                                {{-- <div class="upload-button">
                                    <input type="file" name="slip_invoice_file" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>

                    <div class="tab-content" id="add-payment" style="display: none;">
                        <form>
                            @csrf

                            <div class="lefttabcontent" style="text-align: center;">
                                <p>Coming soon..</p>
                            </div>

                            <div class="upload-container">
                                {{-- <div class="upload-button">
                                    <input type="file" name="slip_invoice_file" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>

                    <div class="tab-content" id="req-credit" style="display: none;">
                        <form>
                            @csrf

                            <div class="lefttabcontent" style="text-align: center;">
                                <p>Coming soon..</p>
                            </div>

                            <div class="upload-container">
                                {{-- <div class="upload-button">
                                    <input type="file" name="slip_invoice_file" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                    <div class="tab-content" id="send-visa" style="display: none;">
                        <form>
                            @csrf

                            <div class="lefttabcontent" style="text-align: center;">
                                <p>Coming soon..</p>
                            </div>

                            <div class="upload-container">
                                {{-- <div class="upload-button">
                                    <input type="file" name="slip_invoice_file" accept="image/*">
                                    <img src="{{ asset('upload.svg') }}" width="70">
                                    <button type="submit">Upload Slip/Voucher here</button>
                                </div> --}}
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

    <script>
        function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('paymenttype_checkbox');
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
            });

            document.getElementById('paymenttype').value = checkbox.checked ? checkbox.value : '';
        }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Remove this script as Lightbox handles image viewing -->
<script>
    function viewImage() {
        var imgSrc = document.querySelector('.invoicefles img').src;
        window.open(imgSrc, '_blank');
    }
</script>


@endsection
