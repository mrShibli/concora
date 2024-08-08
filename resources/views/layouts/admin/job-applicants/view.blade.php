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

        form.w-\[500px\].bg-White-c.shadow-md.rounded.py-5 {
            z-index: 100;
        }

        #videointerview {
            display: none;
            /* Initially hidden */
        }

        #onlineinterview {
            display: none;
            /* Initially hidden */
        }

        #personinterview {
            display: none;
            /* Initially hidden */
        }

        .cross:hover {
            color: red;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    {{-- interview for online --}}
    <div id="onlineinterview">
        <div class="flex items-center justify-center w-full  bg-[#0000009f] absolute top-0 left-0 right-0 bottom-0">

            <form method="POST" action="{{ route('interview.submit', ['id' => $applicant->id]) }}"
                class="w-[500px] bg-White-c shadow-md rounded py-5">
                <div class="flex items-center justify-between px-4 pb-4">
                    <h5 class="text-base">Online Interview</h5>
                    <div id="cross" class="fas fa-times text-gray-400"></div>
                </div>

                <div class="border"></div>

                <div class=" p-4">

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Online Meet/Zoom Link</label>
                        <input type="text" name="meetingurl"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Official Contact Number</label>
                        <input type="tel" name="contactNumber"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Message</label>
                        <input type="text" name="message"
                            class="w-full text-xs  pl-2 py-4 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Time Zone</label>
                        <input type="datetime-local" name="time"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-4">
                        <label for="" class="text-sm mb-2">Time Zone Counry</label>
                        <select name="zonecountry" required=""
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                            <option value="Dubai">Dubai</option>
                            <option value="India">India</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                        </select>
                    </div>

                    <input type="hidden" class="form-control" value="Online" id="methodperson" name="methodperson">

                    <div class="btn mt-8">
                        {{-- <a href=""
                            class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded">Submit</a> --}}
                        <input type="submit" class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded"
                            value="Submit">
                    </div>


                </div>
            </form>



        </div>
    </div>
    {{-- End online interview area --}}

    {{-- interview for person --}}
    <div id="personinterview">
        <div
            class="flex items-center justify-center w-full  bg-[#040000c0] z-[-1] opacity-9 absolute top-0 left-0 right-0 bottom-0">

            <form method="POST" action="{{ route('interview.submit', ['id' => $applicant->id]) }}"
                class="w-[500px] bg-White-c shadow-md rounded py-5">
                @csrf
                <div class="flex items-center justify-between px-4 pb-4">
                    <h5 class="text-base">In Person Interview</h5>
                    <div id="cross" class="fas fa-times text-gray-400"></div>
                    <span class="cross" id="crosspersoninterview">X</span>
                </div>

                <div class="border"></div>

                <div class="p-4">

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Address</label>
                        <input type="text" id="address" name="address"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Official Contact Number</label>
                        <input type="tel" name="Number"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Message</label>
                        <input type="text" name="message" id="message"
                            class="w-full text-xs  pl-2 py-4 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Time Zone</label>
                        <input type="datetime-local" name="time"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-4">
                        <label for="" class="text-sm mb-2">Time Zone Counry</label>
                        <select name="zonecountry" required=""
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                            <option value="Dubai">Dubai</option>
                            <option value="India">India</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                        </select>
                    </div>

                    <input type="hidden" class="form-control" value="methodperson" id="methodperson"
                        name="methodperson">

                    <div class="btn mt-8">
                        {{-- <a href=""
                            class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded">Submit</a> --}}
                        <input type="submit"
                            class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded" value="Submit">
                    </div>


                </div>
            </form>

        </div>
    </div>
    {{-- End online person area --}}

    {{-- Interview for video --}}
    <div id="videointerview">
        <div class="flex items-center justify-center w-full  bg-[#0000009f] absolute top-0 left-0 right-0 bottom-0">

            <form method="POST" action="{{ route('interview.submit', ['id' => $applicant->id]) }}"
                class="w-[500px] bg-White-c shadow-md rounded py-5">
                @csrf
                <div class="flex items-center justify-between px-4 pb-4">
                    <h5 class="text-base">Video Interview</h5>
                    <div id="cross" class="fas fa-times text-gray-400"></div>
                    <span class="cross" id="crossvideointerview">X</span>
                </div>

                <div class="border"></div>

                <div class=" p-4">

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Online Meet/Zoom Link</label>
                        <input type="text" name="meetingurl"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Official Contact Number</label>
                        <input type="tel" name="contactNumber"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Message</label>
                        <input type="text" name="message"
                            class="w-full text-xs  pl-2 py-4 border border-gray-200 rounded">
                    </div>

                    <div class="mb-2">
                        <label for="" class="text-sm mb-2">Time Zone</label>
                        <input type="datetime-local" name="time"
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                    </div>

                    <div class="mb-4">
                        <label for="" class="text-sm mb-2">Time Zone Counry</label>
                        <select name="zonecountry" required=""
                            class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                            <option value="Dubai">Dubai</option>
                            <option value="India">India</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                        </select>
                    </div>

                    <input type="hidden" class="form-control" value="video" id="methodperson" name="methodperson">

                    <div class="btn mt-8">
                        {{-- <a href=""
                            class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded">Submit</a> --}}
                        <input type="submit"
                            class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded" value="Submit">
                    </div>


                </div>
            </form>



        </div>
    </div>
    {{-- End Interview for video --}}

    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a
                    href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants /</a>
                <a href="" class="text-xs text-gray-500 hover:underline">View</a>
            </div>
        </div>

        <div class=" bg-White-c p-2 py-4 pb-8 Tablet:p-8   Laptop:py-12  shadow-sm rounded-xl ">

            <!--  -->
            <div class="top_buttons ">
                <ul class="flex items-center gap-1 Laptop:gap-2 flex-wrap mb-4 Tablet:mb-10">
                    <li> <a href=""
                            class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded-full mr-1 Tablet:mr-6 Laptop:mr-10">Back</a>
                    </li>

                    @if (Auth::user()->role == 'super_admin')
                        <li> <a href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Edit/Update</a>
                        </li>
                    @elseif(true)
                        <li> <a href="#"
                                class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded disabled">Edit/Update</a>
                        </li>
                    @endif

                    <li class="relative" id="i_interview"> <a href="#"
                            class="relative px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#EEE915] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Invite
                            Interview <i class="fas fa-caret-down"></i> </a>
                        <ul class="absolute dropdown top-full  Tablet:pt-2 pb-2 rounded-b w-full left-0 bg-[#EEE915]">
                            <li id="videoInterviewbtn"><a href="#"
                                    class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Video</a>
                            </li>
                            <li id="personInterviewbutton"><a href="#"
                                    class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">In
                                    Person</a></li>
                            <li id="onineInterviewbtn"><a href="#"
                                    class=" px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5  text-Black-c font-semibold text-[8px] Tablet:text-xs  rounded ">Online</a>
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

            <div id="Basic">

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
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm emailstatus"> {{ $applicant->email }}

                                @if ($applicant->otp_verified == 0)
                                    <img src="{{ asset('email-not-verified.svg') }}" width="25"
                                        style="margin-left: 5px;">
                                @endif

                                @if ($applicant->otp_verified == 1)
                                    <img src="{{ asset('email-verified.svg') }}" width="25"
                                        style="margin-left: 5px;">
                                @endif

                            </td>

                            </td>

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
                                    <img src="{{ asset('applicants/' . $applicant->applicant_image) }}"
                                        data-lightbox="image-set" data-title="Applicant Image"
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->applicant_image)
                                        <a href="{{ asset('applicants/' . $applicant->applicant_image) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif

                                </div>
                                <a class="text-xs Tablet:text-sm"
                                    href="{{ asset('applicants/' . $applicant->applicant_image) }}" download>Download
                                    Image</a>

                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->applicant_passport) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->applicant_passport)
                                        <a href="{{ asset('applicants/' . $applicant->applicant_passport) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif
                                </div>

                                <p class="text-[10px] Tablet:text-xs mt-1">Psspport (1st Page)</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->specialpage) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->specialpage)
                                        <a href="{{ asset('applicants/' . $applicant->specialpage) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Special Page</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="personal" style="display: none">

                <div class="flex gap-6 flex-wrap my-6">

                    <table class="w-[62%] Tablet:w-[70%]">

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Submission ID</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                {{ $applicant->submissionid }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Mother’s Name</td>
                            <td class="text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 flex gap-2">
                                {{ $applicant->mother_name }} </td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Father’s Name</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->father_name }}
                                {{ $applicant->last_name }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Marital Status</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->martialstatus }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">UAE Resident</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                {{ $applicant->uaeresident == 1 ? 'Yes' : 'No' }}</td>
                        </tr>
                        @if ($applicant->uaeresident == 1)
                            <tr class="border">
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Emirates ID</td>
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                    {{ $applicant->emiratesid }}</td>
                            </tr>
                            <tr class="border">
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Date of Expiry</td>
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                    {{ $applicant->emirates_expiry }}</td>
                            </tr>
                        @endif
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">NID/CNIC No</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->nidorcnicnumber }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Home Country Address</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->homeaddrss }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">State/Province</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->province }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">City/District</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->city }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Police Station</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->policeStation }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Post Office</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->zip }}</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Reference No</td>
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">
                                {{ in_array($applicant->reference, ['LS1994ND40', 'QM1990ZD12', 'WK1978SI41', 'GK1980MM51']) ? $applicant->reference : 'No' }}
                            </td>
                        </tr>

                    </table>

                    <div class="images w-[30%] Tablet:w-[25%]">
                        <div class="">
                            <div class="info ">
                                <div class="image flex items-center gap-6 ">

                                    <img src="{{ asset('applicants/' . $applicant->nid_cnic_front) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->nid_cnic_front)
                                        <a href="{{ asset('applicants/' . $applicant->nid_cnic_front) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif

                                </div>

                                <p class="text-[10px] Tablet:text-xs mt-1">NID/CNIC Front</p>
                            </div>
                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->nid_cnic_back) }}" alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->nid_cnic_back)
                                        <a href="{{ asset('applicants/' . $applicant->nid_cnic_back) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif
                                </div>

                                <p class="text-[10px] Tablet:text-xs mt-1">NID/CNIC Back</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div id="license" id="Dri" style="display: none">

                <div class="flex gap-2 flex-wrap my-6">
                    <table class="w-[60%] Tablet:w-[70%]">

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Submission ID</td>
                            <td class=" p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->submissionid }}</td>
                            <td></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Driving License (Home Country)</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->appli_dri_number }}</td>
                            <td></td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Expiry Date</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->appli_dri_expiry }}</td>
                        </tr>
                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">UAE License</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->have_uae_licence }}</td>
                        </tr>

                        @if ($applicant->have_uae_licence)
                            <tr class="border">
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">UAE Resident Visa No</td>
                                <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->UAE_Resident_Visa_No }}
                                </td>
                            </tr>
                            <tr class="border">
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">UAE License No</td>
                                <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->UAE_License_No }}</td>
                            </tr>

                            <tr class="border">
                                <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">SIM No</td>
                                <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">{{ $applicant->SIM_No }}</td>
                            </tr>
                        @endif

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Eye Test Date</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">N/A</td>
                        </tr>

                        <tr class="border">
                            <td class="border p-1.5 pl-2 text-xs Laptop:text-sm">Bike Number</td>
                            <td class="  p-1.5 pl-2 text-xs Laptop:text-sm">N/A</td>
                        </tr>

                    </table>

                    <div class="images w-[30%] Tablet:w-[25%]">

                        <div class="">

                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"
                                        alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->appli_dri_lisence_frontpart)
                                        <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_frontpart) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Driving License Front</p>
                            </div>

                            <div class="info  mt-3">
                                <div class="image flex items-center gap-6">
                                    <img src="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"
                                        alt=""
                                        class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                    <!-- Viewer Section -->
                                    @if ($applicant->appli_dri_lisence_backpart)
                                        <a href="{{ asset('applicants/' . $applicant->appli_dri_lisence_backpart) }}"
                                            class="text-xs Tablet:text-sm" target="_blank">View</a>
                                    @endif
                                </div>
                                <p class="text-[10px] Tablet:text-xs mt-1">Driving License Back</p>

                            </div>

                            @if ($applicant->have_uae_licence)
                                <div class="info ">
                                    <div class="image flex items-center gap-6 ">
                                        <img src="{{ asset('applicants/' . $applicant->UAE_DL_Front) }}" alt=""
                                            class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                        <!-- Viewer Section -->
                                        @if ($applicant->UAE_DL_Front)
                                            <a href="{{ asset('applicants/' . $applicant->UAE_DL_Front) }}"
                                                class="text-xs Tablet:text-sm" target="_blank">View</a>
                                        @endif
                                    </div>
                                    <p class="text-[10px] Tablet:text-xs mt-1">UAE DL Front</p>
                                </div>

                                <div class="info  mt-3">
                                    <div class="image flex items-center gap-6">
                                        <img src="{{ asset('applicants/' . $applicant->UAE_DL_Back) }}" alt=""
                                            class="w-8 h-10 object-contain Tablet:w-12 Tablet:h-14 Laptop:w-20 Laptop:h-20">
                                        <!-- Viewer Section -->
                                        @if ($applicant->UAE_DL_Back)
                                            <a href="{{ asset('applicants/' . $applicant->UAE_DL_Back) }}"
                                                class="text-xs Tablet:text-sm" target="_blank">View</a>
                                        @endif
                                    </div>
                                    <p class="text-[10px] Tablet:text-xs mt-1">UAE DL Back</p>
                                </div>
                            @endif


                        </div>

                    </div>
                </div>
            </div>


            <!--  -->

            <div class="bottom_buttons flex items-center justify-center gap-1 Laptop:gap-2 flex-wrap mt-4 Tablet:mt-10">

                <button onclick="ShowBasic()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#89d6f7] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Basic
                    Info</button>
                <button onclick="ShowPersonal()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#21A3F1]  text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Personal
                    Info</button>
                <button onclick="Showlin()"
                    class="px-2 py-1 Tablet:px-6 Tablet:py-2 Laptop:px-8 Laptop:py-2.5 bg-[#1EB57D] text-Black-c font-semibold text-[8px] Tablet:text-xs Laptop:text-sm rounded">Driving
                    License</button>
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
            $('#personal').css('display', 'none');
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


        function ShowPersonal() {
            $('#personal').css('display', 'block');
            $('#license').css('display', 'none');
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

    {{-- Video interview hide show --}}
    <script>
        document.getElementById('videoInterviewbtn').addEventListener('click', function() {
            var videoInterview = document.getElementById('videointerview');
            if (videoInterview.style.display === 'none' || videoInterview.style.display === '') {
                videoInterview.style.display = 'block';
            } else {
                videoInterview.style.display = 'none';
            }
        });

        document.getElementById('crossvideointerview').addEventListener('click', function() {
            var videoInterview = document.getElementById('videointerview');
            videoInterview.style.display = 'none';
        });
    </script>
@endsection
