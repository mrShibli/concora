@extends('layouts.app')


@section('styles')
    <style>
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

        .jobsubmitbtn {
            margin-top: 10px;
            background: #ffa000;
            border: none;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }


        .header {
            display: none;
        }

        .footer {
            display: none;
        }


        form.form.applyform {
            max-width: 800px;
            margin: 0 auto;
            border: 1px double grey;
        }

        /* Media query for screens smaller than 768px (typical mobile devices) */
        @media screen and (max-width: 768px) {
            .form {
                padding: 25px 15px;
                font-size: 15px;
            }

            .form input {
                padding: 13px;
                font-size: 15px;
            }

            .form select {
                padding: 13px;
                font-size: 15px;
            }
        }

        .iti.iti--allow-dropdown.iti--show-flags.iti--inline-dropdown {
            width: 100%;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/css/intlTelInput.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
@endsection

@section('content')

    @if (Session::has('success'))
        <section>
            <div
                style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.3rem;">
                {{ Session::get('success') }}
            </div>
        </section>
    @endif

    <!-- ----------------------------- -->

    <section class="jopformarea">


        <form method="POST" action="{{ route('applicants.store') }}" enctype="multipart/form-data" class="form applyform">
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
            <div style="text-align: center;">
                <h3>Join Our Team – Apply Now!</h3>
                <p style="text-align: justify;">Welcome to CONQUEROR! We’re excited to learn more about you and your
                    interest in joining our team.
                    Please fill out the form below with your details and attach the necessary documents. We’re looking
                    for passionate individuals from diverse backgrounds to contribute to our dynamic team. Your journey
                    with us starts here – let’s create something incredible together!</p>
            </div>


            <label for="position">Position</label>
            <select name="position_id" id="position">
                <option value="Select Position">Select Position</option>

                @foreach ($allpositions as $position)
                    @if ($position->status == 1)
                        <option value="{{ $position->id }}">{{ $position->title }}</option>
                    @endif
                @endforeach

            </select>


            <div class="Nationality">
                <label for="form-field-field_b906e32">
                    Nationality </label>
                <div>
                    <div class="select-caret-down-wrapper">
                        <i aria-hidden="true" class="eicon-caret-down"></i>
                    </div>
                    <select name="nationality" >
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the">Congo, Republic of the</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic (Czechia)">Czech Republic (Czechia)</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, North">Korea, North</option>
                        <option value="Korea, South">Korea, South</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Macedonia (formerly Macedonia)">North Macedonia (formerly Macedonia)
                        </option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City">Vatican City</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>

            <div class="name jobcontactnumbers">

                <div class="box">
                    <label for="first_name">First Name</label>
                    <input type="text" value="{{ old('first_name') }}" name="first_name" autocomplete="off"
                        id="first_name" class="{{ $errors->has('first_name') ? 'error' : '' }}">
                    @error('first_name')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="box">
                    <label for="lname">Last Name</label>
                    <input type="text" name="last_name" autocomplete="off" value="{{ old('last_name') }}"
                        id="lname" class="{{ $errors->has('last_name') ? 'error' : '' }}">
                    @error('last_name')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="box">
                <label for="dob">Date of Birth </label>
                <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth" autocomplete="off"
                    id="dob" class="{{ $errors->has('date_of_birth') ? 'error' : '' }}">
                @error('date_of_birth')
                    <p class="erromessage">{{ $message }}</p>
                @enderror
            </div>


            <div class="jobcontactnumbers">

                <div class="box">
                    <label for="contactnumber">Contact Number</label>
                    <input type="tel" value="{{ old('contact_number') }}" autocomplete="off" name="contact_number"
                        id="phone" class="{{ $errors->has('contact_number') ? 'error' : '' }}">
                    @error('contact_number')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
                <div class="box">
                    <label for="whatsappnumber">Whatsapp Number</label>
                    <input type="tel" value="{{ old('whatsapp_number') }}" autocomplete="off"
                        name="whatsapp_number" id="whatsappnumberflag"
                        class="{{ $errors->has('whatsapp_number') ? 'error' : '' }}">
                    @error('whatsapp_number')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <label for="">Email Address</label>
            <input type="email" name="email" autocomplete="off" id="email" value="{{ old('email') }}"
                class="{{ $errors->has('email') ? 'error' : '' }}">
            @error('email')
                <p class="erromessage">{{ $message }}</p>
            @enderror

            <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Applicant Image</div>
                    <img src="{{ asset('profile.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-upload" class="{{ $errors->has('email') ? 'error' : '' }}">

                </div>

                <div class="">
                    <input type="file" name="applicant_image" accept="image/*" id="form-field-applicantimage"
                        aria-required="true" value="{{ old('applicant_image') }}"
                        class="{{ $errors->has('applicant_image') ? 'error' : '' }}">
                    @error('applicant_image')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Passport FIle</div>
                    <img src="{{ asset('passport.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadpassport">
                </div>

                <div class="">
                    <input type="file" name="applicant_passport" id="form-field-applicantpassport"
                        aria-required="true" value="{{ old('applicant_passport') }}"
                        class="{{ $errors->has('applicant_passport') ? 'error' : '' }}">
                    @error('applicant_passport')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Resume FIle</div>
                    <img src="{{ asset('resume.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadresume">
                </div>

                <div class="">
                    <input type="file" name="applicant_resume" id="form-field-applicantresume"
                        class="{{ $errors->has('applicant_resume') ? 'error' : '' }}" aria-required="true"
                        value="{{ old('applicant_resume') }}">
                    @error('applicant_resume')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <input type="submit" name="Submit" value="Apply Now" class="jobsubmitbtn">

        </form>

    </section>

@endsection


@section('scripts')
    
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
    </script>


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
@endsection
