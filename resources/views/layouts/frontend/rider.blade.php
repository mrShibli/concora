<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Conqueror Services LLC &#8211; Food Delivery Services </title>

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="{{ $pageDescription ?? 'Conqueror Services LLC | Food Delivery Services | UAE | KSA | Bahrain | Qatar' }}">
    <meta property="og:image" content="{{ asset('logoicon.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #113163;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        label {
            display: inline-block;
            margin-bottom: 0rem !important;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform select,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ECEFF1;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            =color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 15px;
            /* letter-spacing: 1px; */
        }

        #msform input:focus,
        #msform select,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #F4B05C;
            outline-width: 0
        }

        #msform .action-button {
            width: auto;
            background: #ffa000;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 7px;
            cursor: pointer;
            padding: 10px 15px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #ffa000
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 7px;
            cursor: pointer;
            padding: 10px 15px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #113163;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #113163;
            font-weight: normal
        }

        .steps {
            font-size: 22px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: #363636;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #113163
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f05a"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f15c"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #113163
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #113163;
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

        label span {
            color: red;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .custom-file-upload {
            margin-top: 3px;
            cursor: pointer;
        }

        .imagetopheading {
            font-size: 14px;
            color: #000;
            margin-top: 15px;
        }

        .applicantbottomtext {
            font-size: 14px;
            margin-top: -8px;
        }

        .custom-file-upload:hover {
            opacity: 0.7;
            /* optional: add hover effect */
        }

        .col-md-6.residentis {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-top: 50px;
        }

        .col-md-6.dobarea {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-top: 50px;
        }

        .form-check input {
            display: inline-block !important;
            width: auto !important;
            margin-top: 6px !important;
        }
    </style>

    {{-- Riders terms --}}
    <style>
        .terms {
            display: none;
        }

        .terms .container {
            max-width: 1200px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .box span {
            font-size: 1.rem;
        }

        .terms .container .heading {
            text-align: center;
            margin-bottom: 5px !important;
        }

        .terms .container .heading h2 {
            font-size: 22px;
        }

        .terms .container .heading p {
            font-size: 15px;
            font-weight: 500;
        }

        .terms .container .box-conatainer {
            max-width: 100%;
            margin: 0 auto;
        }

        .terms .container .box-conatainer .box {
            padding-top: 10px;
            padding-bottom: 15px;
        }

        .terms .container .box-conatainer .box div {
            display: flex;
            flex-wrap: wrap;
        }

        .terms .container .box-conatainer .box div p {
            flex: 1 1 48%;
            color: black;
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 0px;
        }

        .terms .container .box-conatainer .box div p span {
            margin-right: 20px;
        }

        .topimage img {
            width: 100%;
            height: 360px;
        }

        .residentis .check {
            margin-left: -5px;
        }

        @media(max-width:950px) {
            .topimage img {
                width: 100%;
                height: auto;
            }

            #progressbar li {
                list-style-type: none;
                font-size: 14px;
                width: 25%;
                float: left;
                position: relative;
                font-weight: 400;
            }

            .col-md-6.dobarea {
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding-top: 0px;
            }

            .residentis .check {
                margin-left: 15px;
            }

            .col-md-6.residentis {
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding-top: 0px;
            }
        }

        @media(max-width:450px) {

            .terms .container {
                padding: 0px;
            }


            .terms .container .heading h2 {
                font-size: 18px;
                line-height: 1.6;
                margin-bottom: 10px;
            }

            .terms .container .heading p {
                font-size: 14px;
            }

            .terms .container .box-conatainer .box div p {
                font-size: 13px;
            }

            .terms .container .box-conatainer .box div p span {
                margin-right: 10px;
            }

        }

        #emiratesid {
            display: none;
        }
    </style>

    <style>
        .riderterms {
            color: #000;
        }

        #riderterms-heading {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .riderterms-table {
            border-collapse: collapse;
            width: 100%;
            color: #000;
        }

        .riderterms-table td {
            border: 1px solid #ddd;
            padding: 8px;
            color: #000;
        }

        .riderterms-item {
            font-weight: bold;
            margin-right: 5px;
            color: #000;
        }

        .error-message {
            font-size: 13px;
            color: red;
            margin-bottom: 10px;
        }

        .dob .error-message {
            font-size: 14px;
            color: red;
            margin-top: -5px;
            margin-bottom: 6px;
        }

        .col-md-6.emailerror .error-message {
            margin-top: -19px;
        }

        #phone-error,
        #whatsappnumberflag-error {
            font-size: 14px;
            color: red;
            margin-top: 5px;
        }

        .iti .error-message {
            font-size: 14px;
            color: red;
            margin-bottom: -19px;
            /* position: absolute; */
        }

        .error-container {
            margin-top: -18px;
        }

        .iti .error-container {
            margin-top: 0px;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/riderscript.js') }}"></script>

</head>

<body>
    <div class="container-fluid">
        @if (Session::has('success'))
            <section>
                <div
                    style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.3rem;">
                    {{ Session::get('success') }}
                </div>
            </section>
        @endif
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-0 pb-0 mt-0 mb-0">
                    {{-- <div class="area mb-2 topimage">
                        <img src="{{ asset('banner5.jpeg') }}" alt="">
                    </div> --}}
                    <h3 id="heading" style="text-transform: initial !important;">Apply Now!</h3>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform" method="POST" action="{{ route('applicants.store') }}"
                        enctype="multipart/form-data" class="form applyform">
                        @csrf
                        @if ($errors->any())
                            <div class="center allerror">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Basic Information</strong></li>
                            <li id="personal"><strong>CNIC Information</strong></li>
                            <li id="payment"><strong>License Information</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->

                        {{-- Step 1 --}}
                        <fieldset>
                            <div class="form-card">

                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h3 class="steps">Step 1 - 4</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">First Name: <span>*</span></label>
                                        <div id="error-container"></div>
                                        <input type="text" value="{{ old('first_name') }}" name="first_name"
                                            autocomplete="off" id="first_name"
                                            class="{{ $errors->has('first_name') ? 'error' : '' }}" required
                                            placeholder="First Name">
                                        @error('first_name')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Last Name: <span>*</span></label>
                                        <input type="text" name="last_name" autocomplete="off"
                                            value="{{ old('last_name') }}" id="lname"
                                            class="{{ $errors->has('last_name') ? 'error' : '' }}"
                                            placeholder="Last Name" required>
                                        @error('last_name')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="imageinput">
                                            <div class="">
                                                <div class="fieldlabels">Applicant Image: <span
                                                        style="color:Red;">*</span></div>
                                                <img src="{{ asset('profile.svg') }}" alt="Upload" width="60"
                                                    class="custom-file-upload" id="image-upload"
                                                    class="{{ $errors->has('email') ? 'error' : '' }}">

                                            </div>

                                            <div class="">
                                                <input type="file" name="applicant_image" accept="image/*"
                                                    id="form-field-applicantimage" aria-required="true"
                                                    value="{{ old('applicant_image') }}"
                                                    class="{{ $errors->has('applicant_image') ? 'error' : '' }}"
                                                    required>
                                                @error('applicant_image')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 dobarea">
                                        <div class="dob">
                                            <label class="fieldlabels">Date of Birth: <span>*</span></label>
                                            <input type="date" value="{{ old('date_of_birth') }}"
                                                name="date_of_birth" autocomplete="off" id="dob"
                                                class="{{ $errors->has('date_of_birth') ? 'error' : '' }}" required>
                                            @error('date_of_birth')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Mother Name (Full): <span>*</span></label>
                                        <input type="text" value="{{ old('mother_name') }}" name="mother_name"
                                            autocomplete="off" id="mother_name"
                                            class="{{ $errors->has('mother_name') ? 'error' : '' }}" required
                                            placeholder="Mother Name">
                                        @error('mother_name')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Father Name: <span>*</span></label>
                                        <input type="text" value="{{ old('father_name') }}" name="father_name"
                                            autocomplete="off" id="father_name"
                                            class="{{ $errors->has('father_name') ? 'error' : '' }}" required
                                            placeholder="Father Name">
                                        @error('father_name')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Marital Status: <span>*</span></label>
                                        <select name="martialstatus" required>
                                            <option value="" disabled selected>Select your status</option>
                                            <option value="Single">Single</option>
                                            <option value="Maried">Married</option>
                                            <option value="Maried">Divorced</option>
                                        </select>
                                        @error('martialstatus')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 emailerror">
                                        <label class="fieldlabels">Email Address: <span>*</span></label>
                                        <input type="email" name="email" autocomplete="off" id="email"
                                            value="{{ old('email') }}"
                                            class="{{ $errors->has('email') ? 'error' : '' }}"
                                            placeholder="Email Address" required>
                                        <div id="email-error" class="error-message" style="display: none;"></div>

                                        @error('email')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Contact Number: <span>*</span></label>
                                        <input type="tel" value="{{ old('contact_number') }}" autocomplete="off"
                                            name="contact_number" id="phone" pattern="^[0-9-]+$"
                                            title="Only numbers and hyphens are allowed"
                                            class="{{ $errors->has('contact_number') ? 'error' : '' }}" required>
                                        @error('contact_number')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                        <p class="errormessage" id="phone-error"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Whatsapp Number: <span>*</span></label>
                                        <input type="tel" value="{{ old('whatsapp_number') }}"
                                            autocomplete="off" name="whatsapp_number" id="whatsappnumberflag"
                                            class="{{ $errors->has('whatsapp_number') ? 'error' : '' }}" required>
                                        @error('whatsapp_number')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                        <p class="errormessage" id="whatsappnumberflag-error"></p>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Position: <span>*</span></label>
                                        <select name="position_id" id="position" required>
                                            @foreach ($allpositions as $position)
                                                @if ($position->status == 1 && $position->rider == 1)
                                                    <option value="{{ $position->id }}">{{ $position->title }}
                                                    </option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Nationality: <span>*</span></label>
                                        <div id="error-container"></div>
                                        <select name="nationality" required>
                                            <option value="" disabled selected>Select your Nationality</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Philippines">Indonesia</option>
                                            <option value="Philippines">Sri Lanka</option>
                                        </select>
                                        @error('nationality')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <input type="button" name="next" class="next action-button"
                                value="Save & Continue" />

                        </fieldset>

                        {{-- Step 2 --}}
                        <fieldset>

                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">CNIC Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>

                                {{-- NID / CNIC Number --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels" for="nidorcnicnumber">NID / CNIC Number:
                                            <span>*</span></label>
                                        <input type="text" value="{{ old('nidorcnicnumber') }}"
                                            autocomplete="off" name="nidorcnicnumber" id="nidorcnicnumber"
                                            class="{{ $errors->has('nidorcnicnumber') ? 'error' : '' }}"
                                            placeholder="NID / CNIC Number" required>
                                        @error('nidorcnicnumber')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fieldlabels" for="nidorcnicexpiry">Expiry Date:</label>
                                        <input type="date" value="{{ old('nidorcnicexpiry') }}"
                                            autocomplete="off" name="nidorcnicexpiry" id="nidorcnicexpiry"
                                            class="{{ $errors->has('nidorcnicexpiry') ? 'error' : '' }}">
                                        @error('nidorcnicexpiry')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- NID/CNIC --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="imageinput5">
                                            <div class="">
                                                <div class="imagetopheading fieldlabels">NID/CNIC Front Side:
                                                    <span>*</span>
                                                </div>
                                                <img src="{{ asset('idback.svg') }}" alt="Upload" width="60"
                                                    class="custom-file-upload" id="image-nid_cnic_front">
                                            </div>

                                            <div class="">
                                                <input type="file" name="nid_cnic_front"
                                                    id="form-field-nid_cnic_front" aria-required="true"
                                                    value="{{ old('nid_cnic_front') }}"
                                                    class="{{ $errors->has('nid_cnic_front') ? 'error' : '' }}"
                                                    required>
                                                @error('nid_cnic_front')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="imageinput5">
                                            <div class="">
                                                <div class="imagetopheading fieldlabels">NID/CNIC Back Side</div>
                                                <img src="{{ asset('idfront.svg') }}" alt="Upload" width="60"
                                                    class="custom-file-upload" id="image-nid_cnic_back">
                                            </div>

                                            <div class="">
                                                <input type="file" name="nid_cnic_back"
                                                    id="form-field-nid_cnic_back" aria-required="true"
                                                    value="{{ old('nid_cnic_back') }}"
                                                    class="{{ $errors->has('nid_cnic_back') ? 'error' : '' }}"
                                                    required>
                                                @error('nid_cnic_back')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Passport Number --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fieldlabels">Passport Number: <span>*</span></label>
                                        <input type="text" name="passportno" id="passportno"
                                            value="{{ old('passportno') }}" required placeholder="Passport Number" required>
                                    </div>
                                    <div class="col-md-6">

                                        <label for="date_of_expiry" class="fieldlabels">Date of Expiry </label>
                                        <input type="date" value="{{ old('date_of_expiry') }}"
                                            name="date_of_expiry" autocomplete="off" id="date_of_expiry"
                                            class="{{ $errors->has('date_of_expiry') ? 'error' : '' }}" required>
                                        @error('date_of_expiry')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>

                                {{-- Passport file --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <div class="fieldlabels">Passport FIle: <span>*</span></div>
                                            <img src="{{ asset('passport.svg') }}" alt="Upload" width="60"
                                                class="custom-file-upload" id="image-uploadpassport">
                                        </div>
                                        <div class="">
                                            <input type="file" name="applicant_passport"
                                                id="form-field-applicantpassport" aria-required="true"
                                                value="{{ old('applicant_passport') }}"
                                                class="{{ $errors->has('applicant_passport') ? 'error' : '' }}" required>
                                            @error('applicant_passport')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6 residentis">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="uaeresident">Are you UAE Resident ?</label>

                                            </div>
                                            <div class="col-dm-6 check">
                                                <input type="checkbox" name="uaeresident" id="uaeresident"
                                                    onclick="toggleEmiratesID()">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6 residentis">
                                                <label for="uaeresident">Are you UAE Resident ?</label>
                                                <select name="uaeresident" id="uaeresident" onchange="toggleEmiratesID()">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                    </div>

                                </div>


                                {{-- Resident section --}}
                                <div id="emiratesidSection" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="box">
                                                <label for="dob">Emirates ID </label>
                                                <input type="text" value="{{ old('emiratesid') }}"
                                                    name="emiratesid" autocomplete="off" id="fixedInput"
                                                    maxlength="18"
                                                    class="{{ $errors->has('emiratesid') ? 'error' : '' }}"
                                                    oninput="formatInput(this)" placeholder="784-####-#######-#"
                                                    onclick="autofill()">
                                                @error('emiratesid')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fieldlabels" for="emirates_expiry">Expiry Date:
                                                <span>*</span></label>
                                            <input type="date" value="{{ old('emirates_expiry') }}"
                                                name="emirates_expiry" autocomplete="off" id="emirates_expiry"
                                                class="{{ $errors->has('emirates_expiry') ? 'error' : '' }}">
                                            @error('emirates_expiry')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <input type="button" name="next" class="next action-button"
                                value="Save & Continue" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>

                        {{-- Step 3 --}}
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">License Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>

                                </div>

                                {{-- Country Province --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="country" class="fieldlabels">Country: <span>*</span> </label>
                                        <div>
                                            <select name="country" required id="country">
                                                <option value="India">India</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Philippines">Indonesia</option>
                                                <option value="Philippines">Sri Lanka</option>
                                            </select>
                                            @error('country')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="province" class="fieldlabels">Province: <span>*</span> </label>
                                        <input type="text" name="province" autocomplete="off"
                                            value="{{ old('province') }}" id="province"
                                            class="{{ $errors->has('province') ? 'error' : '' }}"
                                            placeholder="Type Province" required>
                                        @error('province')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- City Zip Code --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="city" class="fieldlabels">City: <span>*</span> </label>
                                        <input type="text" name="city" autocomplete="off"
                                            value="{{ old('city') }}" id="city"
                                            class="{{ $errors->has('city') ? 'error' : '' }}" required
                                            placeholder="Type City">
                                        @error('city')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zip" class="fieldlabels">Zip Code (Optional): </label>
                                        <input type="text" name="zip" autocomplete="off"
                                            value="{{ old('zip') }}" id="zip"
                                            class="{{ $errors->has('zip') ? 'error' : '' }}"
                                            placeholder="Input Zip Code">
                                        @error('zip')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- City Zip Code --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="homeaddrss" class="fieldlabels">Home Address: <span>*</span>
                                        </label>
                                        <textarea name="homeaddrss" id="homeaddrss" cols="30" rows="2" value="{{ old('homeaddrss') }}"
                                            placeholder="Type Home Address" required></textarea>
                                        @error('homeaddrss')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Driving License --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="imageinput5">
                                            <div class="">
                                                <label class="fieldlabels" style="margin-bottom: -10px;">Driving
                                                    License Front Side (Home Country)<span>*</span></label> <br>
                                                <img src="{{ asset('license.jpg') }}" alt="Upload" width="60"
                                                    class="custom-file-upload" id="image-uploadlicensefront">
                                            </div>

                                            <div class="">
                                                <input type="file" name="appli_dri_lisence_frontpart"
                                                    id="form-field-applicantlicensefront" aria-required="true"
                                                    value="{{ old('appli_dri_lisence_frontpart') }}" required
                                                    class="{{ $errors->has('appli_dri_lisence_frontpart') ? 'error' : '' }}">
                                                @error('appli_dri_lisence_frontpart')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="imageinput6">
                                            <div class="">
                                                <label class="fieldlabels" style="margin-bottom: -10px;">Driving
                                                    License Back Side (Home Country)<span>*</span></label> <br>
                                                <img src="{{ asset('license.jpg') }}" alt="Upload" width="60"
                                                    class="custom-file-upload" id="image-uploadlicenseback">
                                            </div>

                                            <div class="">
                                                <input type="file" name="appli_dri_lisence_backpart"
                                                    id="form-field-applicantlicenseback" aria-required="true"
                                                    value="{{ old('appli_dri_lisence_backpart') }}" required
                                                    class="{{ $errors->has('appli_dri_lisence_backpart') ? 'error' : '' }}">
                                                @error('appli_dri_lisence_backpart')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- License Number, Special Page, Reference Number --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="fieldlabels">Driving License Number:
                                            <span>*</span> </label>
                                        <input type="text" name="appli_dri_number" id="appli_dri_number"
                                            value="{{ old('appli_dri_number') }}"
                                            placeholder="Your Driving License Number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="imageinput6">
                                            <div class="">
                                                <div class="imagetopheading fieldlabels">Special Page (Optional) </div>
                                                <img src="{{ asset('specialpapers.svg') }}" alt="Upload"
                                                    width="60" class="custom-file-upload" id="image-specialpage">
                                            </div>

                                            <div class="">
                                                <input type="file" name="specialpage" id="form-field-specialpage"
                                                    aria-required="true" value="{{ old('specialpage') }}"
                                                    class="{{ $errors->has('specialpage') ? 'error' : '' }}">
                                                @error('specialpage')
                                                    <p class="erromessage">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="fieldlabels">Reference Number (Optional)</label>
                                        <input type="text" name="reference" autocomplete="off"
                                            value="{{ old('reference') }}" id="reference"
                                            class="{{ $errors->has('reference') ? 'error' : '' }}"
                                            placeholder="Reference Number">
                                        @error('reference')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pl-3">
                                    <div class="box" style="margin-top: 5px;">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" id="termsCheckbox"
                                                required>
                                            <label class="form-check-label" for="termsCheckbox">
                                                I agree with the <span style="color: #007bff">terms and
                                                    conditions</span>.
                                            </label>
                                        </div>
                                        <div class="terms">
                                            <div class="container" style="margin-left: -15px;">

                                                <div class="box-conatainer mt-2">
                                                    <a href="#" style="font-weight: 600;font-size:17px;">Terms
                                                        and Conditions</a>
                                                    <div class="box">
                                                        <div>
                                                            <p><span>01</span> Duration of Service Contract</p>
                                                            <p><b>:</b> <span style="color: tomato;">Two (2) Years
                                                                    [renewable]</span></p>
                                                        </div>
                                                        <div>
                                                            <p><span>02</span> Probationary Period</p>
                                                            <p><b>:</b> <span style="color: tomato;">06 (Six)
                                                                    Months</span> </p>
                                                        </div>
                                                        <div>
                                                            <p><span>03</span> Air Ticket </p>
                                                            <p><b>:</b> <span style="color: tomato;">Not
                                                                    Included</span> </p>
                                                        </div>
                                                        <div>
                                                            <p><span>04</span> Accommodation </p>
                                                            <p><b>:</b> <a style="text-decoration: none; color: blue;"
                                                                    href="">Provided
                                                                    by
                                                                    Company/ Self</a> <span
                                                                    style="color: tomato;">(Conditional)</span></p>
                                                        </div>
                                                        <div>
                                                            <p><span>05</span> Food </p>
                                                            <p><b>:</b> Self</p>
                                                        </div>
                                                        <div>
                                                            <p><span>06</span> Working Hour </p>
                                                            <p><b>:</b> <a href=""
                                                                    style="text-decoration: none; color: blue;">As per
                                                                    U.A.E
                                                                    Labor Law</a> </p>
                                                        </div>
                                                        <div>
                                                            <p><span>07</span> Over Time Allowance </p>
                                                            <p><b>:</b> <a
                                                                    href=""style="text-decoration: none; color: blue;">As
                                                                    per
                                                                    Company
                                                                    Rules</a> </p>
                                                        </div>
                                                        <div>
                                                            <p><span>08</span> Medical </p>
                                                            <p><b>:</b> <a href=""
                                                                    style="text-decoration: none; color: blue;">Provided
                                                                    by
                                                                    Employer</a> </p>
                                                        </div>
                                                        <div>
                                                            <p><span>09</span> Annual Leave/ Holiday </p>
                                                            <p><b>:</b> Yes</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <input type="submit" name="next" class="action-button" value="Submit" />
                            {{-- <input type="submit" name="next" value="Submit" /> --}}
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png"
                                            class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Submitted Successfully</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- scripts start --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.min.js"></script>
    <script>
        var phone = window.intlTelInput(document.querySelector("#phone"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var phone_full_number = phone.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='contact_number'").val(phone_full_number);
        });
    </script>

    <script>
        var whatsappnumb = window.intlTelInput(document.querySelector("#whatsappnumberflag"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var whatsappnumb_phone = whatsappnumb.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='whatsapp_number'").val(whatsappnumb_phone);
        });
    </script>

    {{-- Image uupload scrips --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image = document.querySelector('#image-upload');

            // Get reference to the file input element
            var fileInput = document.querySelector('#form-field-applicantimage');

            // Add click event listener to the image
            image.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadpassport');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantpassport');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-nid_cnic_front');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-nid_cnic_front');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-nid_cnic_back');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-nid_cnic_back');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadresume');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantresume');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Front side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadlicensefront');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantlicensefront');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Back side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadlicenseback');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantlicenseback');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Back side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-specialpage');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-specialpage');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });
    </script>

    {{-- UAE Resident toggle --}}
    {{-- <script>
        function toggleEmiratesID() {
            var checkbox = document.getElementById("uaeresident");
            var emiratesIDSection = document.getElementById("emiratesidSection");

            // If checkbox is checked, show the Emirates ID section; otherwise, hide it
            if (checkbox.checked) {
                emiratesIDSection.style.display = "block";
            } else {
                emiratesIDSection.style.display = "none";
            }
        }
    </script> --}}
    <script>
        function toggleEmiratesID() {
            var select = document.getElementById("uaeresident");
            var emiratesIDSection = document.getElementById("emiratesidSection");
    
            // If the selected option is "yes", show the Emirates ID section; otherwise, hide it
            if (select.value === "yes") {
                emiratesIDSection.style.display = "block";
            } else {
                emiratesIDSection.style.display = "none";
            }
        }
    </script>

    {{-- Emiraats ID Script --}}
    <script>
        function autofill() {
            var input = document.getElementById("fixedInput");
            // Autofill "784" only if the input is empty or the first three characters are not "784"
            if (input.value.length < 3 || input.value.slice(0, 3) !== '784') {
                input.value = '784';
            }
        }

        function formatInput(input) {
            // Remove non-numeric characters
            input.value = input.value.replace(/\D/g, '');

            // Add dashes at fixed positions
            if (input.value.length > 3) {
                input.value = input.value.slice(0, 3) + '-' + input.value.slice(3);
            }
            if (input.value.length > 8) {
                input.value = input.value.slice(0, 8) + '-' + input.value.slice(8);
            }
            if (input.value.length > 16) {
                input.value = input.value.slice(0, 16) + '-' + input.value.slice(16);
            }
        }

        document.getElementById("fixedInput").addEventListener("keydown", function(e) {
            var input = document.getElementById("fixedInput");
            if (e.key === "Backspace" && input.selectionStart <= 3) {
                e.preventDefault();
                input.setSelectionRange(0, 3);
            }
        });
    </script>

    {{-- Email existensy check --}}
    <script>
        $(document).ready(function() {
            const commonTLDs = ['com', 'org', 'net', 'edu', 'gov', 'mil', 'co', 'info', 'in'];

            $('#email').on('input blur', function() {
                var email = $(this).val();
                var emailErrorDiv = $('#email-error');
                var emailParts = email.split('@');
                var valid = true;
                var errorMessage = '';

                if (emailParts.length === 2) {
                    var domainParts = emailParts[1].split('.');
                    if (domainParts.length < 2 || !commonTLDs.includes(domainParts[domainParts.length -
                            1])) {
                        valid = false;
                        errorMessage =
                            'Please enter a valid email address with a common top-level domain (e.g., .com, .org).';
                    }
                } else {
                    valid = false;
                    errorMessage = 'Please enter a valid email address.';
                }

                if (!valid) {
                    emailErrorDiv.text(errorMessage).show();
                    $(this).addClass('error');
                } else {
                    emailErrorDiv.hide();
                    $(this).removeClass('error');
                }

                if (valid && email.includes('@')) {
                    // If TLD is valid and "@" is included in the email, send AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('check-email') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            email: email
                        },
                        success: function(response) {
                            if (response.exists) {
                                emailErrorDiv.text('Email already exists').show();
                                $('#email').addClass('error');
                            } else {
                                if (errorMessage === '') {
                                    emailErrorDiv.hide();
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>

    {{-- Hide show terms --}}
    <script>
        document.getElementById('termsCheckbox').addEventListener('change', function() {
            var termsSection = document.querySelector('.terms');
            if (this.checked) {
                termsSection.style.display = 'block';
            } else {
                termsSection.style.display = 'none';
            }
        });
    </script>

    {{-- DOB Age check --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dobInput = document.getElementById("dob");
            var errorContainer = document.getElementById("error-container");

            dobInput.addEventListener("input", validateDateOfBirth);

            function validateDateOfBirth(event) {
                var selectedDate = new Date(event.target.value);
                var currentDate = new Date();
                var age = currentDate.getFullYear() - selectedDate.getFullYear();

                // Check if the age is within the specified range
                if (age < 19 || age > 45) {
                    showError("Age must be between 20 and 45 years.", dobInput);
                    dobInput.classList.add("error");
                } else {
                    clearError(dobInput);
                    dobInput.classList.remove("error");
                }
            }

            function showError(message, inputField) {
                clearError(inputField);

                var errorMessage = document.createElement("p");
                errorMessage.textContent = message;
                errorMessage.classList.add("error-message");

                inputField.parentNode.insertBefore(errorMessage,
                    inputField); // Insert error message before the input field

                // Add error class to the input field
                inputField.classList.add("error");
            }

            function clearError(inputField) {
                var sibling = inputField.previousElementSibling;
                while (sibling) {
                    if (sibling.classList.contains("error-message")) {
                        sibling.parentNode.removeChild(sibling); // Remove any existing error messages
                    }
                    sibling = sibling.previousElementSibling;
                }

                // Remove error class from the input field
                inputField.classList.remove("error");
            }
        });
    </script>

    {{-- Fname , lname basic validatin --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var firstNameInput = document.getElementById("first_name");
            var lastNameInput = document.getElementById("lname");
            var motherNameInput = document.getElementById("mother_name");
            var fatherNameInput = document.getElementById("father_name");
            var errorContainer = document.getElementById("error-container");

            firstNameInput.addEventListener("input", function(event) {
                validateInput(event, firstNameInput);
            });

            lastNameInput.addEventListener("input", function(event) {
                validateInput(event, lastNameInput);
            });

            motherNameInput.addEventListener("input", function(event) {
                validateInput(event, motherNameInput);
            });

            fatherNameInput.addEventListener("input", function(event) {
                validateInput(event, fatherNameInput);
            });

            function validateInput(event, inputField) {
                var inputValue = event.target.value;

                if (/[\d@#$%^&*()_+=\[\]{}|\\:;'"<>?]/.test(inputValue)) {
                    showError("Numbers, @ and similar characters are not allowed.", inputField);
                    inputField.classList.add("error");
                } else if (inputValue.length < 3) {
                    showError("Minimum 3 characters are required.", inputField);
                    inputField.classList.add("error");
                } else {
                    clearError(inputField);
                    inputField.classList.remove("error");
                }
            }

            function showError(message, inputField) {
                clearError(inputField);

                var errorMessage = document.createElement("p");
                errorMessage.textContent = message;
                errorMessage.classList.add("error-message");

                inputField.parentNode.insertBefore(errorMessage,
                    inputField); // Insert error message before the input field

                // Add error class to the input field
                inputField.classList.add("error");
            }

            function clearError(inputField) {
                var sibling = inputField.previousElementSibling;
                while (sibling) {
                    if (sibling.classList.contains("error-message")) {
                        sibling.parentNode.removeChild(sibling); // Remove any existing error messages
                    }
                    sibling = sibling.previousElementSibling;
                }

                // Remove error class from the input field
                inputField.classList.remove("error");
            }
        });
    </script>

    {{-- numbers validation --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phone');
            const whatsappInput = document.getElementById('whatsappnumberflag');
            const phoneError = document.getElementById('phone-error');
            const whatsappError = document.getElementById('whatsappnumberflag-error');

            function validateNumberInput(event) {
                const input = event.target;
                const errorElement = document.getElementById(input.id + '-error');
                const value = input.value;
                if (/[^0-9]/.test(value)) {
                    errorElement.textContent = 'Only numbers are allowed.';
                    input.setCustomValidity('Only numbers are allowed.');
                } else {
                    errorElement.textContent = '';
                    input.setCustomValidity('');
                }
            }

            phoneInput.addEventListener('input', validateNumberInput);
            whatsappInput.addEventListener('input', validateNumberInput);

            phoneInput.addEventListener('invalid', function() {
                const errorElement = document.getElementById('phone-error');
                if (phoneInput.value === '') {
                    errorElement.textContent = 'This field is required.';
                } else {
                    errorElement.textContent = 'Only numbers are allowed.';
                }
            });

            whatsappInput.addEventListener('invalid', function() {
                const errorElement = document.getElementById('whatsappnumberflag-error');
                if (whatsappInput.value === '') {
                    errorElement.textContent = 'This field is required.';
                } else {
                    errorElement.textContent = 'Only numbers are allowed.';
                }
            });
        });
    </script>

</body>

</html>
