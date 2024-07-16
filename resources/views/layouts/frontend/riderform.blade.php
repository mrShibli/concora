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

    <!-- <link rel="stylesheet" href="assets/css/input.css"> -->
    <link rel="stylesheet" href="{{ asset('dist/assets/index-DXSHw0cc.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">

    <style>
        .error-message {
            font-size: 0.8rem;
            margin-top: 3px;
            color: red;

        }

        /* .fnamearea .error-message, .lnamearea .error-message, .mnamearea .error-message, .ffnamearea .error-message{
            margin-left: 10px;
        } */

        .col-md-6.emailerror .error-message {
            margin-top: -19px;
        }

        .errormessagenumber {
            font-size: 0.8rem;
            margin-top: 3px;
            color: red;
            position: relative;
        }

        .h-\[145vh\] {
            height: 100%;
        }

        .stepactive {
            background-color: red;
            padding: 5px;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .input-t:focus+.label-t,
        .input-t:valid+.label-t {
            background: transparent !important;
        }

        .spinner {
            display: block;
            margin: 0 auto;
            width: 1rem;
            height: 1rem;
            border: 0.15em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner 0.75s linear infinite;
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
        }

        .loading .btn-text {
            display: none;
        }
    </style>

</head>

<body>

    <div class="header bg-White-c p-2  Laptop:py-4  shadow-md rounded-b-3xl top-0 right-0 absolute w-full z-10">
        <div class="container mx-auto">
            <a href="{{ route('mainindex') }}" id="logo"><img class="w-40 Laptop:w-[215px] Tablet:w-[160px]"
                    src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        </div>
    </div>

    <!-- ------------- -->


    <div class="applicant bg-Dull-c pb-4 h-[145vh]">

        <div class="box-container container mx-auto flex flex-nowrap gap-4 Laptop:gap-8">



            @php
                $hasOldData1 = false;
                if (session()->has('step1')) {
                    $oldData1 = json_decode(session()->get('step1'));
                    $hasOldData1 = true;
                }
                $hasOldData2 = false;
                if (session()->has('step2')) {
                    $oldData2 = json_decode(session()->get('step2'));
                    $hasOldData2 = true;
                }
                $hasOldData3 = false;
                if (session()->has('step3')) {
                    $oldData3 = json_decode(session()->get('step3'));
                    $hasOldData3 = true;
                }
                $hasApplicantImg = $hasOldData1 && isset($oldData1->applicant_photo) ? true : false;
                $applicantImageUrl = $hasApplicantImg ? asset('applicants/' . $oldData1->applicant_photo) : '';

                $hasPImage = $hasOldData2 && isset($oldData2->applicant_passport) ? true : false;
                $applicantPassUrl = $hasPImage ? asset('applicants/' . $oldData2->applicant_passport) : '';

                $hasSImage = $hasOldData2 && isset($oldData2->specialpage) ? true : false;
                $applicantSpclAgeUrl = $hasSImage ? asset('applicants/' . $oldData2->specialpage) : '';

                $hasFImage = $hasOldData2 && isset($oldData2->nid_cnic_front) ? true : false;
                $applicantcncfUrl = $hasFImage ? asset('applicants/' . $oldData2->nid_cnic_front) : '';

                $hasBImage = $hasOldData2 && isset($oldData2->nid_cnic_back) ? true : false;
                $applicantcncbUrl = $hasBImage ? asset('applicants/' . $oldData2->nid_cnic_back) : '';
            @endphp

            <div
                class="left-side Laptop:w-[20%] w-full h-auto Laptop:ml-[-40px] h-22  p-2 Laptop:p-4 pb-0 pt-16 Laptop:pt-36   bg-Primary-c ">

                <div class="Laptop:pl-2 Laptop:fixed">
                    <div class="step-titles gap-2 ">

                        <div class="step flex items-center gap-1 Laptop:mb-14" id="firstStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 1 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">1</span>
                            <p class="text-White-c text-[10px] Laptop:text-sm"><a
                                    class="{{ $currentStep == 1 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">Basic
                                    Information</a></p>
                        </div>

                        <div class="step flex items-center gap-1 Laptop:mb-14" id="secondStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 2 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">2</span>
                            <p class="text-White-c text-[10px] Laptop:text-sm"><a
                                    class="{{ $currentStep == 2 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">NID/CNIC
                                    Information</a></p>
                        </div>
                        <div class="step flex items-center gap-1" id="thirdStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 3 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">3</span>
                            <p class="text-White-c text-[10px] Laptop:text-base"><a
                                    class="{{ $currentStep == 3 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">License
                                    Information</a></p>
                        </div>

                    </div>
                </div>

            </div>

            <div
                class="right-side Laptop:w-[80%] bg-White-c   Laptop:mt-28 Laptop:p-6 Laptop:pb-4 p-4  Tablet:m-4 Tablet:mb-6  rounded-md ">
                @if (Session::has('success'))
                    <section>
                        <div
                            style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .5rem 1rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.3rem;; text-align: center">
                            {{ Session::get('success') }}
                        </div>
                    </section>
                @endif

                <h2 class="text-[14px] font-normal leading-4"><span class="text-Indicates">*</span> Indicates a required
                    field</h2>

                <form class="form-card " id="msform" method="POST" enctype="multipart/form-data">

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

                    <!-- Step 1 -->
                    <fieldset id="fieldset1" style="{{ $currentStep == 1 ? 'display: block' : 'display: none' }}">
                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">First Name <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%] fnamearea">
                                    <input type="text" name="firstname" id="firstname" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('firstname') ? 'error' : '' }} "
                                        value="{{ $hasOldData1 ? $oldData1->firstname : '' }}" placeholder="First Name"
                                        required>
                                    @error('firstname')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <!--<label for="" class="label-t">First Name</label>-->
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Last Name <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%] lnamearea">
                                    <input type="text" name="lastname" id="lastname"
                                        value="{{ $hasOldData1 ? $oldData1->lastname : '' }}" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('lastname') ? 'error' : '' }}"
                                        placeholder ="Last Name" required>
                                    @error('lastname')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <!--<label for="" class="label-t">Last Name</label>-->
                                </div>
                            </div>

                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-3 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Mother’s Name <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%] mnamearea">
                                    <input type="text" name="mother_name"
                                        value="{{ $hasOldData1 ? $oldData1->mother_name : '' }}" id="mother_name"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('mother_name') ? 'error' : '' }}"
                                        placeholder="Mother Name" required>
                                    <!--<label for="" class="label-t">Mother Name</label>-->
                                    @error('mother_name')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Date of Birth<span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="Laptop:w-[65%] w-[60%] grid grid-cols-3 gap-1 Tablet:gap-2 border p-2 Tablet:p-2.5 rounded dobdate relative"
                                    style="padding-bottom: 2rem">

                                    <div class="field">
                                        <select name="date_of_birth_daye" id="date_of_birth_day"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Day</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}"
                                                    {{ $hasOldData1 && $oldData1->date_of_birth_day == $i ? 'selected' : '' }}>
                                                    {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="date_of_birth_monthe" id="date_of_birth_month"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Month</option>
                                            @foreach ([1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'] as $monthNumber => $monthName)
                                                <option value="{{ $monthNumber }}"
                                                    {{ $hasOldData1 && $oldData1->date_of_birth_month == $monthNumber ? 'selected' : '' }}>
                                                    {{ $monthName }}
                                                </option>
                                                {{-- value="{{ $hasOldData1 ? $oldData1->mother_name : '' }}" --}}
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="date_of_birth_yeare" id="date_of_birth_year"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Year</option>
                                            @for ($year = 1960; $year <= 2005; $year++)
                                                <option value="{{ $year }}"
                                                    {{ $hasOldData1 && $oldData1->date_of_birth_year == $year ? 'selected' : '' }}>
                                                    {{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div id="dexpiryTime"
                                        style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px"></div>
                                </div>
                            </div>

                        </div>


                        <div class="grid grid-cols-1   border-b gap-2  py-4 Laptop:py-6">

                            <div class="flex items-center gap-4">
                                <div class="Laptop:w-[16%] w-[38%]">
                                    <h2 class="text-sm  Laptop:text-base font-medium leading-[29px] ">Email Address
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[84%] w-[62%] ">
                                    <input type="email" name="email" id="email" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('email') ? 'error' : '' }}"
                                        value="{{ $hasOldData1 ? $oldData1->email : '' }}" required
                                        placeholder="Email Address">
                                    <div id="email-error" class="error-message" style="display: none;"></div>
                                    @error('email')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <!--<label for="" class="label-t">Email Address</label>-->
                                </div>
                            </div>

                        </div>


                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 gap-4 Laptop:gap-8 py-4 Laptop:py-6">


                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Nationality <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <select name="nationality" id="nationality"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                        <option value="">Select Nationality</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'Pakistan' ? 'selected' : '' }}
                                            value="Pakistan">Pakistan</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'Nepal' ? 'selected' : '' }}
                                            value="Nepal">Nepal</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'India' ? 'selected' : '' }}
                                            value="India">India</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'Sri Lanka' ? 'selected' : '' }}
                                            value="Sri Lanka">Sri Lanka</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'Philippine' ? 'selected' : '' }}
                                            value="Philippine">Philippine</option>

                                        <option
                                            {{ $hasOldData1 && $oldData1->nationality == 'Bangladesh' ? 'selected' : '' }}
                                            value="Bangladesh">Bangladesh</option>



                                    </select>

                                    @error('nationality')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Job Position <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <select name="job_position" id="job_position"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                        @foreach ($allpositions as $position)
                                            @if ($position->status == 1 && $position->rider == 1)
                                                <option
                                                    {{ $hasOldData1 && $oldData1->job_position == $position->id ? 'selected' : '' }}
                                                    value="{{ $position->id }}">{{ $position->title }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Contact Number
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="tel" name="contact_number" id="contact_number"
                                        autocomplete="off" title="Only numbers and hyphens are allowed"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('contact_number') ? 'error' : '' }}"
                                        value="{{ $hasOldData1 ? $oldData1->contact_number : '' }}" required>
                                    <p id="phone-error"></p>
                                    @error('contact_number')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <!-- <label for="" class="label-t">Contact Number</label> -->
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">WhatsApp Number
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="tel" name="whatsapp_number" id="whatsapp_number"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('whatsapp_number') ? 'error' : '' }}"
                                        value="{{ $hasOldData1 ? $oldData1->whatsapp_number : '' }}" required>
                                    @error('whatsapp_number')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <!-- <label for="" class="label-t">WhatsApp Number</label> -->
                                    <p id="whatsappnumberflag-error"></p>

                                </div>
                            </div>

                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 gap-2 Laptop:gap-8 py-4 Laptop:py-6">
                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Applicant Photo
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/applicant-image.svg') }}"
                                        alt="">
                                </div>
                                <div id="uploadArea"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImage" class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLink"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a></p>
                                    </div>
                                </div>
                                <input type="file" name="applicant_image" id="fileInput" class="hidden"
                                    accept="image/*" aria-required="true" value="{{ old('applicant_image') }}"
                                    required>
                                @error('applicant_image')
                                    <p class="erromessage">{{ $message }}</p>
                                @enderror
                            </div>
                            <p id="photoError"></p>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const uploadArea = document.getElementById('uploadArea');
                                const uploadLink = document.getElementById('uploadLink');
                                const fileInput = document.getElementById('fileInput');
                                const previewImage = document.getElementById('previewImage');
                                var imageUrl = @json($applicantImageUrl);

                                // Function to load an image from server folder
                                function loadServerImage(imageUrl) {
                                    if (imageUrl) {
                                        previewImage.src = imageUrl;
                                        previewImage.setAttribute('data-loaded', true);
                                    }
                                }

                                // Event listener for file input change
                                fileInput.addEventListener('change', function() {
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            previewImage.src = e.target.result;
                                            previewImage.removeAttribute('data-loaded');
                                        }

                                        reader.readAsDataURL(file);
                                    } else {
                                        previewImage.src = 'assets/Images/Vector.png'; // Default image if no file selected
                                        previewImage.removeAttribute('data-loaded');
                                    }
                                });

                                // Load image from server folder if available
                                loadServerImage(imageUrl);

                                // Event listeners for triggering file input
                                uploadArea.addEventListener('click', function() {
                                    fileInput.click();
                                });

                                uploadLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    fileInput.click();
                                });
                            });
                        </script>


                        <div class="button text-right Laptop:mt-10 mt-4 pb-4">

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f1Button">
                                <span class="btn-text">Save & Continue</span>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 2 -->
                    <fieldset id="fieldset2" style="{{ $currentStep == 2 ? 'display: block' : 'display: none' }}">
                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Passport Number
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="number" name="passportno" id="passportno" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                        value="{{ $hasOldData2 && isset($oldData2->passportno) ? $oldData2->passportno : '' }}"
                                        required>
                                    <label for="" class="label-t">Passport Number</label>
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Date of Expiry
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="Laptop:w-[65%] w-[60%] grid grid-cols-3 gap-1 Tablet:gap-2 border p-2 Tablet:p-2.5 expiry  rounded date relative"
                                    style="padding-bottom: 2rem">

                                    <div class="field">
                                        <select name="passport_doe_daye" id="passport_doe_day"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Day</option>
                                            @php
                                                $selectedDay =
                                                    isset($hasOldData2) &&
                                                    $hasOldData2 &&
                                                    isset($oldData2->passport_doe_day)
                                                        ? $oldData2->passport_doe_day
                                                        : '';
                                            @endphp

                                            @for ($day = 1; $day <= 31; $day++)
                                                <option value="{{ $day }}"
                                                    {{ $day == $selectedDay ? 'selected' : '' }}>{{ $day }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="passport_doe_monthe" id="passport_doe_month"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Month</option>
                                            @php
                                                $selectedMonth =
                                                    isset($hasOldData2) &&
                                                    $hasOldData2 &&
                                                    isset($oldData2->passport_doe_month)
                                                        ? $oldData2->passport_doe_month
                                                        : '';
                                                $months = [
                                                    1 => 'January',
                                                    2 => 'February',
                                                    3 => 'March',
                                                    4 => 'April',
                                                    5 => 'May',
                                                    6 => 'June',
                                                    7 => 'July',
                                                    8 => 'August',
                                                    9 => 'September',
                                                    10 => 'October',
                                                    11 => 'November',
                                                    12 => 'December',
                                                ];
                                            @endphp
                                            @foreach ($months as $key => $month)
                                                <option value="{{ $key }}"
                                                    {{ $key == $selectedMonth ? 'selected' : '' }}>{{ $month }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="passport_doe_yeare" id="passport_doe_year"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Year</option>
                                            @php
                                                $selectedYear =
                                                    isset($hasOldData2) &&
                                                    $hasOldData2 &&
                                                    isset($oldData2->passport_doe_year)
                                                        ? $oldData2->passport_doe_year
                                                        : '';
                                            @endphp
                                            @for ($year = 2000; $year <= 2030; $year++)
                                                <option value="{{ $year }}"
                                                    {{ $year == $selectedYear ? 'selected' : '' }}>{{ $year }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div id="pexpiryTime"
                                        style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px"></div>
                                </div>

                            </div>

                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Father’s Name <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%] ffnamearea">
                                    <input type="text" name="father_name" id="father_name" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('father_name') ? 'error' : '' }}"
                                        value="{{ $hasOldData2 ? $oldData2->father_name : '' }}" required>
                                    @error('father_name')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <label for="" class="label-t">Father’s Name</label>
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">NID/CNIC <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="text" name="nidorcnicnumber" id="nidorcnicnumber"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('nidorcnicnumber') ? 'error' : '' }}"
                                        value="{{ $hasOldData2 ? $oldData2->nidorcnicnumber : '' }}" required>
                                    @error('nidorcnicnumber')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <label for="" class="label-t">NID/CNIC</label>
                                </div>
                            </div>



                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Marital Status
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <select name="martialstatus" id="martialstatus"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                        <option value="">Select Status</option>
                                        <option
                                            {{ $hasOldData2 && $oldData2->martialstatus == 'Single' ? 'selected' : '' }}
                                            value="Single">Single</option>
                                        <option
                                            {{ $hasOldData2 && $oldData2->martialstatus == 'Married' ? 'selected' : '' }}
                                            value="Married">Married</option>
                                        <option
                                            {{ $hasOldData2 && $oldData2->martialstatus == 'Divorced' ? 'selected' : '' }}
                                            value="Divorced">Divorced</option>
                                    </select>
                                    @error('martialstatus')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class="flex items-center gap-2 YesNo">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">UAE Residence <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <div class="flex gap-8">
                                        <select name="uaeresident" id="uaeresident"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none">
                                            <option
                                                {{ $hasOldData2 && $oldData2->uaeresident == 'Yes' ? 'selected' : '' }}
                                                value="Yes"><span id="yes">Yes</span> </option>
                                            <option
                                                {{ $hasOldData2 && $oldData2->uaeresident == 'No' ? 'selected' : '' }}
                                                value="No"><span id="no">No</span></option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class=" flex items-center gap-2 YesNo">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Religion <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <div class="flex gap-8">
                                        <select name="religion" id="religion"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none">
                                            <option
                                                {{ $hasOldData2 && $oldData2->religion == 'Islam' ? 'selected' : '' }}
                                                value="Islam">Islam</option>
                                            <option
                                                {{ $hasOldData2 && $oldData2->religion == 'Hindu' ? 'selected' : '' }}
                                                value="Hindu">Hindu</option>
                                            <option
                                                {{ $hasOldData2 && $oldData2->religion == 'Christian' ? 'selected' : '' }}
                                                value="Christian">Christian </option>
                                            <option
                                                {{ $hasOldData2 && $oldData2->religion == 'Buddhist' ? 'selected' : '' }}
                                                value="Buddhist">Buddhist</option>
                                        </select>
                                    </div>
                                    @error('religion')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div id="residence-yes"
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Emirates ID <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="text" name="emiratesid" id="fixedInput" autocomplete="off"
                                        value="{{ $hasOldData2 ? $oldData2->emiratesid : '' }}" maxlength="18"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('emiratesid') ? 'error' : '' }}"
                                        oninput="formatInput(this)" placeholder="784-####-#######-#"
                                        onclick="autofill()">
                                    @error('emiratesid')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                    <label for="" class="label-t">Emirates ID </label>
                                </div>
                            </div>


                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Date of Expiry
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>

                                <div class="Laptop:w-[65%] w-[60%] grid grid-cols-3 gap-1 Tablet:gap-2 border p-2 Tablet:p-2.5 expiry  rounded date relative"
                                    style="padding-bottom: 2rem">

                                    <div class="field">
                                        <select name="emirates_expiry_daye" id="emirates_expiry_day"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                            <option value="">Day</option>
                                            @php
                                                $selectedDay = isset($oldData2->emirates_expiry_day)
                                                    ? $oldData2->emirates_expiry_day
                                                    : null;
                                            @endphp
                                            @for ($day = 1; $day <= 31; $day++)
                                                <option value="{{ $day }}"
                                                    {{ $day == $selectedDay ? 'selected' : '' }}>{{ $day }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div class="field">
                                        <select name="emirates_expiry_monthe" id="emirates_expiry_month"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                            <option value="">Month</option>
                                            @php
                                                $selectedMonth = isset($oldData2->emirates_expiry_month)
                                                    ? $oldData2->emirates_expiry_month
                                                    : '';
                                                $months = [
                                                    1 => 'January',
                                                    2 => 'February',
                                                    3 => 'March',
                                                    4 => 'April',
                                                    5 => 'May',
                                                    6 => 'June',
                                                    7 => 'July',
                                                    8 => 'August',
                                                    9 => 'September',
                                                    10 => 'October',
                                                    11 => 'November',
                                                    12 => 'December',
                                                ];
                                            @endphp
                                            @foreach ($months as $key => $month)
                                                <option value="{{ $key }}"
                                                    {{ $month == $selectedMonth ? 'selected' : '' }}>
                                                    {{ $month }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="field">
                                        <select name="emirates_expiry_yeare" id="emirates_expiry_year"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                            <option value="">Year</option>
                                            @php
                                                $selectedYear = isset($oldData2->emirates_expiry_year)
                                                    ? $oldData2->emirates_expiry_year
                                                    : '';
                                                $currentYear = date('Y');
                                            @endphp
                                            @for ($year = $currentYear; $year <= $currentYear + 10; $year++)
                                                <option value="{{ $year }}"
                                                    {{ $year == $selectedYear ? 'selected' : '' }}>{{ $year }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div id="eexpiryTime"
                                        style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px"></div>
                                </div>

                            </div>

                        </div>

                        <div class="" id="residence-no">
                        </div>

                        <div class="grid grid-cols-1  border-b gap-4 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[16.8%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Home Country
                                        Address
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[83.2%] w-[60%]  ">
                                    <input type="text" name="homeaddrss" id="homeaddrss" autocomplete="off"
                                        value="{{ $hasOldData2 ? $oldData2->homeaddrss : '' }}"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                    <label for="" class="label-t">Home Country Address</label>
                                    @error('homeaddrss')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                        </div>


                        <div class="grid grid-cols-2 Laptop:grid-cols-4 gap-2 Laptop:gap-12 mb-2 Laptop:mb-8 mt-4">

                            <!-- Nepal  -->

                            <div>
                                <label for="stateProvince" class="text-sm Laptop:text-base">State/Province:</label>
                                <select name="province" id="stateProvince"
                                    class="w-full mt-2 px-2 py-2 rounded-md border text-xs">
                                    <option value="">Select State/Province</option>
                                </select>
                                @error('province')
                                    <p class="erromessage">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="cityDistrict" class="text-sm Laptop:text-base">City/District:</label>
                                <select name="city" id="cityDistrict"
                                    class="w-full  mt-2 px-2 py-2 rounded-md border text-xs {{ $errors->has('city') ? 'error' : '' }}">
                                    <option value="">Select City/District</option>
                                    @error('city')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </select>
                            </div>

                            <div>
                                <label for="policeStation" class="text-sm Laptop:text-base">Police Station:</label>
                                <input type="text" name="policeStation" id="policeStation"
                                    value="{{ $hasOldData2 ? $oldData2->policeStation : '' }}"
                                    class="w-full mt-2 px-2 py-2  text-xs rounded-md border outline-none">
                                @error('policeStation')
                                    <p class="erromessage">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-sm Laptop:text-base">Post Office (Optional)</label>
                                <input type="text" name="zip" id="postCode"
                                    value="{{ $hasOldData2 ? $oldData2->zip : '' }}"
                                    class="w-full mt-2 px-2 py-2  text-xs rounded-md border outline-none">
                                @error('zip')
                                    <p class="erromessage">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>




                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-sm font-medium leading-[29px]">Reference No
                                        (Optional)</h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="text" name="reference" id="reference" autocomplete="off"
                                        value="{{ $hasOldData2 ? $oldData2->reference : '' }}"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('reference') ? 'error' : '' }}"
                                        required>
                                    <label for="" class="label-t">Reference No</label>
                                    @error('reference')
                                        <p class="erromessage">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                        </div>


                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">



                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Passport Front Page
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/passport.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaPassport"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImagePassport"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkPassport"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a></p>
                                    </div>
                                </div>
                                <input type="file" name="applicant_passporte" id="fileInputPassport"
                                    value="{{ old('applicant_passporte') }}" class="hidden" accept="image/*">
                            </div>
                            <div id="applicant_passport" style="display: none"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaPassport = document.getElementById('uploadAreaPassport');
                                    const uploadLinkPassport = document.getElementById('uploadLinkPassport');
                                    const fileInputPassport = document.getElementById('fileInputPassport');
                                    const previewImagePassport = document.getElementById('previewImagePassport');
                                    var serverImageUrl = @json($applicantPassUrl);

                                    // Function to load an image from server folder
                                    function loadServerImage(imageUrl) {
                                        if (imageUrl) {
                                            previewImagePassport.src = imageUrl;
                                            previewImagePassport.setAttribute('data-loaded', true);
                                        }
                                    }

                                    // Event listener for file input change
                                    fileInputPassport.addEventListener('change', function() {
                                        if (fileInputPassport.files.length > 0) {
                                            const file = fileInputPassport.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImagePassport.src = e.target.result;
                                                previewImagePassport.removeAttribute('data-loaded');
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImagePassport.src =
                                                'assets/Images/Vector.png'; // Default image if no file selected
                                            previewImagePassport.removeAttribute('data-loaded');
                                        }
                                    });

                                    // Load image from server folder if available
                                    loadServerImage(serverImageUrl);

                                    // Event listeners for triggering file input
                                    uploadAreaPassport.addEventListener('click', function() {
                                        fileInputPassport.click();
                                    });

                                    uploadLinkPassport.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputPassport.click();
                                    });
                                });
                            </script>




                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Signature Page
                                        (Optional)</h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/signeture.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaSignature"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageSignature"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkSignature"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a></p>
                                    </div>
                                </div>
                                <input type="file" name="specialpagee" id="fileInputSignature"
                                    value="{{ old('specialpagee') }}" class="hidden" accept="image/*">
                            </div>
                            <div id="specialpage" style="display: none"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaSignature = document.getElementById('uploadAreaSignature');
                                    const uploadLinkSignature = document.getElementById('uploadLinkSignature');
                                    const fileInputSignature = document.getElementById('fileInputSignature');
                                    const previewImageSignature = document.getElementById('previewImageSignature');
                                    var serverImageUrlSignature = @json($applicantSpclAgeUrl);

                                    // Function to load an image from server folder
                                    function loadServerImageSignature(imageUrl) {
                                        if (imageUrl) {
                                            previewImageSignature.src = imageUrl;
                                            previewImageSignature.setAttribute('data-loaded', true);
                                        }
                                    }

                                    // Event listener for file input change
                                    fileInputSignature.addEventListener('change', function() {
                                        if (fileInputSignature.files.length > 0) {
                                            const file = fileInputSignature.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageSignature.src = e.target.result;
                                                previewImageSignature.removeAttribute('data-loaded');
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageSignature.src =
                                                'assets/Images/Vector.png'; // Default image if no file selected
                                            previewImageSignature.removeAttribute('data-loaded');
                                        }
                                    });

                                    // Load image from server folder if available
                                    loadServerImageSignature(serverImageUrlSignature);

                                    // Event listeners for triggering file input
                                    uploadAreaSignature.addEventListener('click', function() {
                                        fileInputSignature.click();
                                    });

                                    uploadLinkSignature.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputSignature.click();
                                    });
                                });
                            </script>




                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  gap-2 Laptop:gap-8 py-4 Laptop:py-6">


                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">NID/CNIC Front</h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/idfront.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaNID"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageNID" class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkNID"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a></p>
                                    </div>
                                </div>
                                <input type="file" name="nid_cnic_fronte" value="{{ old('nid_cnic_fronte') }}"
                                    id="fileInputNID" class="hidden" accept="image/*">
                            </div>
                            <div id="nid_cnic_front" style="display: none"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaNID = document.getElementById('uploadAreaNID');
                                    const uploadLinkNID = document.getElementById('uploadLinkNID');
                                    const fileInputNID = document.getElementById('fileInputNID');
                                    const previewImageNID = document.getElementById('previewImageNID');
                                    var serverImageUrlNID = @json($applicantcncfUrl);

                                    // Function to load an image from server folder
                                    function loadServerImageNID(imageUrl) {
                                        if (imageUrl) {
                                            previewImageNID.src = imageUrl;
                                            previewImageNID.setAttribute('data-loaded', true);
                                        }
                                    }

                                    // Event listener for file input change
                                    fileInputNID.addEventListener('change', function() {
                                        if (fileInputNID.files.length > 0) {
                                            const file = fileInputNID.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageNID.src = e.target.result;
                                                previewImageNID.removeAttribute('data-loaded');
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageNID.src = 'assets/Images/Vector.png'; // Default image if no file selected
                                            previewImageNID.removeAttribute('data-loaded');
                                        }
                                    });

                                    // Load image from server folder if available
                                    loadServerImageNID(serverImageUrlNID);

                                    // Event listeners for triggering file input
                                    uploadAreaNID.addEventListener('click', function() {
                                        fileInputNID.click();
                                    });

                                    uploadLinkNID.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputNID.click();
                                    });
                                });
                            </script>




                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">NID/CNIC Back</h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/idback.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaNIDBack"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageNIDBack" class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkNIDBack"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a></p>
                                    </div>
                                </div>
                                <input type="file" name="nid_cnic_backe" id="fileInputNIDBack"
                                    value="{{ old('nid_cnic_backe') }}" class="hidden" accept="image/*">
                            </div>
                            <div id="nid_cnic_back" style="display: none"></div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaNIDBack = document.getElementById('uploadAreaNIDBack');
                                    const uploadLinkNIDBack = document.getElementById('uploadLinkNIDBack');
                                    const fileInputNIDBack = document.getElementById('fileInputNIDBack');
                                    const previewImageNIDBack = document.getElementById('previewImageNIDBack');
                                    var serverImageUrlNIDBack = @json($applicantcncbUrl);

                                    // Function to load an image from server folder
                                    function loadServerImageNIDBack(imageUrl) {
                                        if (imageUrl) {
                                            previewImageNIDBack.src = imageUrl;
                                            previewImageNIDBack.setAttribute('data-loaded', true);
                                        }
                                    }

                                    // Event listener for file input change
                                    fileInputNIDBack.addEventListener('change', function() {
                                        if (fileInputNIDBack.files.length > 0) {
                                            const file = fileInputNIDBack.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageNIDBack.src = e.target.result;
                                                previewImageNIDBack.removeAttribute('data-loaded');
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageNIDBack.src =
                                                'assets/Images/Vector.png'; // Default image if no file selected
                                            previewImageNIDBack.removeAttribute('data-loaded');
                                        }
                                    });

                                    // Load image from server folder if available
                                    loadServerImageNIDBack(serverImageUrlNIDBack);

                                    // Event listeners for triggering file input
                                    uploadAreaNIDBack.addEventListener('click', function() {
                                        fileInputNIDBack.click();
                                    });

                                    uploadLinkNIDBack.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputNIDBack.click();
                                    });
                                });
                            </script>



                        </div>

                        <div class="button text-right Laptop:mt-10 mt-4 pb-4 ">
                            <button type="button" id="previous2"
                                class="previous Laptop:px-10 Laptop:py-3 px-4 py-2 text-xs Laptop:text-base bg-Black-c text-White-c rounded-2xl leading-5 mr-4">
                                Previous
                            </button>

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f2Button">
                                <span class="btn-text">Save & Continue</span>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 3 -->
                    <fieldset id="fieldset3" style="{{ $currentStep == 3 ? 'display: block' : 'display: none' }}">

                        <div class="grid grid-cols-1  border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[17%] w-[30%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Submission ID</h2>
                                </div>
                                <div class="field Laptop:w-[83%] w-[70%]">
                                    @if (Session::has('submissionID'))
                                        <p class="text-xs Tablet:text-sm">{{ $submissionID }}</p>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">
                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Driving License
                                        (Home Country) <span class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="text" name="appli_dri_number" id="appli_dri_number"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                        value="{{ $hasOldData3 ? $oldData3->appli_dri_number : '' }}" required>
                                    <label for="" class="label-t">Driving License</label>
                                </div>
                            </div>




                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Date of Expiry
                                        <span class="text-Indicates">*</span>
                                    </h2>
                                </div>
                                <div class="Laptop:w-[65%] w-[60%] grid grid-cols-3 gap-1 Tablet:gap-2 border p-2 Tablet:p-2.5 rounded dobdate relative"
                                    style="padding-bottom: 2rem">

                                    <div class="field">
                                        <select name="drving_lic_expiry_daye" id="drving_lic_expiry_day"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Day</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}"
                                                    {{ $hasOldData3 && $oldData3->drving_lic_expiry_day == $i ? 'selected' : '' }}>
                                                    {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="drving_lic_expiry_monthe" id="drving_lic_expiry_month"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Month</option>
                                            @foreach ([1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'] as $monthNumber => $monthName)
                                                <option value="{{ $monthNumber }}"
                                                    {{ $hasOldData3 && $oldData3->drving_lic_expiry_month == $monthNumber ? 'selected' : '' }}>
                                                    {{ $monthName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field">
                                        <select name="drving_lic_expiry_yeare" id="drving_lic_expiry_year"
                                            class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none" required>
                                            <option value="">Year</option>
                                            @for ($year = 2000; $year <= 2030; $year++)
                                                <option value="{{ $year }}"
                                                    {{ $hasOldData3 && $oldData3->drving_lic_expiry_year == $year ? 'selected' : '' }}>
                                                    {{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div id="ddexpiryTime"
                                        style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px"></div>
                                </div>



                            </div>


                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Do you have UAE
                                        License <span class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <select name="have_uae_licence" id=""
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none " required>
                                        <option
                                            {{ $hasOldData3 && $oldData3->have_uae_licence == 'Yes' ? 'selected' : '' }}
                                            value="Yes">Yes</option>
                                        <option
                                            {{ $hasOldData3 && $oldData3->have_uae_licence == 'No' ? 'selected' : '' }}
                                            value="No">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-sm font-medium leading-[29px]">UAE Resident Visa No
                                        (optional)</h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="text" name="UAE_Resident_Visa_No" id="UAE_Resident_Visa_No"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                        value="{{ $hasOldData3 ? $oldData3->UAE_Resident_Visa_No : '' }}" required>
                                    <label for="" class="label-t">UAE Resident Visa No</label>
                                </div>
                            </div>


                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b gap-2 Laptop:gap-8 py-4 Laptop:py-6">


                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-sm font-medium leading-[29px]">UAE License No <span
                                            class="text-Indicates">*</span></h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="tel" name="UAE_License_No" id="UAE_License_No"
                                        autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                        value="{{ $hasOldData3 ? $oldData3->UAE_License_No : '' }}" required>
                                    <label for="" class="label-t">UAE License No</label>
                                </div>
                            </div>

                            <div class=" flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-sm font-medium leading-[29px]">SIM No (Optional)
                                    </h2>
                                </div>
                                <div class="field Laptop:w-[65%] w-[60%]">
                                    <input type="tel" name="SIM_No" id="SIM_No" autocomplete="off"
                                        class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                        value="{{ $hasOldData3 ? $oldData3->SIM_No : '' }}" required>
                                    <label for="" class="label-t">SIM No</label>
                                </div>
                            </div>


                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 border-b  gap-2 Laptop:gap-8 py-4 Laptop:py-6">




                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Driving License
                                        Front<span class="text-Indicates">*</span></h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/driving.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaLicenseFront"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageLicenseFront"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkLicenseFront"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a>
                                        </p>
                                    </div>
                                </div>
                                <input type="file" name="appli_dri_lisence_frontparte" id="fileInputLicenseFront"
                                    value="{{ old('appli_dri_lisence_frontparte') }}" class="hidden"
                                    accept="image/*">
                            </div>

                            <div id="frontImag" style="display: none"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaLicenseFront = document.getElementById('uploadAreaLicenseFront');
                                    const uploadLinkLicenseFront = document.getElementById('uploadLinkLicenseFront');
                                    const fileInputLicenseFront = document.getElementById('fileInputLicenseFront');
                                    const previewImageLicenseFront = document.getElementById('previewImageLicenseFront');

                                    uploadAreaLicenseFront.addEventListener('click', function() {
                                        fileInputLicenseFront.click();
                                    });

                                    uploadLinkLicenseFront.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputLicenseFront.click();
                                    });

                                    fileInputLicenseFront.addEventListener('change', function() {
                                        if (fileInputLicenseFront.files.length > 0) {
                                            const file = fileInputLicenseFront.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageLicenseFront.src = e.target.result;
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageLicenseFront.src = 'assets/Images/Vector.png';
                                        }
                                    });
                                });
                            </script>



                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Driving License
                                        Back<span class="text-Indicates">*</span></h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/driving.svg') }}" alt="">
                                </div>
                                <div id="uploadAreaLicenseBack"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageLicenseBack"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkLicenseBack"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a>
                                        </p>
                                    </div>
                                </div>
                                <input type="file" name="appli_dri_lisence_backparte"
                                    value="{{ old('appli_dri_lisence_backparte') }}" id="fileInputLicenseBack"
                                    class="hidden" accept="image/*">
                            </div>
                            <div id="backImag" style="display: none"></div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaLicenseBack = document.getElementById('uploadAreaLicenseBack');
                                    const uploadLinkLicenseBack = document.getElementById('uploadLinkLicenseBack');
                                    const fileInputLicenseBack = document.getElementById('fileInputLicenseBack');
                                    const previewImageLicenseBack = document.getElementById('previewImageLicenseBack');

                                    uploadAreaLicenseBack.addEventListener('click', function() {
                                        fileInputLicenseBack.click();
                                    });

                                    uploadLinkLicenseBack.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputLicenseBack.click();
                                    });

                                    fileInputLicenseBack.addEventListener('change', function() {
                                        if (fileInputLicenseBack.files.length > 0) {
                                            const file = fileInputLicenseBack.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageLicenseBack.src = e.target.result;
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageLicenseBack.src = 'assets/Images/Vector.png';
                                        }
                                    });
                                });
                            </script>




                        </div>

                        <div
                            class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  gap-2 Laptop:gap-8 py-4 Laptop:py-6">


                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">UAE DL Front
                                        (Optional)</h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/license.jpg') }}" alt="">
                                </div>
                                <div id="uploadAreaUAEDLFront"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageUAEDLFront"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkUAEDLFront"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a>
                                        </p>
                                    </div>
                                </div>
                                <input type="file" name="UAE_DL_Fronte" id="fileInputUAEDLFront" class="hidden"
                                    accept="image/*">
                            </div>
                            <div id="UAEfrontImag" style="display: none"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaUAEDLFront = document.getElementById('uploadAreaUAEDLFront');
                                    const uploadLinkUAEDLFront = document.getElementById('uploadLinkUAEDLFront');
                                    const fileInputUAEDLFront = document.getElementById('fileInputUAEDLFront');
                                    const previewImageUAEDLFront = document.getElementById('previewImageUAEDLFront');

                                    uploadAreaUAEDLFront.addEventListener('click', function() {
                                        fileInputUAEDLFront.click();
                                    });

                                    uploadLinkUAEDLFront.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputUAEDLFront.click();
                                    });

                                    fileInputUAEDLFront.addEventListener('change', function() {
                                        if (fileInputUAEDLFront.files.length > 0) {
                                            const file = fileInputUAEDLFront.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageUAEDLFront.src = e.target.result;
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageUAEDLFront.src = 'assets/Images/Vector.png';
                                        }
                                    });
                                });
                            </script>




                            <div class="flex items-center gap-2">
                                <div class="Laptop:w-[35%] w-[40%]">
                                    <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">UAE DL Back
                                        (Optional)</h2>
                                    <img class="mt-2 w-10 Laptop:w-14"
                                        src="{{ asset('frontend/imagesupdate/license.jpg') }}" alt="">
                                </div>
                                <div id="uploadAreaUAEDLBack"
                                    class="field Laptop:w-[65%] w-[60%] border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                    <div class="text-center">
                                        <img id="previewImageUAEDLBack"
                                            class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                            src="{{ asset('frontend/imagesupdate/Vector.png') }}" alt="">
                                        <p class="text-xs Laptop:text-base font-medium leading-6">Drop File here <br>
                                            or <a href="#" id="uploadLinkUAEDLBack"
                                                class="text-Primary-c underline underline-offset-2">Upload File</a>
                                        </p>
                                    </div>
                                </div>
                                <input type="file" name="UAE_DL_Backe" id="fileInputUAEDLBack" class="hidden"
                                    accept="image/*">
                            </div>
                            <div id="UAEbackImag" style="display: none"></div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const uploadAreaUAEDLBack = document.getElementById('uploadAreaUAEDLBack');
                                    const uploadLinkUAEDLBack = document.getElementById('uploadLinkUAEDLBack');
                                    const fileInputUAEDLBack = document.getElementById('fileInputUAEDLBack');
                                    const previewImageUAEDLBack = document.getElementById('previewImageUAEDLBack');

                                    uploadAreaUAEDLBack.addEventListener('click', function() {
                                        fileInputUAEDLBack.click();
                                    });

                                    uploadLinkUAEDLBack.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        fileInputUAEDLBack.click();
                                    });

                                    fileInputUAEDLBack.addEventListener('change', function() {
                                        if (fileInputUAEDLBack.files.length > 0) {
                                            const file = fileInputUAEDLBack.files[0];
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImageUAEDLBack.src = e.target.result;
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImageUAEDLBack.src = 'assets/Images/Vector.png';
                                        }
                                    });
                                });
                            </script>



                        </div>

                        <div class="box" style="margin-top: 5px;">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- ----  -->

                        <div class="button text-right Laptop:mt-10 mt-4 pb-4 ">
                            <button type="button" id="previous3"
                                class="previous Laptop:px-10 Laptop:py-3 px-4 py-2 text-xs Laptop:text-base bg-Black-c text-White-c rounded-2xl leading-5 mr-4">
                                Previous
                            </button>

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f3Button">
                                <span class="btn-text">Save & Confirm</span>
                            </button>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div>
    </div>
