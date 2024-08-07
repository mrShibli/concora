<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conqueror Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('assets/DVTx2Mvm.css') }}">

    <style>
        .menuactive {
            background: #FFF46D;
            color: #231F20;
            padding: 7px 12px;
            border-radius: 7px;
        }



        /* Add media query for small screens */
        @media (max-width: 900px) {
            .menuactive {
                padding: 1rem 1.0rem !important;
                /* Increase padding for better touch targets */
                font-size: 1.2rem;
                /* Adjust font size for readability */
            }

            #users ul .item>span {
                box-shadow: 0 5px 10px #00000000 !important;
                margin-bottom: -6px;
            }

        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>

</head>

<body>

    <div class="main-wrapper  bg-light-c ">


        <header class="header Tablet:p-2 p-1 px-2 bg-blue-c">

            <div class="container mx-auto">

                <div class="flex items-center justify-between gap-2">

                    <div class="flex items-center gap-0 Laptop:gap-4">
                        <a href="#" id="menu-bar"
                            class="fas fa-align-left text-white-c text-[18px] ml-1  Tablet:hidden"></a>
                        <a href="/admin" id="logo" class="text-white-c"> <img
                                class=" ml-2 Tablet:ml-4 h-8 Tablet:h-16 Laptop:h-20 w-full object-contain"
                                src="{{ asset('dashboardlogo.png') }}" alt=""></a>

                        <nav class="navbar flex items-center gap-6">
                            {{-- <a href="{{ route('mainindex') }}" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Home</a> --}}
                            <a href="#" id="DashboardButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Dashboard</a>
                            @if (Auth::user()->role == 'user')
                                <a href="#" id="AdministrationButton" type="button"
                                    class="text-white-c text-sm Tablet:text-base font-medium disabled">Administration</a>
                            @else
                                <a href="#" id="AdministrationButton" type="button"
                                    class="text-white-c text-sm Tablet:text-base font-medium">Administration</a>
                            @endif
                            <a href="#" id="" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Services</a>
                            <a href="#" id="PaymentButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Payment</a>
                        </nav>

                    </div>

                    {{-- <div class="search-bar w-24 Laptop:w-72  ">
                        <input type="search" name="search" placeholder="Search..." id=""
                            class=" p-1 Laptop:p-2.5 rounded text-[10px] Laptop:text-base outline-none  w-full border focus:border-[#0000ff17]">
                    </div> --}}

                    <div class="flex items-center gap-2 Tablet:gap-6 Laptop:gap-12 ">
                        <h2 class="text-white-c text-[10px] Tablet:text-base font-bold">More</h2>

                        <div id="users" class=" bg-white-c">
                            <ul
                                class="flex items-center gap-2 Tablet:gap-4 px-4 py-1.5 Tablet:px-4 Laptop:px-6 Tablet:py-2">
                                <li class="item menu-item relative cursor-pointer"><span
                                        class="fa-solid fa-qrcode h-6 w-6 leading-6 Tablet:h-8 Tablet:w-8 Tablet:leading-8 text-center Laptop:w-10 Laptop:h-10 Laptop:leading-6 bg-white-c text-black-c p-2 rounded-full shadow-xl"></span>
                                </li>

                                <li class="item menu-item cursor-pointer relative"> <span
                                        class="fas fa-bell h-8 w-8 leading-4 Tablet:h-8 Tablet:w-8 Tablet:leading-8 text-center Laptop:w-10 Laptop:h-10 Laptop:leading-6 bg-white-c text-black-c p-2 rounded-full shadow-xl"></span>

                                </li>
                                <li class="item menu-item relative cursor-pointer"> <img style="width:auto;"
                                        class=" w-8 h-8 Tablet:w-8 Tablet:h-8 Laptop:w-10 Laptop:h-10 "
                                        src="{{ asset('newAdmin/image/user.png') }}" alt="">
                                    <ul
                                        class="submenu absolute top-full p-4 right-0  bg-white-c rounded shadow-xl w-40 Tablet:w-48 hidden">
                                        <li class="flex items-center gap-2"><a href=""
                                                class="text-xs Tablet:text-sm Laptop:text-base font-medium flex items-center gap-2 Tablet:gap-3 mb-3"><i
                                                    class="fa-regular fa-user text-xs Tablet:text-sm Laptop:text-base"></i>
                                                Profile</a></li>
                                        <li><a href=""
                                                class="text-xs Tablet:text-sm Laptop:text-base font-medium flex items-center gap-2 Tablet:gap-3 mb-3"><i
                                                    class="fas fa-gear text-xs Tablet:text-sm Laptop:text-base"></i>
                                                Account Settings</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="text-xs Tablet:text-sm Laptop:text-base font-medium flex items-center gap-2 Tablet:gap-3"><i
                                                        class="fa-solid fa-arrow-right-from-bracket text-xs Tablet:text-sm Laptop:text-base"></i>
                                                    Log
                                                    Out</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- --------------- -->

        <div class="container mx-auto " id="DashboardView" style="display: none;">

            <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0">

                <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                    <h4 class="text-base mb-4">Recent Activities</h4>
                    <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">

                        {{-- <a href="{{ route('applicants.index') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicant }}</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">New Entry Application</p>
                            </div>
                        </a> --}}

                        <a href="{{ route('applicants.index') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    @if (in_array(Auth::user()->email, [
                                            'shubash@conquerorgroup.ae',
                                            'kamal@conquerorgroup.ae',
                                            'nepal@conquerorgroup.ae',
                                            'santoshgirisir7@gmail.com',
                                        ]))
                                        <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicantNepal }}</h2>
                                    @elseif (Auth::user()->email === 'india@conquerorgroup.ae')
                                        <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicantIndia }}</h2>
                                    @else
                                        <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicant }}</h2>
                                    @endif
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">New Entry Application</p>
                            </div>
                        </a>



                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">5</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Invite for Interview</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Payment Received for Visa</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Visa Processed</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Entry Visa Issued</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Medical Test Application</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">EID Application</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">RTA File Opne</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Resident Visa Issued</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">EID Received</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">9</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Bike Issued</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">12</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Duty Joined</p>
                        </div>

                    </div>

                </div>


                <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                    <h4 class="text-base mb-4">Pending Activities</h4>
                    <div
                        class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4 ">

                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Edit/Update Approval</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Credit Req Approval</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Service Req Approval</p>
                        </div>
                        <a href="{{ route('applicants.notverified') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicantOtpNotVerified }}
                                    </h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Email Verification</p>
                            </div>
                        </a>
                        <a href="{{ route('applicants.receivePayment') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Receive Payment</p>
                            </div>
                        </a>



                    </div>

                </div>


                <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                    <h4 class="text-base mb-4">Quick Actions</h4>
                    <div
                        class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">


                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Pakistan</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">7</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Nepal</p>
                        </div>
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">10</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">India</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container mx-auto" id="AdministrationView" style="display: none;">

            <div class="container mx-auto">

                <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0 ">

                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Recent Activities</h4>
                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">

                            <a href="{{ route('admin.users.index') }}">
                                <div class="border border-gray-300 rounded-xl p-2 px-4">
                                    <div class="flex items-center justify-between mb-4">
                                        <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                    <p class="text-xs Tablet:text-sm text-black-c">New User</p>
                                </div>
                            </a>

                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Manager</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">7</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Approval Req</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Return for Modification</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">5</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Role Change/Update</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Absconding/Cance</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Employee Letter Req
                                </p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">File Transfer</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">24</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Salary Issued</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Employe Loan </p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">11</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Payment</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">12</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">SIM Issued</p>
                            </div>

                        </div>

                    </div>


                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Pending Activities</h4>
                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">

                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">User Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Req Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Service Req Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Email Change</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Receive Payment</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Receive Payment</p>
                            </div>



                        </div>

                    </div>


                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Quick Actions</h4>
                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">


                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Pakistan</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">7</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Nepal</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">10</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">India</p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>


        <div class="container mx-auto" id="PaymentView" style="display: none;">
            <div class="container mx-auto">

                <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0 ">

                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Recent Activities</h4>

                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4   ">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">5</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">New Payment </p>
                            </div>
                            {{-- <a href="{{ route('applicants.duesPayment') }}">
                                <div class="border border-gray-300 rounded-xl p-2 px-4">
                                    <div class="flex items-center justify-between mb-4">
                                        <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicant }}</h2>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                    <p class="text-xs Tablet:text-sm text-black-c">Dues Payment</p>
                                </div>
                            </a> --}}
                            <a href="{{ route('applicants.duesPayment') }}">
                                <div class="border border-gray-300 rounded-xl p-2 px-4">
                                    <div class="flex items-center justify-between mb-4">
                                        @if (in_array(Auth::user()->email, [
                                                'shubash@conquerorgroup.ae',
                                                'kamal@conquerorgroup.ae',
                                                'nepal@conquerorgroup.ae',
                                                'santoshgirisir7@gmail.com',
                                            ]))
                                            <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicantNepal }}
                                            </h2>
                                        @elseif (Auth::user()->email === 'india@conquerorgroup.ae')
                                            <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicantIndia }}
                                            </h2>
                                        @else
                                            <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicant }}</h2>
                                        @endif
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                    <p class="text-xs Tablet:text-sm text-black-c">Dues Payment</p>
                                </div>
                            </a>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">7</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Approval Req</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Return for Modification</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Employe Loan </p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">11</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Payment</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Advance Deposit</p>
                            </div>

                        </div>

                    </div>


                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Pending Activities</h4>
                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">

                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">4</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">User Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Credit Req Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">1</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Service Req Approval</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Email Change</p>
                            </div>

                            <a href="{{ route('applicants.receivePayment') }}">
                                <div class="border border-gray-300 rounded-xl p-2 px-4">
                                    <div class="flex items-center justify-between mb-4">
                                        <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                    <p class="text-xs Tablet:text-sm text-black-c">Receive Payment</p>
                                </div>
                            </a>

                            {{-- <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Receive Payment</p>
                            </div> --}}



                        </div>

                    </div>


                    <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                        <h4 class="text-base mb-4">Quick Actions</h4>
                        <div
                            class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">


                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">2</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Pakistan</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">7</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">Nepal</p>
                            </div>
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">10</h2>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <p class="text-xs Tablet:text-sm text-black-c">India</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>



    <script src="{{ asset('assets/js/main.js') }}"></script>


    {{-- <script>
        document.getElementById('HomeButton').addEventListener('click', function() {
            showView('DashboardView', 'HomeButton');
        });
        document.getElementById('DashboardButton').addEventListener('click', function() {
            showView('DashboardView', 'DashboardButton');
        });
        document.getElementById('AdministrationButton').addEventListener('click', function() {
            showView('AdministrationView', 'AdministrationButton');
        });
        document.getElementById('ServicesButton').addEventListener('click', function() {
            showView('ServicesView', 'ServicesButton');
        });
        document.getElementById('PaymentButton').addEventListener('click', function() {
            showView('PaymentView', 'PaymentButton');
        });

        function showView(viewId, buttonId) {
            const views = ['DashboardView', 'AdministrationView', 'ServicesView', 'PaymentView'];
            const buttons = ['HomeButton', 'DashboardButton', 'AdministrationButton', 'ServicesButton', 'PaymentButton'];

            views.forEach(function(view) {
                document.getElementById(view).style.display = view === viewId ? 'block' : 'none';
            });

            buttons.forEach(function(button) {
                document.getElementById(button).classList.remove('menuactive');
            });

            document.getElementById(buttonId).classList.add('menuactive');
        }
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initial setup
            const defaultView = document.getElementById('DashboardView');
            const defaultButton = document.getElementById('DashboardButton');

            const views = {
                'DashboardButton': document.getElementById('DashboardView'),
                'AdministrationButton': document.getElementById('AdministrationView'),
                'PaymentButton': document.getElementById('PaymentView')
            };

            // Function to hide all views
            function hideAllViews() {
                for (let key in views) {
                    views[key].style.display = 'none';
                }
            }

            // Hide all views except default
            hideAllViews();
            defaultView.style.display = 'block';
            defaultButton.classList.add('menuactive');

            // Add event listeners to buttons
            for (let buttonId in views) {
                const button = document.getElementById(buttonId);
                if (button) {
                    button.addEventListener('click', function() {
                        hideAllViews();
                        views[buttonId].style.display = 'block';
                        for (let btnId in views) {
                            document.getElementById(btnId).classList.remove('menuactive');
                        }
                        button.classList.add('menuactive');
                    });
                } else {
                    console.error(`Button with ID ${buttonId} not found.`);
                }
            }
        });
    </script>

</body>

</html>
