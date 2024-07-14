@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <style>
        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }
    </style>
    <style>
        #passport_info {
            display: none;
        }

        #role_info {
            display: none;
        }

        #passport_info_btn {
            display: none;
        }

        #passport_info_btn {
            display: none;
        }

        #role_info_btn {
            display: none;
        }
    </style>
@endsection 

@section('content')
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="index.html" class="text-xs text-blue-600 hover:underline">Home /</a> <a href="job-application.html"
                    class="text-xs text-blue-600 hover:underline">Users /</a> <a href="job-application.html"
                    class="text-xs text-gray-500 hover:underline">Create</a>
            </div>
        </div> 

        <div class="right-side m-4 Laptop:m-4 pt-20 ml-4">
            <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data"
                class=" bg-White-c p-3 py-4 pb-8 Tablet:p-6 Laptop:p-8 Laptop:py-10  shadow-sm rounded-xl  ">
                <div id="basic_info">
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="first_name" class="text-sm Laptop:text-base">First Name <span style="color:red"> *</span> </label>
                            <input type="text" id="first_name" name="first_name" placeholder="First name"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('first_name')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                        <div>
                            <label for="last_name" class="text-sm Laptop:text-base">Last Name <span style="color:red"> *</span> </label>
                            <input type="text" id="last_name" name="last_name" placeholder="Last name"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs"> 
                            @error('last_name')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="email" class="text-sm Laptop:text-base">Email <span style="color:red"> *</span> </label>
                            <input type="email" id="email" name="email" placeholder="Your Email"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                @error('email')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                        <div>
                            <label for="nationality" class="text-sm Laptop:text-base">Nationality</label>
                            <input type="text" id="nationality" name="nationality" placeholder="Your Nationality"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                @error('nationality')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="dob" class="text-sm Laptop:text-base">DOB</label>
                            <input type="date" id="dob" name="dob" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                        </div>
                        <div>
                            <label for="contact_number" class="text-sm Laptop:text-base">Contact Number <span style="color:red"> *</span> </label>
                            <input type="number" id="contact_number" name="contact_number" placeholder="Your Contact Number" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('contact_number')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="whatsapp_number" class="text-sm Laptop:text-base">WhatsApp Number</label>
                            <input type="number" id="whatsapp_number" name="whatsapp_number" placeholder="Your WhatsApp Number"  class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('whatsapp_number')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                </div>

               @csrf

                <div id="passport_info">
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="father_name" class="text-sm Laptop:text-base">Father’s Name </label>
                            <input type="text" id="father_name" name="father_name" placeholder="Father’s Name"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            
                        </div>
                        <div>
                            <label for="mother_name" class="text-sm Laptop:text-base">Mother’s Name </label>
                            <input type="text" id="mother_name" name="mother_name" placeholder="Mother’s Name"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="passport_no" class="text-sm Laptop:text-base">Passport No <span style="color:red"> *</span> </label>
                            <input type="text" id="passport_no" name="passport_no" placeholder="Passport No"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                           @error('passport_no')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                        <div>
                            <label for="date_of_expiry" class="text-sm Laptop:text-base">Date of Expiry</label>
                            <input type="date" id="date_of_expiry" name="date_of_expiry" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('date_of_expiry')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="nid_cnic_no" class="text-sm Laptop:text-base">NID/CNIC No:</label>
                            <input type="text" id="nid_cnic_no" name="nid_cnic_no" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('nid_cnic_no')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                        <div>
                            <label for="marital_status" class="text-sm Laptop:text-base">Marital Status</label>
                            <select id="marital_status" name="marital_status" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                            @error('marital_status')<p style="color:red;" > {{$message}}  </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="uae_resident" class="text-sm Laptop:text-base">UAE Resident</label>
                            <select onchange="uae_residents()" id="uae_residents" name="uae_resident" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                <option value="Yes">Yes</option>
                                <option value="No" selected>No</option>
                            </select>

                            <div class="box" style="display:none"> 
                                <label for="">if yes</label>
                                <input class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" type="number" name="uae_resident_no" value="" placeholder="784-####-#######-#" id="">
                            </div>
                        </div>
                        <div>
                            <label for="home_country_address" class="text-sm Laptop:text-base">Home Country Address</label>
                            <input type="text" id="home_country_address" name="home_country_address" max="15"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 Laptop:grid-cols-4 gap-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="city" class="text-sm Laptop:text-base">City: <span style="color:red"> * </span></label>
                            <select id="city" name="city" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                <option value="Chowgacha">Chowgacha</option>
                                <option value="Chowgacha">Chowgacha</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Jashore">Jashore</option>
                            </select>
                            @error('city') <p style="color:red"> {{$message}}</p> @enderror
                        </div>
                        <div>
                            <label for="state_district" class="text-sm Laptop:text-base">State/District:  <span style="color:red"> * </span>  </label>
                            <select id="state_district" name="state_district" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                <option value="Jashore">Jashore</option>
                                <option value="Chowgacha">Chowgacha</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Jashore">Jashore</option>
                            </select>
                        @error('state_district') <p style="color:red"> {{$message}} </p> @enderror
                        </div>
                        <div>
                            <label for="police_station" class="text-sm Laptop:text-base">Police Station:</label>
                            <input type="text" id="police_station" name="police_station" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                        </div>
                        <div>
                            <label for="po" class="text-sm Laptop:text-base">P.O</label>
                            <input type="text" id="po" name="po" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs"> 
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="reference_name" class="text-sm Laptop:text-base">Reference Name <span style="color:red"> * </span> </label>
                            <input type="text" id="reference_name" name="reference_name" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                            @error('reference_name') <p style="color:red"> {{$message}} </p> @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 gap-2 Laptop:gap-12 py-4 Laptop:py-6">
                        <div class="flex items-center gap-2">
                            <div class="Laptop:w-[38%] w-[40%]">
                                <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Passport Front Page<span
                                        class="text-Indicates">*</span></h2>
                                {{-- <p class="text-[10px] Laptop:text-[10px]">Upload (Clear Scan Copy Full Page)</p> --}}
                                <input type="file" name="passport_image">
                                @error('passport_image')<p style="color:red"> {{$message}} </p> @enderror
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="Laptop:w-[38%] w-[40%]">
                                <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Special Page(optional)<span
                                        class="text-Indicates">*</span></h2>
                                <input type="file" name="socile_page">
                                @error('socile_page')<p style="color:red"> {{$message}} </p> @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 gap-2 Laptop:gap-12 py-4 Laptop:py-6">
                        <div class="flex items-center gap-2">
                            <div class="Laptop:w-[38%] w-[40%]">
                                <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">NID/CNIC Front<span
                                        class="text-Indicates">*</span></h2>
                                <input type="file" name="nid">
                                @error('nid')<p style="color:red"> {{$message}} </p> @enderror
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="grid grid-cols-1 Tablet:grid-cols-2 Laptop:grid-cols-2 gap-2 Laptop:gap-12 py-4 Laptop:py-6">
                        <div class="flex items-center gap-2">
                            <div class="Laptop:w-[38%] w-[40%]">
                                <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Photo<span
                                        class="text-Indicates">*</span></h2>
                                        <input type="file" name="photo">
                                        @error('photo')<p style="color:red"> {{$message}} </p> @enderror

                            </div>
                            
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="Laptop:w-[38%] w-[40%]">
                                <h2 class="text-sm Laptop:text-base font-medium leading-[29px]">Resident Visa<span
                                        class="text-Indicates">*</span></h2>
                                        <input type="file" name="resident">
                                        @error('resident')<p style="color:red"> {{$message}} </p> @enderror
                            </div>

                        </div>
                    </div>
                    
                </div>

                <div id="role_info">
                    <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
                        <div>
                            <label for="department" class="text-sm Laptop:text-base">Department</label>
                            <input type="text" id="department" name="department" placeholder="Department"
                                class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                        </div>
                        <div>
                            <label for="role" class="text-sm Laptop:text-base">Role</label>
                            <select id="role" name="role" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs">
                                <option value="Sales">Sales</option>
                                <option value="Marketing">Marketing</option>
                                <option value="HR">HR</option>
                                <option value="Admin">Admin</option>
                                <option value="Accounts">Accounts</option>
                                <option value="IT">IT</option>
                                <option value="PRO">PRO</option>
                                <option value="General">General</option>
                                <option value="Security">Security</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Data Entry">Data Entry</option>
                            </select>
                        </div>
                    </div>
                    
                </div>

                <div class="text-right mt-12">
                    <button type="button" id="basic_info_btn" onclick="showInfo()"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        and continue</a>

                </div>

                <div class="text-right mt-12">
                    <button type="button" id="passport_info_btn" onclick="passportInfo()"
                        class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save
                        and continue</a>
                </div>

                <div class="text-right mt-12">
                    <button type="submit" id="role_info_btn" class="px-10 py-3 Laptop:text-sm text-base font-medium leading-5 tracking-wide bg-Primary-c text-White-c rounded-full font-roboto">Save and continue</a>
                </div>


            </form>
        </div>

    </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>


     
        function showInfo(infoBtn, infoId) {

            document.getElementById('basic_info_btn').style.display = 'none';
            document.getElementById('passport_info_btn').style.display = 'block';
            document.getElementById('role_info_btn').style.display = 'none';
            document.getElementById('basic_info').style.display = 'none';
            document.getElementById('passport_info').style.display = 'block';
            document.getElementById('role_info').style.display = 'none';
        }

        function passportInfo(infoBtn, infoId) {
            document.getElementById('basic_info_btn').style.display = 'none';
            document.getElementById('passport_info_btn').style.display = 'none';
            document.getElementById('role_info_btn').style.display = 'block';
            document.getElementById('basic_info').style.display = 'none';
            document.getElementById('passport_info').style.display = 'none';
            document.getElementById('role_info').style.display = 'block';
        }

        // Show the basic info section by default
        // showInfo('basic_info');
    </script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.min.js"></script>
    <script>
        var au_phone = window.intlTelInput(document.querySelector("#phone_number_adminuser"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var au_phone_full_number = phone.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='phone_number_adminuser'").val(au_phone_full_number);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function uae_residents() {
            if ($("#uae_residents").val().toLowerCase() === 'yes') {
                $('.box').css('display', 'block');
            } else {
                $('.box').css('display', 'none');
            }
        }

        $("#uae_residents").change(uae_residents);




            document.getElementById('generatePassword').addEventListener('click', function() {
                // Define characters to be used in the random password
                const characters =
                    'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|:<>?-=[]\;,./';

                // Define length of the random password
                const passwordLength = 10;

                let password = '';
                for (let i = 0; i < passwordLength; i++) {
                    const randomIndex = Math.floor(Math.random() * characters.length);
                    password
                        += characters.charAt(randomIndex);
                } // Set the generated password to the password input field
                document.getElementById('password').value = password;
            });
        });
    </script>
@endsection