</body>

<!-- Load intl-tel-input library -->
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

<!-- Load intlTelInputUtils utility script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"></script>

<script>
    // Function to initialize intl-tel-input
    function initializeIntlTelInput(elementId, localStorageKey) {
        var inputElement = document.querySelector("#" + elementId);
        var intlTel = window.intlTelInput(inputElement, {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        // Retrieve previously selected country code from localStorage
        var prevSelectedCountry = localStorage.getItem(localStorageKey);
        if (prevSelectedCountry) {
            intlTel.setCountry(prevSelectedCountry);
        }

        // Handle change event for the input
        function handleChange() {
            var fullNumber = intlTel.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='" + elementId + "']").val(fullNumber);

            // Store current selected country in localStorage
            var selectedCountry = intlTel.getSelectedCountryData().iso2;
            localStorage.setItem(localStorageKey, selectedCountry);
        }

        // Execute handleChange() once immediately on page load
        handleChange();

        // Bind change event listener to inputElement
        inputElement.addEventListener('change', handleChange);
    }

    // Initialize intl-tel-input for contact_number and whatsapp_number
    document.addEventListener('DOMContentLoaded', function() {
        initializeIntlTelInput("contact_number", 'prevSelectedCountryPhone');
        initializeIntlTelInput("whatsapp_number", 'prevSelectedCountryWhatsapp');
    });
</script>




<!-- UAE Residence yes or now -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElement = document.querySelector('.YesNo select');
        const residenceYes = document.getElementById('residence-yes');
        const residenceNo = document.getElementById('residence-no');

        function toggleResidenceSections() {
            if (selectElement.value === 'Yes') {
                residenceYes.classList.remove('hidden');
                residenceNo.classList.add('hidden');
            } else {
                residenceYes.classList.add('hidden');
                residenceNo.classList.remove('hidden');
            }
        }

        selectElement.addEventListener('change', toggleResidenceSections);

        // Initial state
        toggleResidenceSections();
    });
