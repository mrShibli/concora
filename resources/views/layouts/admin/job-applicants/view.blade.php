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
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a
                    href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants /</a> <a
                    href="" class="text-xs text-gray-500 hover:underline">View</a>
            </div>
        </div>

        <div class=" bg-White-c p-2 py-4 pb-8 Tablet:p-8   Laptop:py-12  shadow-sm rounded-xl ">

            <!--  -->


            <!--  -->
            <div id="Basic">
                <div id="personal" class="top_buttons ">
                    <ul class="flex items-center gap-1 Laptop:gap-2 flex-wrap mb-4 Tablet:mb-10">
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded-full mr-1 Tablet:mr-6 Laptop:mr-10">Back</a>
                        </li>
                        <li> <a href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Edit/Update</a>
                        </li>
                        <li class="relative" id="i_interview"> <a href="#"
                                class="relative px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Invite
                                Interview <i class="fas fa-caret-down"></i> </a>
                            <ul class="absolute dropdown top-full  Tablet:pt-2 pb-2 rounded-b w-full left-0 bg-[#EEE915]">
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">In
                                        Person</a></li>
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Online</a>
                                </li>
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Video</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915]  text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">New
                                Entry</a></li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Payment</a>
                        </li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Visa
                                Status</a></li>
                    </ul>







                </div>

                <div class="flex gap-6 flex-wrap my-6">
                    <table class="w-[62%] Tablet:w-[70%]">

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Submitted</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                {{ $applicant->created_at->format('F d, Y') }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Nationality</td>
                            <td class="text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 flex gap-2">
                                {{ $applicant->nationality }} </td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Full Name</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->first_name }}
                                {{ $applicant->last_name }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Date Of Birth</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->date_of_birth }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Passport No</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->passportno }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Date Of Expiry</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->date_of_expiry }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Email</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->email }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Contact No</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->contact_number }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Whatsapp</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->whatsapp_number }}</td>
                        </tr>

                    </table>

                    <div class="images w-[30%] Tablet:w-[25%]">
                        <div class="">
                            <div class="info ">
                                <div class="image flex items-center gap-6 ">
                                    <img src="{{ asset('applicants/' . $applicant->applicant_image) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>

                                </div>

                                <p class="text-[10px] Tablet:text-xs mt-1">Photo (White Background)</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->applicant_passport) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>

                                <p class="text-[10px] Tablet:text-xs mt-1">Psspport (1st Page)</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->specialpage) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Passport (2nd Page)</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="license" id="Dri" style="display: none">
                <div id="personal" class="top_buttons ">
                    <ul class="flex items-center gap-1 Laptop:gap-2 flex-wrap mb-4 Tablet:mb-10">
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded-full mr-1 Tablet:mr-6 Laptop:mr-10">Back</a>
                        </li>
                        <li> <a href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Edit/Update</a>
                        </li>
                        <li class="relative" id="i_interview"> <a href="#"
                                class="relative px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Invite
                                Interview <i class="fas fa-caret-down"></i> </a>
                            <ul class="absolute dropdown top-full  Tablet:pt-2 pb-2 rounded-b w-full left-0 bg-[#EEE915]">
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">In
                                        Person</a></li>
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Online</a>
                                </li>
                                <li><a href=""
                                        class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Video</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915]  text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">New
                                Entry</a></li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Payment</a>
                        </li>
                        <li> <a href=""
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Visa
                                Status</a></li>
                    </ul>







                </div>

                <div class="flex gap-2 flex-wrap my-6">
                    <table class="w-[60%] Tablet:w-[70%]">

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Submission ID</td>
                            <td class=" p-1.5 pl-2 text-xs Laptop:text-sm">SQR20247P</td>
                            <td></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Driving License (Home Country)</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm"></td>
                            <td></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Expiry Date</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm"></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Do you have UAE License</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">Yes / No</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Driving License (UAE)</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">
                                <p>File Opened</p>
                                <p> Applied</p>
                                <p>Theory Done</p>
                                <p>Road Test Done</p>
                            </td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Eye Test Date</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm"></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">UAE Resident Visa No</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm"></td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">SIM No</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">05##@#$@@@</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Bike Number</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">CSL-12</td>
                        </tr>

                    </table>

                    <div class="images w-[30%] Tablet:w-[25%]">
                        <div class="">
                            <div class="info ">
                                <div class="image flex items-center gap-6 ">
                                    <img src="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"
                                        alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">License Front</p>
                            </div>

                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"
                                        alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">License Back</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->UAE_DL_Front) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Front Part (UAE)</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->UAE_DL_Back) }} " alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <a href="" class="text-xs Tablet:text-sm">View </a>
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Back Side (UAE)</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <!--  -->

            <div class="bottom_buttons flex items-center justify-center gap-1 Laptop:gap-2 flex-wrap mt-4 Tablet:mt-10">

                <button onclick="ShowBasic()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#89d6f7] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Personal
                    info</button>
                <button onclick="Showlin()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#1EB57D] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Driving
                    License</button>
                <button onclick="Showjob()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#21A3F1]  text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Job
                    Status</button>
                <button
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#c2c3c6] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Dues/Cancel</button>
                <button
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#F7984C] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Salary</button>
            </div>

            <!--  -->

            <div class=" mt-8 flex justify-between">

                <a href="{{ route('record.previous', ['id' => $applicant->id]) }}"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Previous</a>

                <a href="{{ route('record.next', ['id' => $applicant->id]) }}"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Next</a>

            </div>

        </div>

    </div>
@endsection

@section('script')
    @parent
    <!-- Lightbox JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        let no = 1;

        function previous() {

            no--;
            if (no == 2) {
                Showlin();
            } else if (no == 3) {
                Showjob();
            } else if (no == 4) {
                ShowPass();
            } else if (no == 5) {
                ShowDri();
            } else {
                no = 1;
            }
        }

        function next() {

            no++;
            if (no == 2) {
                Showlin();
            } else if (no == 3) {
                Showjob();
            } else if (no == 4) {
                ShowPass();
            } else if (no == 5) {
                ShowDri();
            } else {
                no = 1;
            }

        }

        function ShowBasic() {
            $('#personal').css('display', 'block');
            $('#Basic').css('display', 'block');
            $('#license').css('display', 'none');
            $('#jobstatus').css('display', 'none');
            $('#card').css('display', 'none');
            $('#due').css('display', 'none');
            $('#salary').css('display', 'none');
        }

        function Showlin() {
            $('#personal').css('display', 'none');
            $('#license').css('display', 'block');
            $('#jobstatus').css('display', 'none');
            $('#card').css('display', 'none');
            $('#due').css('display', 'none');
            $('#salary').css('display', 'none');
            $('#Basic').css('display', 'none');

        }

        function Showjob() {
            $('#personal').css('display', 'none');
            $('#license').css('display', 'none');
            $('#jobstatus').css('display', 'block');
            $('#card').css('display', 'none');
            $('#due').css('display', 'none');
            $('#salary').css('display', 'none');
        }

        function ShowPass() {
            $('#personal').css('display', 'none');
            $('#license').css('display', 'none');
            $('#jobstatus').css('display', 'none');
            $('#card').css('display', 'block');
            $('#due').css('display', 'none');
            $('#salary').css('display', 'none');
        }

        function ShowDri() {
            $('#personal').css('display', 'none');
            $('#license').css('display', 'none');
            $('#jobstatus').css('display', 'none');
            $('#card').css('display', 'none');
            $('#due').css('display', 'block');
            $('#salary').css('display', 'block');
        }
    </script>
@endsection
