@extends('layouts.master')

@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    {{-- <div class="content-wrapper">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
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
        @if (Auth::user()->role == 'user')
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "> <a href="{{ route('applicants.index') }}"> Home </a> </li>
                    <li class="breadcrumb-item"><a href="{{ route('applicants.index') }}">Applicants </a>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"> Edit </a>
                    </li>
                </ol>
            </nav>
        @elseif(true)
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "> <a href="{{ route('dashboard') }}"> Home </a> </li>
                    <li class="breadcrumb-item"><a href="{{ route('applicants.index') }}">Applicants </a>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"> Edit </a>
                    </li>
                </ol>
            </nav>
        @endif
        <h3 class="pt-3 p-1">Edit/Update Applicant</h3>

        <form method="POST" action="{{ route('applicants.update', $applicant->id) }}" enctype="multipart/form-data">
            @csrf 

            <div class="row">
                <div class="col-md-6">

                    <input type="hidden" class="form-control" name="position_id" value="{{ $applicant->position_id }}">

                    <div class="form-group">
                        <label for="nationality">Nationality:</label>
                        <input type="text" class="form-control" name="nationality" value="{{ $applicant->nationality }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" name="country" value="{{ $applicant->country }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="province">Province:</label>
                        <input type="text" class="form-control" name="province" value="{{ $applicant->province }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city" value="{{ $applicant->city }}" required>
                    </div>

                    <div class="form-group">
                        <label for="zip">Zip Code:</label>
                        <input type="text" class="form-control" name="zip" value="{{ $applicant->zip }}" required>
                    </div>

                    <div class="form-group">
                        <label for="homeaddrss">Home Address:</label>
                        <input type="text" class="form-control" name="homeaddrss" value="{{ $applicant->homeaddrss }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="{{ $applicant->first_name }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $applicant->last_name }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="mother_name">Mother Name:</label>
                        <input type="text" class="form-control" name="mother_name"
                            value="{{ $applicant->mother_name }}">
                    </div>

                    <div class="form-group">
                        <label for="father_name">Father Name:</label>
                        <input type="text" class="form-control" name="father_name"
                            value="{{ $applicant->father_name }}">
                    </div>

                    <div class="form-group">
                        <label for="martialstatus">Marital Status:</label>
                        <input type="text" class="form-control" name="martialstatus"
                            value="{{ $applicant->martialstatus }}">
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="text" class="form-control" name="contact_number"
                            value="{{ $applicant->contact_number }}" required>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp_number">WhatsApp Number:</label>
                        <input type="text" class="form-control" name="whatsapp_number"
                            value="{{ $applicant->whatsapp_number }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $applicant->email }}"
                            required>
                    </div>

                    <div class="form-group">

                        @if ($applicant->otp_verified == 0)
                            <a href="{{ route('applicants.verifyemailadmin', ['id' => $applicant->id]) }}"
                                class="btn btn-danger rounded">Verify Email</a>

                            @if (Session::has('otpstatus'))
                                <div class="mt-2 verifyarea">
                                    <div class="message"></div>
                                    <input type="number" class="form-control" id="verifemailmanual"
                                        name="verifemailmanual" placeholder="Enter OTP here">
                                    <a class="btn btn-success rounded mt-2" id="verifynowbutton">Verify Now</a>
                                </div>
                            @endif
                        @else
                            <a href="" class="btn btn-success rounded disabled">Email Verified</a>
                        @endif

                    </div>


                    <div class="form-group">
                        <label for="uaeresident">UAE Resident :</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="uaeresident" id="uaeresident"
                                {{ $applicant->uaeresident ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="emiratesid">Emirates ID:</label>
                        <input type="text" class="form-control" name="emiratesid"
                            value="{{ $applicant->emiratesid }}">
                    </div>

                    <div class="form-group">
                        <label for="emirates_expiry">Expiry Date:</label>
                        <input type="date" class="form-control" name="emirates_expiry"
                            value="{{ $applicant->emirates_expiry }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" class="form-control" name="date_of_birth"
                            value="{{ $applicant->date_of_birth }}" required>
                    </div>

                    <div class="form-group border p-2">
                        <label for="appli_dri_lisence_backpart">Driving License Back:</label>
                        <input type="file" class="form-control-file" name="appli_dri_lisence_backpart">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->appli_dri_lisence_backpart)
                            <!--Existing Driving License Front -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Driving License Back:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"
                                    width="100px" height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"> View
                                    Driving License Back </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded Driving License
                                Back.</h5>
                        @endif

                    </div>

                    <div class="form-group border p-2">
                        <label for="specialpage">Special Page:</label>
                        <input type="file" class="form-control-file" name="specialpage" id="specialpage">
                        <small>(Upload if want to update)</small>
                        @if ($applicant->specialpage)
                            <!--Existing Driving License Front -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Special Page:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->specialpage) }}" width="100px"
                                    height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->specialpage) }}"> View
                                    Special Page </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded Special Page.
                            </h5>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="passportno">Passport Number:</label>
                        <input type="text" class="form-control" name="passportno"
                            value="{{ $applicant->passportno }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_expiry">Passport Expiry Date:</label>
                        <input type="date" class="form-control" name="date_of_expiry"
                            value="{{ $applicant->date_of_expiry }}">
                    </div>

                    @if (Auth::user()->role == 'super_admin')
                        <div class="form-group">
                            <label for="reference">Reference:</label>
                            {{ in_array($applicant->reference, ['CX1987JH12', 'XW1992KD54', 'LS1994ND40', 'QM1990ZD12', 'QN1992SL21', 'GK1980MM51']) ? $applicant->reference : '( Not Matched )' }}
                            <input type="text" class="form-control" name="reference"
                                value="{{ $applicant->reference }}">
                        </div>
                    @endif


                </div>

                <div class="col-md-6">

                    <div class="form-group border p-2">
                        <label for="applicant_image">Applicant Image:</label>
                        <input type="file" class="form-control-file" name="applicant_image">

                        <small>(Upload if want to update)</small>

                        @if ($applicant->applicant_image)
                            <!--Existing Profile image -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Image: </strong><br>

                                <a href="{{ asset('applicants/' . $applicant->applicant_image) }}"
                                    data-lightbox="image-set" data-title="Applicant Image">
                                    <img src="{{ asset('applicants/' . $applicant->applicant_image) }}" width="70"
                                        class="img-thumbnail mt-1 mb-1" alt="Applicant Image">
                                </a>
                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded an image.</h5>
                        @endif
                    </div>

                    <div class="form-group border p-2">
                        <label for="nid_cnic_front">Applicant NID/CNIC Front:</label>
                        <input type="file" class="form-control-file" name="nid_cnic_front">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->applicant_passport)
                            <!--Existing Passport -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current NID/CNIC Front:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->nid_cnic_front) }}" width="100px"
                                    height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->nid_cnic_front) }}"> View NID/CNIC Front
                                </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded NID/CNIC Front.
                            </h5>
                        @endif
                    </div>

                    <div class="form-group border p-2">
                        <label for="nid_cnic_back">Applicant NID/CNIC Back:</label>
                        <input type="file" class="form-control-file" name="nid_cnic_back">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->nid_cnic_back)
                            <!--Existing Passport -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current NID/CNIC Back:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->nid_cnic_back) }}" width="100px"
                                    height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->nid_cnic_back) }}"> View NID/CNIC Back </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded NID/CNIC Back.
                            </h5>
                        @endif
                    </div>

                    <div class="form-group border p-2">
                        <label for="applicant_passport">Applicant Passport:</label>
                        <input type="file" class="form-control-file" name="applicant_passport">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->applicant_passport)
                            <!--Existing Passport -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Passport:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->applicant_passport) }}" width="100px"
                                    height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->applicant_passport) }}"> View Passport </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded passport.</h5>
                        @endif

                    </div>

                    <div class="form-group border p-2">
                        <label for="applicant_resume">Applicant Resume:</label>
                        <input type="file" class="form-control-file" name="applicant_resume">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->applicant_resume)
                            <!--Existing Resume -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Resume:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->applicant_resume) }}" width="100px"
                                    height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->applicant_resume) }}"> View Resume </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded resume.</h5>
                        @endif

                    </div>

                    <div class="form-group border p-2">
                        <label for="appli_dri_lisence_frontpart">Driving License Front:</label>
                        <input type="file" class="form-control-file" name="appli_dri_lisence_frontpart">

                        <small>(Upload if want to update)</small>
                        @if ($applicant->appli_dri_lisence_frontpart)
                            <!--Existing Driving License Front -->
                            <div class="mb-4">
                                <p class="pt-1"></p>
                                <strong>Current Driving License Front:</strong><br>
                                <embed src="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"
                                    width="100px" height="100px" /> <br>
                                <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"> View
                                    Driving License Front </a>

                            </div>
                        @else
                            <h5 style="color: rgb(141, 15, 15);" class="mt-2">Applicant has not uploaded Driving License
                                Front.</h5>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="appli_dri_number">Driving License Number:</label>
                        <input type="text" class="form-control" name="appli_dri_number"
                            value="{{ $applicant->appli_dri_number }}">
                    </div>

                    <div class="form-group">
                        <label for="nidorcnicnumber">NID / CNIC Number:</label>
                        <input type="text" class="form-control" name="nidorcnicnumber"
                            value="{{ $applicant->nidorcnicnumber }}">
                    </div>

                    <div class="form-group">
                        <label for="nidorcnicexpiry">Expiry Date:</label>
                        <input type="date" class="form-control" name="nidorcnicexpiry"
                            value="{{ $applicant->nidorcnicexpiry }}">
                    </div>


                </div>
            </div>

            <input type="hidden" name="submissionid" value="{{ $applicant->submissionid }}">
            <input type="hidden" name="otp_generated_at" value="{{ $applicant->otp_generated_at }}">

            <button type="submit" class="btn btn-primary">Update Applicant</button>
        </form>

    </div> --}}
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">



        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a
                    href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants /</a> <a
                    href="" class="text-xs text-gray-500 hover:underline">View</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="bg-White-c p-3 py-4 pb-8 Tablet:p-6 Laptop:p-8 Laptop:py-10  shadow-sm rounded-xl">
            <div class="buttons flex items-center justify-between flex-wrap gap-2 " style="margin-bottom: 45px">
                <a href="javascript:void(0)" onClick="ShowBasic()"
                    class="px-4 py-2 text-xs font-medium leading-5  bg-[#8AD7F7] rounded-full font-roboto">Basic
                    Information</a>
                <a href="javascript:void(0)" onClick="ShowCnic()"
                    class="px-4 py-2 text-xs font-medium leading-5  bg-[#1EB57E] text-White-c rounded-full font-roboto">CNIC
                    Information</a>
                <a href="javascript:void(0)" onClick="ShowContact()"
                    class="px-4 py-2 text-xs font-medium leading-5  bg-[#CEDC34] text-Black-c rounded-full font-roboto">Contact
                    Information</a>
                <a href="javascript:void(0)" onClick="ShowPass()"
                    class="px-4 py-2 text-xs font-medium leading-5  bg-[#CD50F9] text-White-c rounded-full font-roboto">Passport
                    Information</a>
                <a href="javascript:void(0)" onClick="ShowDri()"
                    class="px-4 py-2 text-xs font-medium leading-5  bg-[#005EDF] text-White-c rounded-full font-roboto ">Driving
                    License Information</a>
            </div>

            <form action="{{ route('applicants.update', ['id' => $applicant->id]) }}" method="post" id="Basic">
                @csrf

                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Job Position</label>

                        <select name="position_id" class="w-full h-[12px] mt-3" id="" style="height:20px">
                            @foreach ($jobs_position as $position)
                                <option value="{{ $position->id }}" @if ($applicant->position->id == $position->id) selected @endif>
                                    {{ $position->title }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="" class="text-sm Laptop:text-base">First Name</label>
                        <input type="text" name="first_name" value="{{ $applicant->first_name }}"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs">
                    </div>

                </div>

                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">

                    <!-- <div>
                                    <label for="" class="text-sm Laptop:text-base">Job Type</label>
                                    <input type="text" name=""
                                        class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                                        value="{{ $applicant->first_name }}">
                                </div> -->
                    <div>
                        <label for="" class="text-sm Laptop:text-base">Last Name</label>
                        <input type="text" name="last_name"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->last_name }}">
                    </div>

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Nationality</label>
                        <input type="text" name="nationality"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->nationality }}">
                    </div>

                </div>

                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">


                    <div>
                        <label for="" class="text-sm Laptop:text-base">Mother Name</label>
                        <input type="text" name="mother_name"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->mother_name }}">
                    </div>
                    <div>
                        <label for="" class="text-sm Laptop:text-base">UAE Residence</label>
                        <input type="text" name="uaeresident"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->uaeresident == '1' ? 'Yes' : 'No' }}">
                    </div>
                </div>

                <div class="text-right mt-5">
                    <button type="submit"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        & Continue</button>
                </div>
            </form>

            <form action="{{ route('applicants.update', ['id' => $applicant->id]) }}" enctype='multipart/form-data'
                method="POST" id="Cnic" class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-16 mb-2 Laptop:mb-16 "
                style="display: none">
                @csrf
                <div class=" nid-img bg-cover bg-center bg-no-repeat shadow-xl p-4 px-8 rounded-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h2 class="text-sm Laptop:text-base text-Black-c ">Current CNIC Front</h2>
                            <a href="" class="text-xs text-Primary-c underline">View CNIC</a>
                        </div>
                        <input type="file" name="nid_cnic_front" id="">
                    </div>
                    <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                        src="{{ asset('applicants/' . $applicant->nid_cnic_front) }}" alt="">
                </div>
                <div class=" nid-img bg-cover bg-center bg-no-repeat shadow-xl p-4 px-8 rounded-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h2 class="text-sm Laptop:text-base text-Black-c ">Current CNIC Back</h2>
                            <a href="" class="text-xs text-Primary-c underline">View CNIC</a>
                        </div>
                        <input type="file" name="nid_cnic_back">
                    </div>
                    <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                        src="{{ asset('applicants/' . $applicant->nid_cnic_back) }}" alt="">
                </div>

                <div class="text-right" style="margin-top: 27px">
                    <button type="submit"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        & Continue</button>
                </div>
            </form>

            <form action="{{ route('applicants.update', ['id' => $applicant->id]) }}" method="POST" id="Contact"
                style="display: none">
                @csrf
                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Date of Birth</label>
                        <input type="text" name="date_of_birth"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->date_of_birth }}">
                    </div>
                    <div>
                        <label for="" class="text-sm Laptop:text-base">Contact Number</label>
                        <input type="tel" name="contact_number"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->contact_number }}">
                    </div>

                </div>

                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Email Address</label>
                        <input type="email" name="email"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->email }}">

                        <div class="form-group mt10">

                            @if ($applicant->otp_verified == 0)
                                <a href="{{ route('applicants.verifyemailadmin', ['id' => $applicant->id]) }}"
                                    class="btn btn-danger rounded verifyemailbtn">Verify Email</a>

                                @if (Session::has('otpstatus'))
                                    <div class="mt-2 verifyarea">
                                        <div class="message"></div>
                                        <input type="number" class="form-control" id="verifemailmanual"
                                            name="verifemailmanual" placeholder="Enter OTP here">
                                        <a class="btn btn-success rounded mt-2 verifyemailbtnsubmit"
                                            id="verifynowbutton">Verify Now</a>
                                    </div>
                                @endif
                            @else
                                <a href="" class="btn btn-success rounded disabled verifyemailbtnsubmit">Email
                                    Verified</a>
                            @endif

                            <style>
                                .verifyemailbtn {
                                    background: #FF4647;
                                    color: #fff;
                                    padding: 10px;
                                    font-size: 0.9rem;
                                    margin-top: 10px;
                                }

                                .verifyemailbtnsubmit {
                                    background: #048c38;
                                    color: #fff;
                                    padding: 10px;
                                    font-size: 0.9rem;
                                    margin-top: 10px;
                                }

                                .mt10 {
                                    margin-top: 10px;
                                }

                                input#verifemailmanual {
                                    padding: 6px 10px;
                                    margin-top: 10px;
                                    font-size: 0.9rem;
                                }
                            </style>

                        </div>

                    </div>
                    <div>
                        <label for="" class="text-sm Laptop:text-base">WhatsApp Number </label>
                        <input type="tel" name="whatsapp_number"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->whatsapp_number }}">
                    </div>

                </div>
                <div class="text-right mt-5">
                    <button type="submit"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        & Continue</button>
                </div>
            </form>

            <form action="{{ route('applicants.update', ['id' => $applicant->id]) }}" method="POST" id="Pass"
                enctype='multipart/form-data' style="display: none">
                @csrf
                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-16 mb-2 Laptop:mb-16 ">

                    <div class=" nid-img bg-cover bg-center bg-no-repeat shadow-xl p-4 px-8 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-sm Laptop:text-base text-Black-c ">Current Image</h2>
                                <a href="" class="text-xs text-Primary-c underline">View Image</a>
                            </div>

                            <input type="file" name="applicant_image" id="">

                        </div>
                        <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                            src="{{ asset('applicants/' . $applicant->applicant_image) }}" alt="">
                    </div>

                    <div class=" nid-img bg-cover bg-center bg-no-repeat shadow-xl p-4 px-8 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-sm Laptop:text-base text-Black-c ">Current Passport</h2>
                                <a href="" class="text-xs text-Primary-c underline">View Passport</a>
                            </div>
                            <input type="file" name="applicant_passport" id="">
                        </div>
                        <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                            src="{{ asset('applicants/' . $applicant->applicant_passport) }}" alt="">
                    </div>

                </div>

                <div class="grid grid-cols-1 Laptop:grid-cols-2  Laptop:gap-24 mb-2 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Passport Number </label>
                        <input type="text" name="passportno"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->passportno }}">
                    </div>
                    <div>
                        <label for="" class="text-sm Laptop:text-base">Date of Expiry</label>
                        <input type="text" name="date_of_expiry"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->date_of_expiry }}">
                    </div>

                </div>
                <div class="text-right mt-5">
                    <button type="submit"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        & Continue</button>
                </div>
            </form>

            <form action="{{ route('applicants.update', ['id' => $applicant->id]) }}" enctype='multipart/form-data'
                method="POST" id="Dri" style="display: none">
                @csrf
                <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  Laptop:gap-16 mb-6 Laptop:mb-12 ">

                    <div class=" nid-img bg-cover bg-center bg-no-repeat shadow p-4 px-8 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-sm Laptop:text-base text-Black-c ">Driving License Front</h2>
                                <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"
                                    class="text-xs text-Primary-c underline">View Image</a>
                            </div>
                            <input type="file" name="appli_dri_lisence_frontpart" id="">
                        </div>
                        <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                            src="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}" alt="">
                    </div>

                    <div class=" nid-img bg-cover bg-center bg-no-repeat shadow p-4 px-8 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-sm Laptop:text-base text-Black-c ">Driving License Back</h2>
                                <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"
                                    class="text-xs text-Primary-c underline">View Passport</a>
                            </div>
                            <input type="file" name="appli_dri_lisence_backpart" id="">
                        </div>
                        <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                            src="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}" alt="">
                    </div>

                </div>

                <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  Laptop:gap-24 mb-6 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">License Number </label>
                        <input type="text" name="appli_dri_number"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->appli_dri_number }}">
                    </div>

                </div>

                <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  Laptop:gap-16 mb-6 Laptop:mb-12 ">

                    <div class=" nid-img bg-cover bg-center bg-no-repeat shadow p-4 px-8 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-sm Laptop:text-base text-Black-c ">Special Document</h2>
                                <a href="{{ asset('applicants/' . $applicant->specialpage) }}"
                                    class="text-xs text-Primary-c underline">View Image</a>
                            </div>
                            <input type="file" name="specialpage" id="">
                        </div>
                        <img class=" w-[200px] h-[140px] contain object-contain Tablet:w-[230px] Tablet:h-[150px] Laptop:w-[300px] Laptop:h-[186px] rounded"
                            src="{{ asset('applicants/' . $applicant->specialpage) }}" alt="">
                    </div>



                </div>

                <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2  Laptop:gap-24 mb-6 Laptop:mb-8">

                    <div>
                        <label for="" class="text-sm Laptop:text-base">Referral Number</label>
                        <input type="text" name="reference"
                            class="w-full bg-Low-dull-c mt-2 px-2 Tablet:px-3 py-2 Laptop:py-2.5 rounded-sm text-xs"
                            value="{{ $applicant->reference }}">
                    </div>

                </div>
                <div class="text-right mt-5">
                    <button type="submit"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        & Continue</button>
                </div>
            </form>



        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#verifynowbutton').click(function() {
                var inputval = $('#verifemailmanual').val();
                $.ajax({
                    url: '{{ route('applicants.verifyemailadminotp') }}',
                    method: 'POST',
                    data: {
                        otpcode: inputval,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        $('.message').text(response.message + ' OTP: ' + response
                            .otp);
                        if (response.mainotp == response.otp) {
                            setTimeout(function() {
                                location.reload();
                            }, 3000);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

        });
    </script>
    @parent
    <!-- Lightbox JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        function ShowBasic() {
            $('#Basic').css('display', 'block');
            $('#Cnic').css('display', 'none');
            $('#Contact').css('display', 'none');
            $('#Pass').css('display', 'none');
            $('#Dri').css('display', 'none');
        }

        function ShowCnic() {
            $('#Basic').css('display', 'none');
            $('#Cnic').css('display', 'block');
            $('#Contact').css('display', 'none');
            $('#Pass').css('display', 'none');
            $('#Dri').css('display', 'none');
        }

        function ShowContact() {
            $('#Basic').css('display', 'none');
            $('#Cnic').css('display', 'none');
            $('#Contact').css('display', 'block');
            $('#Pass').css('display', 'none');
            $('#Dri').css('display', 'none');
        }

        function ShowPass() {
            $('#Basic').css('display', 'none');
            $('#Cnic').css('display', 'none');
            $('#Contact').css('display', 'none');
            $('#Pass').css('display', 'block');
            $('#Dri').css('display', 'none');
        }

        function ShowDri() {
            $('#Basic').css('display', 'none');
            $('#Cnic').css('display', 'none');
            $('#Contact').css('display', 'none');
            $('#Pass').css('display', 'none');
            $('#Dri').css('display', 'block');
        }
    </script>
@endsection