</script>

<!-- UAE Residence ID Number formate-->
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

<!-- For natiliaty, city state show hide  -->
<script>
    @php
        $hasOldState = $hasOldData2 && isset($oldData2) && isset($oldData2->province) ? true : false;
        $hasOldCity = $hasOldData2 && isset($oldData2) && isset($oldData2->city) ? true : false;
        $oldProvince = isset($oldData2) && isset($oldData2->province) ? $oldData2->province : '';
        $oldCity = isset($oldData2) && isset($oldData2->city) ? $oldData2->city : '';
    @endphp
    document.addEventListener('DOMContentLoaded', function() {
        const nationalitySelect = document.getElementById('nationality');
        const stateProvinceSelect = document.getElementById('stateProvince');
        const cityDistrictSelect = document.getElementById('cityDistrict');
        const policeStationSelect = document.getElementById('policeStation');
        const postCodeSelect = document.getElementById('postCode');
        const hasOldState = @json($hasOldState);
        const oldState = @json($oldProvince);
        const hasOldCity = @json($hasOldCity);
        const oldCity = @json($oldCity);

        const data = {
            "Pakistan": {
                "Azad Jammu and Kashmir": {
                    "cities": {
                        "Muzaffarabad": {},
                        "Mirpur": {},
                        "Kotli": {},
                        "Rawalakot": {},
                        "Bagh": {}
                    }
                },
                "Balochistan": {
                    "cities": {
                        "Quetta": {},
                        "Khuzdar": {},
                        "Turbat": {},
                        "Sibi": {},
                        "Gwadar": {},
                        "Chaman": {},
                        "Zhob": {},
                        "Loralai": {},
                        "Dera Murad Jamali": {},
                        "Hub": {},
                        "Kalat": {},
                        "Pishin": {},
                        "Kharan": {},
                        "Ziarat": {},
                        "Mastung": {},
                        "Chaghi": {},
                        "Awaran": {},
                        "Barkhan": {},
                        "Bolan": {},
                        "Dera Bugti": {},
                        "Jafarabad": {},
                        "Jhal Magsi": {},
                        "Kachhi": {},
                        "Killa Abdullah": {},
                        "Killa Saifullah": {},
                        "Kohlu": {},
                        "Lasbela": {},
                        "Lehri": {},
                        "Musakhel": {},
                        "Nasirabad": {},
                        "Nushki": {},
                        "Panjgur": {},
                        "Sherani": {},
                        "Sohbatpur": {},
                        "Washuk": {},
                        "Kech": {},
                        "Harnai": {}
                    }
                },
                "Gilgit-Baltistan": {
                    "cities": {
                        "Gilgit": {},
                        "Skardu": {},
                        "Diamer": {},
                        "Ghanche": {},
                        "Ghizer": {},
                        "Hunza": {},
                        "Nagar": {},
                        "Shigar": {},
                        "Kharmang": {}
                    }
                },
                "Islamabad Capital Territory": {
                    "cities": {
                        "Islamabad": {}
                    }
                },
                "Khyber Pakhtunkhwa": {
                    "cities": {
                        "Peshawar": {},
                        "Mardan": {},
                        "Chitral": {},
                        "Batkhela": {},
                        "Saidu Sharif": {},
                        "Mansehra": {},
                        "Haripur": {},
                        "Abbottabad": {},
                        "Swabi": {},
                        "Nowshera": {},
                        "Charsadda": {},
                        "Kohat": {},
                        "Karak": {},
                        "Bannu": {},
                        "Dera Ismail Khan": {},
                        "Tank": {},
                        "Hangu": {},
                        "Kurram": {},
                        "Lakki Marwat": {},
                        "Malakand": {},
                        "Torghar": {},
                        "Bajaur": {},
                        "Mohmand": {},
                        "Orakzai": {},
                        "Khyber": {},
                        "South Waziristan": {},
                        "North Waziristan": {}
                    }
                },
                "Punjab": {
                    "cities": {
                        "Lahore": {},
                        "Faisalabad": {},
                        "Bhakkar": {},
                        "Layyah": {},
                        "Dera Ghazi Khan": {},
                        "Muzaffargarh": {},
                        "Jhang": {},
                        "Toba Tek Singh": {},
                        "Qila Sheikhupura": {},
                        "Sargodha": {},
                        "Khushab": {},
                        "Mianwali": {},
                        "Attock": {},
                        "Rawalpindi": {},
                        "Wah Cantt": {},
                        "Murree": {},
                        "Gujar Khan": {},
                        "Talagang": {},
                        "Chakwal": {},
                        "Jhelum": {},
                        "Gujrat": {},
                        "Mandi Bahauddin": {},
                        "Sialkot": {},
                        "Narowal": {},
                        "Kasur": {},
                        "Okara": {},
                        "Sahiwal": {},
                        "Multan": {},
                        "Bahawalpur": {},
                        "Vehari": {},
                        "Bahawalnagar": {},
                        "Rahim Yar Khan": {},
                        "Chiniot": {},
                        "Pakpattan": {},
                        "Hafizabad": {},
                        "Nankana Sahib": {}
                    }
                },
                "Sindh": {
                    "cities": {
                        "Karachi": {},
                        "Hyderabad": {},
                        "Sukkur": {},
                        "Larkana": {},
                        "Mirpur Khas": {},
                        "Nawabshah": {},
                        "Jacobabad": {},
                        "Khairpur": {},
                        "Ghotki": {},
                        "Shikarpur": {},
                        "Dadu": {},
                        "Umerkot": {},
                        "Tharparkar": {},
                        "Kashmore": {},
                        "Qambar Shahdadkot": {},
                        "Matiari": {},
                        "Tando Allahyar": {},
                        "Tando Muhammad Khan": {},
                        "Jamshoro": {},
                        "Sujawal": {},
                        "Badin": {}
                    }
                }
            },
            "Nepal": {
                "Biratnagar": {
                    "cities": {
                        "Bhojpur": {},
                        "Dhankuta": {},
                        "Ilam": {},
                        "Jhapa": {},
                        "Khotang": {},
                        "Morang": {},
                        "Okhaldhunga": {},
                        "Panchthar": {},
                        "Sankhuwasabha": {},
                        "Solukhumbu": {},
                        "Sunsari": {},
                        "Taplejung": {},
                        "Terhathum": {},
                        "Udayapur": {}
                    }
                },
                "Janakpur": {
                    "cities": {
                        "Saptari": {},
                        "Siraha": {},
                        "Dhanusa": {},
                        "Mahottari": {},
                        "Sarlahi": {},
                        "Bara": {},
                        "Rautahat": {}
                    }
                },
                "Hetauda": {
                    "cities": {
                        "Sindhuli": {},
                        "Ramechhap": {},
                        "Dolakha": {},
                        "Bhaktapur": {},
                        "Dhading": {},
                        "Kathmandu": {},
                        "Kavrepalanchok": {},
                        "Lalitpur": {},
                        "Nuwakot": {},
                        "Rasuwa": {},
                        "Sindhupalchok": {},
                        "Chitwan": {},
                        "Makwanpur": {}
                    }
                },
                "Pokhara": {
                    "cities": {
                        "Baglung": {},
                        "Gorkha": {},
                        "Kaski": {},
                        "Lamjung": {},
                        "Manang": {},
                        "Mustang": {},
                        "Myagdi": {},
                        "Nawalpur": {},
                        "Parbat": {},
                        "Syangja": {},
                        "Tanahun": {}
                    }
                },
                "Butwal": {
                    "cities": {
                        "Kapilvastu": {},
                        "Parasi": {},
                        "Rupandehi": {},
                        "Arghakhanchi": {},
                        "Gulmi": {},
                        "Palpa": {},
                        "Dang": {},
                        "Pyuthan": {},
                        "Rolpa": {},
                        "Eastern Rukum": {},
                        "Banke": {},
                        "Bardiya": {}
                    }
                },
                "Birendranagar": {
                    "cities": {
                        "Western Rukum": {},
                        "Salyan": {},
                        "Dolpa": {},
                        "Humla": {},
                        "Jumla": {},
                        "Kalikot": {},
                        "Mugu": {},
                        "Surkhet": {},
                        "Dailekh": {},
                        "Jajarkot": {}
                    }
                },
                "Godawari": {
                    "cities": {
                        "Kailali": {},
                        "Achham": {},
                        "Doti": {},
                        "Bajhang": {},
                        "Bajura": {},
                        "Kanchanpur": {},
                        "Dadeldhura": {},
                        "Baitadi": {},
                        "Darchula": {}
                    }
                }
            },
            "India": {
                "Andhra Pradesh": {
                    "districts": {
                        "Anantapur": {},
                        "Chittoor": {},
                        "East Godavari": {},
                        "Guntur": {},
                        "Krishna": {},
                        "Kurnool": {},
                        "Nellore": {},
                        "Prakasam": {},
                        "Srikakulam": {},
                        "Visakhapatnam": {},
                        "Vizianagaram": {},
                        "West Godavari": {},
                        "YSR Kadapa": {}
                    }
                },
                "Arunachal Pradesh": {
                    "districts": {
                        "Anjaw": {},
                        "Changlang": {},
                        "Dibang Valley": {},
                        "East Kameng": {},
                        "East Siang": {},
                        "Kamle": {},
                        "Kra Daadi": {},
                        "Kurung Kumey": {},
                        "Lepa Rada": {},
                        "Lohit": {},
                        "Longding": {},
                        "Lower Dibang Valley": {},
                        "Lower Siang": {},
                        "Lower Subansiri": {},
                        "Namsai": {},
                        "Pakke Kessang": {},
                        "Papum Pare": {},
                        "Shi Yomi": {},
                        "Siang": {},
                        "Tawang": {},
                        "Tirap": {},
                        "Upper Siang": {},
                        "Upper Subansiri": {},
                        "West Kameng": {},
                        "West Siang": {}
                    }
                },
                "Assam": {
                    "districts": {
                        "Baksa": {},
                        "Barpeta": {},
                        "Biswanath": {},
                        "Bongaigaon": {},
                        "Cachar": {},
                        "Charaideo": {},
                        "Chirang": {},
                        "Darrang": {},
                        "Dhemaji": {},
                        "Dhubri": {},
                        "Dibrugarh": {},
                        "Goalpara": {},
                        "Golaghat": {},
                        "Hailakandi": {},
                        "Hojai": {},
                        "Jorhat": {},
                        "Kamrup": {},
                        "Kamrup Metropolitan": {},
                        "Karbi Anglong": {},
                        "Karimganj": {},
                        "Kokrajhar": {},
                        "Lakhimpur": {},
                        "Majuli": {},
                        "Morigaon": {},
                        "Nagaon": {},
                        "Nalbari": {},
                        "Sivasagar": {},
                        "Sonitpur": {},
                        "South Salmara-Mankachar": {},
                        "Tinsukia": {},
                        "Udalguri": {},
                        "West Karbi Anglong": {}
                    }
                },
                "Bihar": {
                    "districts": {
                        "Araria": {},
                        "Arwal": {},
                        "Aurangabad": {},
                        "Banka": {},
                        "Begusarai": {},
                        "Bhagalpur": {},
                        "Bhojpur": {},
                        "Buxar": {},
                        "Darbhanga": {},
                        "East Champaran": {},
                        "Gaya": {},
                        "Gopalganj": {},
                        "Jamui": {},
                        "Jehanabad": {},
                        "Kaimur": {},
                        "Katihar": {},
                        "Khagaria": {},
                        "Kishanganj": {},
                        "Lakhisarai": {},
                        "Madhepura": {},
                        "Madhubani": {},
                        "Munger": {},
                        "Muzaffarpur": {},
                        "Nalanda": {},
                        "Nawada": {},
                        "Patna": {},
                        "Purnia": {},
                        "Rohtas": {},
                        "Saharsa": {},
                        "Samastipur": {},
                        "Saran": {},
                        "Sheikhpura": {},
                        "Sheohar": {},
                        "Sitamarhi": {},
                        "Siwan": {},
                        "Supaul": {},
                        "Vaishali": {},
                        "West Champaran": {}
                    }
                },
                "Chhattisgarh": {
                    "districts": {
                        "Balod": {},
                        "Baloda Bazar": {},
                        "Balrampur": {},
                        "Bastar": {},
                        "Bemetara": {},
                        "Bijapur": {},
                        "Bilaspur": {},
                        "Dantewada": {},
                        "Dhamtari": {},
                        "Durg": {},
                        "Gariaband": {},
                        "Gaurela-Pendra-Marwahi": {},
                        "Janjgir-Champa": {},
                        "Jashpur": {},
                        "Kabirdham": {},
                        "Kanker": {},
                        "Kondagaon": {},
                        "Korba": {},
                        "Koriya": {},
                        "Mahasamund": {},
                        "Mungeli": {},
                        "Narayanpur": {},
                        "Raigarh": {},
                        "Raipur": {},
                        "Rajnandgaon": {},
                        "Sukma": {},
                        "Surajpur": {},
                        "Surguja": {}
                    }
                },
                "Goa": {
                    "districts": {
                        "North Goa": {},
                        "South Goa": {}
                    }
                },
                "Gujarat": {
                    "districts": {
                        "Ahmedabad": {},
                        "Amreli": {},
                        "Anand": {},
                        "Aravalli": {},
                        "Banaskantha": {},
                        "Bharuch": {},
                        "Bhavnagar": {},
                        "Botad": {},
                        "Chhota Udaipur": {},
                        "Dahod": {},
                        "Dang": {},
                        "Devbhoomi Dwarka": {},
                        "Gandhinagar": {},
                        "Gir Somnath": {},
                        "Jamnagar": {},
                        "Junagadh": {},
                        "Kheda": {},
                        "Kutch": {},
                        "Mahisagar": {},
                        "Mehsana": {},
                        "Morbi": {},
                        "Narmada": {},
                        "Navsari": {},
                        "Panchmahal": {},
                        "Patan": {},
                        "Porbandar": {},
                        "Rajkot": {},
                        "Sabarkantha": {},
                        "Surat": {},
                        "Surendranagar": {},
                        "Tapi": {},
                        "Vadodara": {},
                        "Valsad": {}
                    }
                },
                "Haryana": {
                    "districts": {
                        "Ambala": {},
                        "Bhiwani": {},
                        "Charkhi Dadri": {},
                        "Faridabad": {},
                        "Fatehabad": {},
                        "Gurugram": {},
                        "Hisar": {},
                        "Jhajjar": {},
                        "Jind": {},
                        "Kaithal": {},
                        "Karnal": {},
                        "Kurukshetra": {},
                        "Mahendragarh": {},
                        "Nuh": {},
                        "Palwal": {},
                        "Panchkula": {},
                        "Panipat": {},
                        "Rewari": {},
                        "Rohtak": {},
                        "Sirsa": {},
                        "Sonipat": {},
                        "Yamunanagar": {}
                    }
                },
                "Himachal Pradesh": {
                    "districts": {
                        "Bilaspur": {},
                        "Chamba": {},
                        "Hamirpur": {},
                        "Kangra": {},
                        "Kinnaur": {},
                        "Kullu": {},
                        "Lahaul and Spiti": {},
                        "Mandi": {},
                        "Shimla": {},
                        "Sirmaur": {},
                        "Solan": {},
                        "Una": {}
                    }
                },
                "Jharkhand": {
                    "districts": {
                        "Bokaro": {},
                        "Chatra": {},
                        "Deoghar": {},
                        "Dhanbad": {},
                        "Dumka": {},
                        "East Singhbhum": {},
                        "Garhwa": {},
                        "Giridih": {},
                        "Godda": {},
                        "Gumla": {},
                        "Hazaribagh": {},
                        "Jamtara": {},
                        "Khunti": {},
                        "Koderma": {},
                        "Latehar": {},
                        "Lohardaga": {},
                        "Pakur": {},
                        "Palamu": {},
                        "Ramgarh": {},
                        "Ranchi": {},
                        "Sahebganj": {},
                        "Seraikela Kharsawan": {},
                        "Simdega": {},
                        "West Singhbhum": {}
                    }
                },
                "Karnataka": {
                    "districts": {
                        "Bagalkot": {},
                        "Ballari": {},
                        "Belagavi": {},
                        "Bengaluru Rural": {},
                        "Bengaluru Urban": {},
                        "Bidar": {},
                        "Chamarajanagar": {},
                        "Chikballapur": {},
                        "Chikkamagaluru": {},
                        "Chitradurga": {},
                        "Dakshina Kannada": {},
                        "Davanagere": {},
                        "Dharwad": {},
                        "Gadag": {},
                        "Hassan": {},
                        "Haveri": {},
                        "Kalaburagi": {},
                        "Kodagu": {},
                        "Kolar": {},
                        "Koppal": {},
                        "Mandya": {},
                        "Mysuru": {},
                        "Raichur": {},
                        "Ramanagara": {},
                        "Shivamogga": {},
                        "Tumakuru": {},
                        "Udupi": {},
                        "Uttara Kannada": {},
                        "Vijayapura": {},
                        "Yadgir": {}
                    }
                },
                "Kerala": {
                    "districts": {
                        "Alappuzha": {},
                        "Ernakulam": {},
                        "Idukki": {},
                        "Kannur": {},
                        "Kasaragod": {},
                        "Kollam": {},
                        "Kottayam": {},
                        "Kozhikode": {},
                        "Malappuram": {},
                        "Palakkad": {},
                        "Pathanamthitta": {},
                        "Thiruvananthapuram": {},
                        "Thrissur": {},
                        "Wayanad": {}
                    }
                },
                "Madhya Pradesh": {
                    "districts": {
                        "Agar Malwa": {},
                        "Alirajpur": {},
                        "Anuppur": {},
                        "Ashoknagar": {},
                        "Balaghat": {},
                        "Barwani": {},
                        "Betul": {},
                        "Bhind": {},
                        "Bhopal": {},
                        "Burhanpur": {},
                        "Chhatarpur": {},
                        "Chhindwara": {},
                        "Damoh": {},
                        "Datia": {},
                        "Dewas": {},
                        "Dhar": {},
                        "Dindori": {},
                        "Guna": {},
                        "Gwalior": {},
                        "Harda": {},
                        "Hoshangabad": {},
                        "Indore": {},
                        "Jabalpur": {},
                        "Jhabua": {},
                        "Katni": {},
                        "Khandwa": {},
                        "Khargone": {},
                        "Mandla": {},
                        "Mandsaur": {},
                        "Morena": {},
                        "Narsinghpur": {},
                        "Neemuch": {},
                        "Niwari": {},
                        "Panna": {},
                        "Raisen": {},
                        "Rajgarh": {},
                        "Ratlam": {},
                        "Rewa": {},
                        "Sagar": {},
                        "Satna": {},
                        "Sehore": {},
                        "Seoni": {},
                        "Shahdol": {},
                        "Shajapur": {},
                        "Sheopur": {},
                        "Shivpuri": {},
                        "Sidhi": {},
                        "Singrauli": {},
                        "Tikamgarh": {},
                        "Ujjain": {},
                        "Umaria": {},
                        "Vidisha": {}
                    }
                },
                "Maharashtra": {
                    "districts": {
                        "Ahmednagar": {},
                        "Akola": {},
                        "Amravati": {},
                        "Aurangabad": {},
                        "Beed": {},
                        "Bhandara": {},
                        "Buldhana": {},
                        "Chandrapur": {},
                        "Dhule": {},
                        "Gadchiroli": {},
                        "Gondia": {},
                        "Hingoli": {},
                        "Jalgaon": {},
                        "Jalna": {},
                        "Kolhapur": {},
                        "Latur": {},
                        "Mumbai City": {},
                        "Mumbai Suburban": {},
                        "Nagpur": {},
                        "Nanded": {},
                        "Nandurbar": {},
                        "Nashik": {},
                        "Osmanabad": {},
                        "Palghar": {},
                        "Parbhani": {},
                        "Pune": {},
                        "Raigad": {},
                        "Ratnagiri": {},
                        "Sangli": {},
                        "Satara": {},
                        "Sindhudurg": {},
                        "Solapur": {},
                        "Thane": {},
                        "Wardha": {},
                        "Washim": {},
                        "Yavatmal": {}
                    }
                },
                "Manipur": {
                    "districts": {
                        "Bishnupur": {},
                        "Chandel": {},
                        "Churachandpur": {},
                        "Imphal East": {},
                        "Imphal West": {},
                        "Jiribam": {},
                        "Kakching": {},
                        "Kamjong": {},
                        "Kangpokpi": {},
                        "Noney": {},
                        "Pherzawl": {},
                        "Senapati": {},
                        "Tamenglong": {},
                        "Tengnoupal": {},
                        "Thoubal": {},
                        "Ukhrul": {}
                    }
                },
                "Meghalaya": {
                    "districts": {
                        "East Garo Hills": {},
                        "East Jaintia Hills": {},
                        "East Khasi Hills": {},
                        "North Garo Hills": {},
                        "Ri Bhoi": {},
                        "South Garo Hills": {},
                        "South West Garo Hills": {},
                        "South West Khasi Hills": {},
                        "West Garo Hills": {},
                        "West Jaintia Hills": {},
                        "West Khasi Hills": {}
                    }
                },
                "Mizoram": {
                    "districts": {
                        "Aizawl": {},
                        "Champhai": {},
                        "Hnahthial": {},
                        "Khawzawl": {},
                        "Kolasib": {},
                        "Lawngtlai": {},
                        "Lunglei": {},
                        "Mamit": {},
                        "Saiha": {},
                        "Saitual": {},
                        "Serchhip": {}
                    }
                },
                "Nagaland": {
                    "districts": {
                        "Dimapur": {},
                        "Kiphire": {},
                        "Kohima": {},
                        "Longleng": {},
                        "Mokokchung": {},
                        "Mon": {},
                        "Noklak": {},
                        "Peren": {},
                        "Phek": {},
                        "Tuensang": {},
                        "Wokha": {},
                        "Zunheboto": {}
                    }
                },
                "Odisha": {
                    "districts": {
                        "Angul": {},
                        "Balangir": {},
                        "Balasore": {},
                        "Bargarh": {},
                        "Bhadrak": {},
                        "Boudh": {},
                        "Cuttack": {},
                        "Debagarh": {},
                        "Dhenkanal": {},
                        "Gajapati": {},
                        "Ganjam": {},
                        "Jagatsinghpur": {},
                        "Jajpur": {},
                        "Jharsuguda": {},
                        "Kalahandi": {},
                        "Kandhamal": {},
                        "Kendrapara": {},
                        "Kendujhar": {},
                        "Khordha": {},
                        "Koraput": {},
                        "Malkangiri": {},
                        "Mayurbhanj": {},
                        "Nabarangpur": {},
                        "Nayagarh": {},
                        "Nuapada": {},
                        "Puri": {},
                        "Rayagada": {},
                        "Sambalpur": {},
                        "Subarnapur": {},
                        "Sundergarh": {}
                    }
                },
                "Punjab": {
                    "districts": {
                        "Amritsar": {},
                        "Barnala": {},
                        "Bathinda": {},
                        "Faridkot": {},
                        "Fatehgarh Sahib": {},
                        "Fazilka": {},
                        "Ferozepur": {},
                        "Gurdaspur": {},
                        "Hoshiarpur": {},
                        "Jalandhar": {},
                        "Kapurthala": {},
                        "Ludhiana": {},
                        "Mansa": {},
                        "Moga": {},
                        "Pathankot": {},
                        "Patiala": {},
                        "Rupnagar": {},
                        "Sangrur": {},
                        "Shaheed Bhagat Singh Nagar": {},
                        "Sri Muktsar Sahib": {},
                        "Tarn Taran": {}
                    }
                },
                "Rajasthan": {
                    "districts": {
                        "Ajmer": {},
                        "Alwar": {},
                        "Banswara": {},
                        "Baran": {},
                        "Barmer": {},
                        "Bharatpur": {},
                        "Bhilwara": {},
                        "Bikaner": {},
                        "Bundi": {},
                        "Chittorgarh": {},
                        "Churu": {},
                        "Dausa": {},
                        "Dholpur": {},
                        "Dungarpur": {},
                        "Hanumangarh": {},
                        "Jaipur": {},
                        "Jaisalmer": {},
                        "Jalore": {},
                        "Jhalawar": {},
                        "Jhunjhunu": {},
                        "Jodhpur": {},
                        "Karauli": {},
                        "Kota": {},
                        "Nagaur": {},
                        "Pali": {},
                        "Pratapgarh": {},
                        "Rajsamand": {},
                        "Sawai Madhopur": {},
                        "Sikar": {},
                        "Sirohi": {},
                        "Sri Ganganagar": {},
                        "Tonk": {},
                        "Udaipur": {}
                    }
                },
                "Sikkim": {
                    "districts": {
                        "East Sikkim": {},
                        "North Sikkim": {},
                        "South Sikkim": {},
                        "West Sikkim": {}
                    }
                },
                "Tamil Nadu": {
                    "districts": {
                        "Ariyalur": {},
                        "Chengalpattu": {},
                        "Chennai": {},
                        "Coimbatore": {},
                        "Cuddalore": {},
                        "Dharmapuri": {},
                        "Dindigul": {},
                        "Erode": {},
                        "Kallakurichi": {},
                        "Kancheepuram": {},
                        "Karur": {},
                        "Krishnagiri": {},
                        "Madurai": {},
                        "Mayiladuthurai": {},
                        "Nagapattinam": {},
                        "Namakkal": {},
                        "Nilgiris": {},
                        "Perambalur": {},
                        "Pudukkottai": {},
                        "Ramanathapuram": {},
                        "Ranipet": {},
                        "Salem": {},
                        "Sivaganga": {},
                        "Tenkasi": {},
                        "Thanjavur": {},
                        "Theni": {},
                        "Thoothukudi": {},
                        "Tiruchirappalli": {},
                        "Tirunelveli": {},
                        "Tirupattur": {},
                        "Tiruppur": {},
                        "Tiruvallur": {},
                        "Tiruvannamalai": {},
                        "Tiruvarur": {},
                        "Vellore": {},
                        "Viluppuram": {},
                        "Virudhunagar": {}
                    }
                },
                "Telangana": {
                    "districts": {
                        "Adilabad": {},
                        "Bhadradri Kothagudem": {},
                        "Hyderabad": {},
                        "Jagtial": {},
                        "Jangaon": {},
                        "Jayashankar Bhupalpally": {},
                        "Jogulamba Gadwal": {},
                        "Kamareddy": {},
                        "Karimnagar": {},
                        "Khammam": {},
                        "Komaram Bheem Asifabad": {},
                        "Mahabubabad": {},
                        "Mahbubnagar": {},
                        "Mancherial": {},
                        "Medak": {},
                        "Medchal-Malkajgiri": {},
                        "Mulugu": {},
                        "Nagarkurnool": {},
                        "Nalgonda": {},
                        "Narayanpet": {},
                        "Nirmal": {},
                        "Nizamabad": {},
                        "Peddapalli": {},
                        "Rajanna Sircilla": {},
                        "Ranga Reddy": {},
                        "Sangareddy": {},
                        "Siddipet": {},
                        "Suryapet": {},
                        "Vikarabad": {},
                        "Wanaparthy": {},
                        "Warangal (Rural)": {},
                        "Warangal (Urban)": {},
                        "Yadadri Bhuvanagiri": {}
                    }
                },
                "Tripura": {
                    "districts": {
                        "Dhalai": {},
                        "Gomati": {},
                        "Khowai": {},
                        "North Tripura": {},
                        "Sepahijala": {},
                        "South Tripura": {},
                        "Unakoti": {},
                        "West Tripura": {}
                    }
                },
                "Uttar Pradesh": {
                    "districts": {
                        "Agra": {},
                        "Aligarh": {},
                        "Ambedkar Nagar": {},
                        "Amethi": {},
                        "Amroha": {},
                        "Auraiya": {},
                        "Ayodhya": {},
                        "Azamgarh": {},
                        "Badaun": {},
                        "Baghpat": {},
                        "Bahraich": {},
                        "Ballia": {},
                        "Balrampur": {},
                        "Banda": {},
                        "Barabanki": {},
                        "Bareilly": {},
                        "Basti": {},
                        "Bhadohi": {},
                        "Bijnor": {},
                        "Bulandshahr": {},
                        "Chandauli": {},
                        "Chitrakoot": {},
                        "Deoria": {},
                        "Etah": {},
                        "Etawah": {},
                        "Farrukhabad": {},
                        "Fatehpur": {},
                        "Firozabad": {},
                        "Gautam Buddh Nagar": {},
                        "Ghaziabad": {},
                        "Ghazipur": {},
                        "Gonda": {},
                        "Gorakhpur": {},
                        "Hamirpur": {},
                        "Hapur": {},
                        "Hardoi": {},
                        "Hathras": {},
                        "Jalaun": {},
                        "Jaunpur": {},
                        "Jhansi": {},
                        "Kannauj": {},
                        "Kanpur Dehat": {},
                        "Kanpur Nagar": {},
                        "Kasganj": {},
                        "Kaushambi": {},
                        "Kheri": {},
                        "Kushinagar": {},
                        "Lalitpur": {},
                        "Lucknow": {},
                        "Maharajganj": {},
                        "Mahoba": {},
                        "Mainpuri": {},
                        "Mathura": {},
                        "Mau": {},
                        "Meerut": {},
                        "Mirzapur": {},
                        "Moradabad": {},
                        "Muzaffarnagar": {},
                        "Pilibhit": {},
                        "Pratapgarh": {},
                        "Rae Bareli": {},
                        "Rampur": {},
                        "Saharanpur": {},
                        "Sambhal": {},
                        "Sant Kabir Nagar": {},
                        "Shahjahanpur": {},
                        "Shamli": {},
                        "Shrawasti": {},
                        "Siddharthnagar": {},
                        "Sitapur": {},
                        "Sonbhadra": {},
                        "Sultanpur": {},
                        "Unnao": {},
                        "Varanasi": {}
                    }
                },
                "Uttarakhand": {
                    "districts": {
                        "Almora": {},
                        "Bageshwar": {},
                        "Chamoli": {},
                        "Champawat": {},
                        "Dehradun": {},
                        "Haridwar": {},
                        "Nainital": {},
                        "Pauri Garhwal": {},
                        "Pithoragarh": {},
                        "Rudraprayag": {},
                        "Tehri Garhwal": {},
                        "Udham Singh Nagar": {},
                        "Uttarkashi": {}
                    }
                },
                "West Bengal": {
                    "districts": {
                        "Alipurduar": {},
                        "Bankura": {},
                        "Birbhum": {},
                        "Cooch Behar": {},
                        "Dakshin Dinajpur": {},
                        "Darjeeling": {},
                        "Hooghly": {},
                        "Howrah": {},
                        "Jalpaiguri": {},
                        "Jhargram": {},
                        "Kalimpong": {},
                        "Kolkata": {},
                        "Malda": {},
                        "Murshidabad": {},
                        "Nadia": {},
                        "North 24 Parganas": {},
                        "Paschim Bardhaman": {},
                        "Paschim Medinipur": {},
                        "Purba Bardhaman": {},
                        "Purba Medinipur": {},
                        "Purulia": {},
                        "South 24 Parganas": {},
                        "Uttar Dinajpur": {}
                    }
                }
            },

            "Sri Lanka": {
                "Western": {
                    "cities": {
                        "Colombo": {},
                        "Gampaha": {},
                        "Kalutara": {}
                    }
                },
                "Central": {
                    "cities": {
                        "Kandy": {},
                        "Matale": {},
                        "Nuwara Eliya": {}
                    }
                },
                "Southern": {
                    "cities": {
                        "Galle": {},
                        "Matara": {},
                        "Hambantota": {}
                    }
                },
                "Northern": {
                    "cities": {
                        "Jaffna": {},
                        "Kilinochchi": {},
                        "Mannar": {},
                        "Vavuniya": {},
                        "Mullaitivu": {}
                    }
                },
                "Eastern": {
                    "cities": {
                        "Trincomalee": {},
                        "Batticaloa": {},
                        "Ampara": {}
                    }
                },
                "North Western": {
                    "cities": {
                        "Kurunegala": {},
                        "Puttalam": {}
                    }
                },
                "North Central": {
                    "cities": {
                        "Anuradhapura": {},
                        "Polonnaruwa": {}
                    }
                },
                "Uva": {
                    "cities": {
                        "Badulla": {},
                        "Monaragala": {}
                    }
                },
                "Sabaragamuwa": {
                    "cities": {
                        "Ratnapura": {},
                        "Kegalle": {}
                    }
                }
            },

            "Philippines": {
                "Ilocos Region": {
                    "cities": {
                        "Ilocos Norte": {},
                        "Ilocos Sur": {},
                        "La Union": {},
                        "Pangasinan": {}
                    }
                },
                "Cagayan Valley": {
                    "cities": {
                        "Batanes": {},
                        "Cagayan": {},
                        "Isabela": {},
                        "Nueva Vizcaya": {},
                        "Quirino": {}
                    }
                },
                "Central Luzon": {
                    "cities": {
                        "Aurora": {},
                        "Bataan": {},
                        "Bulacan": {},
                        "Nueva Ecija": {},
                        "Pampanga": {},
                        "Tarlac": {},
                        "Zambales": {}
                    }
                },
                "CALABARZON": {
                    "cities": {
                        "Cavite": {},
                        "Laguna": {},
                        "Batangas": {},
                        "Rizal": {},
                        "Quezon": {}
                    }
                },
                "MIMAROPA": {
                    "cities": {
                        "Marinduque": {},
                        "Occidental Mindoro": {},
                        "Oriental Mindoro": {},
                        "Palawan": {},
                        "Romblon": {}
                    }
                },
                "Bicol Region": {
                    "cities": {
                        "Albay": {},
                        "Camarines Norte": {},
                        "Camarines Sur": {},
                        "Catanduanes": {},
                        "Masbate": {},
                        "Sorsogon": {}
                    }
                },
                "Western Visayas": {
                    "cities": {
                        "Aklan": {},
                        "Antique": {},
                        "Capiz": {},
                        "Guimaras": {},
                        "Iloilo": {},
                        "Negros Occidental": {}
                    }
                },
                "Central Visayas": {
                    "cities": {
                        "Bohol": {},
                        "Cebu": {},
                        "Negros Oriental": {},
                        "Siquijor": {}
                    }
                },
                "Eastern Visayas": {
                    "cities": {
                        "Biliran": {},
                        "Eastern Samar": {},
                        "Leyte": {},
                        "Northern Samar": {},
                        "Samar": {},
                        "Southern Leyte": {}
                    }
                },
                "Zamboanga Peninsula": {
                    "cities": {
                        "Zamboanga del Norte": {},
                        "Zamboanga del Sur": {},
                        "Zamboanga Sibugay": {}
                    }
                },
                "Northern Mindanao": {
                    "cities": {
                        "Bukidnon": {},
                        "Camiguin": {},
                        "Lanao del Norte": {},
                        "Misamis Occidental": {},
                        "Misamis Oriental": {}
                    }
                },
                "Davao Region": {
                    "cities": {
                        "Davao de Oro": {},
                        "Davao del Norte": {},
                        "Davao del Sur": {},
                        "Davao Occidental": {},
                        "Davao Oriental": {}
                    }
                },
                "SOCCSKSARGEN": {
                    "cities": {
                        "Cotabato": {},
                        "Sarangani": {},
                        "South Cotabato": {},
                        "Sultan Kudarat": {}
                    }
                },
                "Caraga": {
                    "cities": {
                        "Agusan del Norte": {},
                        "Agusan del Sur": {},
                        "Dinagat Islands": {},
                        "Surigao del Norte": {},
                        "Surigao del Sur": {}
                    }
                },
                "BARMM": {
                    "cities": {
                        "Basilan": {},
                        "Lanao del Sur": {},
                        "Maguindanao del Norte": {},
                        "Maguindanao del Sur": {},
                        "Sulu": {},
                        "Tawi-Tawi": {}
                    }
                },
                "Cordillera Administrative Region": {
                    "cities": {
                        "Abra": {},
                        "Apayao": {},
                        "Benguet": {},
                        "Ifugao": {},
                        "Kalinga": {},
                        "Mountain Province": {}
                    }
                },
                "National Capital Region": {
                    "cities": {
                        "Caloocan": {},
                        "Las Piñas": {},
                        "Makati": {},
                        "Malabon": {},
                        "Mandaluyong": {},
                        "Manila": {},
                        "Marikina": {},
                        "Muntinlupa": {},
                        "Navotas": {},
                        "Parañaque": {},
                        "Pasay": {},
                        "Pasig": {},
                        "Pateros": {},
                        "Quezon City": {},
                        "San Juan": {},
                        "Taguig": {},
                        "Valenzuela": {}
                    }
                }
            },

            "Bangladesh": {
                "Barisal": {
                    "cities": {
                        "Barguna": {},
                        "Barisal": {},
                        "Bhola": {},
                        "Jhalokathi": {},
                        "Patuakhali": {},
                        "Pirojpur": {}
                    }
                },
                "Chittagong": {
                    "cities": {
                        "Bandarban": {},
                        "Brahmanbaria": {},
                        "Chandpur": {},
                        "Chittagong": {},
                        "Cox's Bazar": {},
                        "Cumilla": {},
                        "Feni": {},
                        "Khagrachhari": {},
                        "Lakshmipur": {},
                        "Noakhali": {},
                        "Rangamati": {}
                    }
                },
                "Dhaka": {
                    "cities": {
                        "Dhaka": {},
                        "Faridpur": {},
                        "Gazipur": {},
                        "Gopalganj": {},
                        "Kishoreganj": {},
                        "Madaripur": {},
                        "Manikganj": {},
                        "Munshiganj": {},
                        "Narayanganj": {},
                        "Narsingdi": {},
                        "Rajbari": {},
                        "Shariatpur": {},
                        "Tangail": {}
                    }
                },
                "Khulna": {
                    "cities": {
                        "Bagerhat": {},
                        "Chuadanga": {},
                        "Jashore": {},
                        "Jhenaidah": {},
                        "Khulna": {},
                        "Kushtia": {},
                        "Magura": {},
                        "Meherpur": {},
                        "Narail": {},
                        "Satkhira": {}
                    }
                },
                "Mymensingh": {
                    "cities": {
                        "Jamalpur": {},
                        "Mymensingh": {},
                        "Netrokona": {},
                        "Sherpur": {}
                    }
                },
                "Rajshahi": {
                    "cities": {
                        "Bogura": {},
                        "Joypurhat": {},
                        "Naogaon": {},
                        "Natore": {},
                        "Chapainawabganj": {},
                        "Pabna": {},
                        "Rajshahi": {},
                        "Sirajganj": {}
                    }
                },
                "Rangpur": {
                    "cities": {
                        "Dinajpur": {},
                        "Gaibandha": {},
                        "Kurigram": {},
                        "Lalmonirhat": {},
                        "Nilphamari": {},
                        "Panchagarh": {},
                        "Rangpur": {},
                        "Thakurgaon": {}
                    }
                },
                "Sylhet": {
                    "cities": {
                        "Habiganj": {},
                        "Moulvibazar": {},
                        "Sunamganj": {},
                        "Sylhet": {}
                    }
                }
            }
        };


        nationalitySelect.addEventListener('change', NationalityUpdate);

        function NationalityUpdate() {
            const selectedNationality = $('#nationality').val();
            updateStates(selectedNationality);
        }

        NationalityUpdate();
        stateProvinceSelect.addEventListener('change', updateProvince);

        function updateProvince() {
            const selectedState = $('#stateProvince').val();
            const selectedNationality = nationalitySelect.value;
            updateCities(selectedNationality, selectedState);
        }

        updateProvince();

        cityDistrictSelect.addEventListener('change', function() {
            const selectedCity = this.value;
            const selectedNationality = nationalitySelect.value;
            const selectedState = stateProvinceSelect.value;
            updatePoliceStationsAndPostCodes(selectedNationality, selectedState, selectedCity);
        });



        function updateStates(nationality) {
            stateProvinceSelect.innerHTML = '<option value="">Select State/Province</option>';
            cityDistrictSelect.innerHTML = '<option value="">Select City/District</option>';
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && data[nationality]) {
                const states = Object.keys(data[nationality]);
                states.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state;
                    option.textContent = state;
                    if (hasOldState && oldState == state) {
                        option.selected = true;
                    }
                    stateProvinceSelect.appendChild(option);
                });
            }
        }

        function updateCities(nationality, state) {
            cityDistrictSelect.innerHTML = '<option value="">Select City/District</option>';
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && state && data[nationality] && data[nationality][state] && data[nationality][
                    state
                ].cities) {
                const cities = Object.keys(data[nationality][state].cities);
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    if (hasOldCity && oldCity == city) {
                        option.selected = true;
                    }
                    cityDistrictSelect.appendChild(option);
                });
            }
        }

        function updatePoliceStationsAndPostCodes(nationality, state, city) {
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && state && city && data[nationality] && data[nationality][state] && data[
                    nationality][state].cities[city]) {
                const policeStations = data[nationality][state].cities[city].policeStations;
                const postCodes = data[nationality][state].cities[city].postCodes;

                policeStations.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.textContent = station;
                    policeStationSelect.appendChild(option);
                });

                postCodes.forEach(code => {
                    const option = document.createElement('option');
                    option.value = code;
                    option.textContent = code;
                    postCodeSelect.appendChild(option);
                });
            }
        }
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    const loader = `<span class="spinner" role="status" style="text-align: center" aria-hidden="true"></span>`;
    const btn = `<span class="btn-text">Save & Continue</span>`;
    const fieldset1 = $('#fieldset1');
    const fieldset2 = $('#fieldset2');
    const fieldset3 = $('#fieldset3');
    const firstStep = $('#firstStep');
    const secondStep = $('#secondStep');
    const thirdStep = $('#thirdStep');

    $('#f1Button').on('click', function(e) {
        e.preventDefault();

        const button = $(this);
        const formData = new FormData();

        formData.append('firstname', $('input[name=firstname]').val());
        formData.append('lastname', $('input[name=lastname]').val());
        formData.append('mother_name', $('input[name=mother_name]').val());
        formData.append('date_of_birth_day', $('#date_of_birth_day').val());
        formData.append('date_of_birth_month', $('#date_of_birth_month').val());
        formData.append('date_of_birth_year', $('#date_of_birth_year').val());
        formData.append('email', $('input[name=email]').val());
        formData.append('nationality', $('#nationality').val());
        formData.append('job_position', $('#job_position').val());
        formData.append('contact_numberr', $('input[name=contact_number]').val());
        formData.append('whatsapp_numberr', $('input[name=whatsapp_number]').val());

        // Handle file upload if a file is selected
        const fileInput = $('#fileInput')[0];
        if (fileInput.files.length > 0) {
            formData.append('applicant_photo', fileInput.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep1') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button.prop('disabled', true);
                button.html(loader);
            },
            success: function(response) {
                button.prop('disabled', false);
                button.html(btn);
                if (response.status == true) {
                    fieldset1.hide();
                    fieldset2.show();

                    firstStep.find('span').removeClass('bg-[#e0b228]');
                    firstStep.find('span').addClass('bg-White-c');
                    firstStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    secondStep.find('span').addClass('bg-[#e0b228]');
                    secondStep.find('span').removeClass('bg-White-c');
                    secondStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
                }

                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button.prop('disabled', false);
                button.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('applicant_photo')) {
                        $('#photoError').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.applicant_photo}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('contact_numberr')) {
                        $('#phone-error').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.contact_numberr}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('whatsapp_numberr')) {
                        $('#whatsappnumberflag-error').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.whatsapp_numberr}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('date_of_birth_day') || errors.hasOwnProperty(
                            'date_of_birth_month') || errors.hasOwnProperty('date_of_birth_year')) {
                        $('#dexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please select correct date</p>`
                        );
                    }
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });

    $('#f2Button').on('click', function(e) {
        e.preventDefault();

        const button2 = $(this);
        const formData2 = new FormData();

        formData2.append('passportno', $('input[name=passportno]').val());
        formData2.append('passport_doe_day', $('#passport_doe_day').val());
        formData2.append('passport_doe_month', $('#passport_doe_month').val());
        formData2.append('passport_doe_year', $('#passport_doe_year').val());
        formData2.append('father_name', $('input[name=father_name]').val());
        formData2.append('nidorcnicnumber', $('input[name=nidorcnicnumber]').val());
        formData2.append('martialstatus', $('#martialstatus').val());
        formData2.append('uaeresident', $('#uaeresident').val());
        formData2.append('religion', $('#religion').val());
        formData2.append('emiratesid', $('input[name=emiratesid]').val());
        formData2.append('emirates_expiry_day', $('#emirates_expiry_day').val());
        formData2.append('emirates_expiry_month', $('#emirates_expiry_month').val());
        formData2.append('emirates_expiry_year', $('#emirates_expiry_year').val());
        formData2.append('homeaddrss', $('input[name=homeaddrss]').val());
        formData2.append('province', $('#stateProvince').val());
        formData2.append('city', $('#cityDistrict').val());
        formData2.append('policeStation', $('input[name=policeStation]').val());
        formData2.append('zip', $('input[name=zip]').val());
        formData2.append('reference', $('input[name=reference]').val());
        // Handle file upload if a file is selected
        const fileInput1 = $('#fileInputPassport')[0];
        if (fileInput1.files.length > 0) {
            formData2.append('applicant_passport', fileInput1.files[0]);
        }
        const fileInput2 = $('#fileInputSignature')[0];
        if (fileInput2.files.length > 0) {
            formData2.append('specialpage', fileInput2.files[0]);
        }
        const fileInput3 = $('#fileInputNID')[0];
        if (fileInput3.files.length > 0) {
            formData2.append('nid_cnic_front', fileInput3.files[0]);
        }
        const fileInput4 = $('#fileInputNIDBack')[0];
        if (fileInput4.files.length > 0) {
            formData2.append('nid_cnic_back', fileInput4.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep2') }}",
            type: 'POST',
            data: formData2,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button2.prop('disabled', true);
                button2.html(loader);
            },
            success: function(response) {
                button2.prop('disabled', false);
                button2.html(btn);
                if (response.status == true) {
                    fieldset2.hide();
                    fieldset3.show();
                    secondStep.find('span').removeClass('bg-[#e0b228]');
                    secondStep.find('span').addClass('bg-White-c');
                    secondStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    thirdStep.find('span').addClass('bg-[#e0b228]');
                    thirdStep.find('span').removeClass('bg-White-c');
                    thirdStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
                }
                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button2.prop('disabled', false);
                button2.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('passport_doe_year') || errors.hasOwnProperty(
                            'passport_doe_month') || errors.hasOwnProperty('passport_doe_day')) {
                        $('#pexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('emirates_expiry_day') || errors.hasOwnProperty(
                            'emirates_expiry_month') || errors.hasOwnProperty(
                            'emirates_expiry_year')) {
                        $('#eexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('applicant_passport')) {
                        $('#applicant_passport').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.applicant_passport}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('specialpage')) {
                        $('#specialpage').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.specialpage}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('nid_cnic_front')) {
                        $('#nid_cnic_front').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.nid_cnic_front}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('nid_cnic_back')) {
                        $('#nid_cnic_back').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.nid_cnic_back}</p>`
                        );
                    }

                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });

    $('#f3Button').on('click', function(e) {
        e.preventDefault();

        const button3 = $(this);
        const formData3 = new FormData();

        formData3.append('appli_dri_number', $('#appli_dri_number').val());
        formData3.append('drving_lic_expiry_day', $('#drving_lic_expiry_day').val());
        formData3.append('drving_lic_expiry_month', $('#drving_lic_expiry_month').val());
        formData3.append('drving_lic_expiry_year', $('#drving_lic_expiry_year').val());
        formData3.append('have_uae_licence', $('#have_uae_licence').val());
        formData3.append('UAE_Resident_Visa_No', $('#UAE_Resident_Visa_No').val());
        formData3.append('UAE_License_No', $('#UAE_License_No').val());
        formData3.append('SIM_No', $('#SIM_No').val());

        // Handle file upload if a file is selected
        const lfileInput1 = $('#fileInputLicenseFront')[0];
        if (lfileInput1.files.length > 0) {
            formData3.append('appli_dri_lisence_frontpart', lfileInput1.files[0]);
        }
        const lfileInput2 = $('#fileInputLicenseBack')[0];
        if (lfileInput2.files.length > 0) {
            formData3.append('appli_dri_lisence_backpart', lfileInput2.files[0]);
        }
        const lfileInput3 = $('#fileInputUAEDLFront')[0];
        if (lfileInput3.files.length > 0) {
            formData3.append('UAE_DL_Front', lfileInput3.files[0]);
        }
        const lfileInput4 = $('#fileInputUAEDLBack')[0];
        if (lfileInput4.files.length > 0) {
            formData3.append('UAE_DL_Back', lfileInput4.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep3') }}",
            type: 'POST',
            data: formData3,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button3.prop('disabled', true);
                button3.html(loader);
            },
            success: function(response) {
                button3.prop('disabled', false);
                button3.html(btn);
                if (response.status == true) {
                    fieldset2.hide();
                    fieldset3.show();
                    secondStep.find('span').removeClass('bg-[#e0b228]');
                    secondStep.find('span').addClass('bg-White-c');
                    secondStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    thirdStep.find('span').addClass('bg-[#e0b228]');
                    thirdStep.find('span').removeClass('bg-White-c');
                    thirdStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    window.location.href = response.redirect;
                }
                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button3.prop('disabled', false);
                button3.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('drving_lic_expiry_year') || errors.hasOwnProperty(
                            'drving_lic_expiry_day') || errors.hasOwnProperty(
                            'drving_lic_expiry_month')) {
                        $('#ddexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('appli_dri_lisence_frontpart')) {
                        $('#frontImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.appli_dri_lisence_frontpart}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('appli_dri_lisence_backpart')) {
                        $('#backImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.appli_dri_lisence_backpart}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('UAE_DL_Front')) {
                        $('#UAEfrontImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.UAE_DL_Front}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('UAE_DL_Back')) {
                        $('#UAEbackImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.UAE_DL_Back}</p>`
                        );
                    }
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });
</script>

<!-- Previous page toggle functionality -->
<script>
    const previous2 = $('#previous2');
    const previous3 = $('#previous3');

    previous2.on('click', function() {
        fieldset1.show();
        fieldset2.hide();
        firstStep.find('span').addClass('bg-[#e0b228]');
        firstStep.find('span').removeClass('bg-White-c');
        firstStep.find('a').addClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

        secondStep.find('span').removeClass('bg-[#e0b228]');
        secondStep.find('span').addClass('bg-White-c');
        secondStep.find('a').removeClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
    });

    previous3.on('click', function() {
        fieldset2.show();
        fieldset3.hide();

        secondStep.find('span').addClass('bg-[#e0b228]');
        secondStep.find('span').removeClass('bg-White-c');
        secondStep.find('a').addClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

        thirdStep.find('span').removeClass('bg-[#e0b228]');
        thirdStep.find('span').addClass('bg-White-c');
        thirdStep.find('a').removeClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
    });
</script>

</html>
