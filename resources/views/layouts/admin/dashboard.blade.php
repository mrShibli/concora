<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/DVTx2Mvm.css">

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
                                src="{{ asset('logo-white-full.png') }}" alt=""></a>

                        <nav class="navbar flex items-center gap-6">
                            <button id="HomeButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium menuactive">Home</button>
                            <button id="DashboardButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Dashboard</button>
                            <button id="AdministrationButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Administration</button>
                            <button id="" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Services</button>
                            <button id="ServicesButton" type="button"
                                class="text-white-c text-sm Tablet:text-base font-medium">Payment</button>
                        </nav>

                    </div>

                    <div class="search-bar w-24 Laptop:w-72  ">
                        <input type="search" name="search" placeholder="Search..." id=""
                            class=" p-1 Laptop:p-2.5 rounded text-[10px] Laptop:text-base outline-none  w-full border focus:border-[#0000ff17]">
                    </div>

                    <div class="flex items-center gap-2 Tablet:gap-6 Laptop:gap-12 ">
                        <h2 class="text-white-c text-[10px] Tablet:text-base font-bold">More</h2>

                        <div id="users" class=" bg-white-c">
                            <ul
                                class="flex items-center gap-2 Tablet:gap-4 px-4 py-1.5 Tablet:px-4 Laptop:px-6 Tablet:py-2">
                                <li class="item menu-item relative cursor-pointer"><span
                                        class="fa-solid fa-qrcode h-6 w-6 leading-6 Tablet:h-8 Tablet:w-8 Tablet:leading-8 text-center Laptop:w-10 Laptop:h-10 Laptop:leading-6 bg-white-c text-black-c p-2 rounded-full shadow-xl"></span>
                                    {{-- <ul
                    class="submenu dashboard absolute top-full p-4 px-7 Tablet:px-8  right-0  bg-white-c rounded shadow-xl w-64 Tablet:w-72 Laptop:w-[26rem] hidden">

                    <li class="mb-4">
                      <h2 class=" text-black-c font-medium ttl-bfr1 text-base Tablet:text-sm Laptop:text-xl"> Invoices
                        Paid.</h2>
                      <div class="bl-bfr">
                        <div class="flex items-center gap-2 Tablet:gap-3 py-2">
                          <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                            src="assets/image/man.jpg" alt="">
                          <div class="content">
                            <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">
                              Lorem ipsum dolor sit amet dolor sit amet elit.</h5>
                          </div>
                        </div>
                        <p class="date text-[10px] Tablet:text-sm text-gray-400 font-normal">10:20AM Today</p>
                      </div>

                    </li>
                    <li class="mb-4">
                      <h2 class=" text-black-c font-medium ttl-bfr2 text-base Tablet:text-sm Laptop:text-xl"> Project
                        Created.</h2>
                      <div class="bl-bfr">
                        <div class="flex items-center gap-2 Tablet:gap-3 py-2">
                          <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                            src="assets/image/man.jpg" alt="">
                          <div class="content">
                            <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                          </div>
                        </div>
                        <p class="date text-[10px] Tablet:text-sm text-gray-400 font-normal">10:20AM Today</p>
                      </div>


                    </li>
                    <li class="mb-4">
                      <h2 class=" text-black-c font-medium ttl-bfr3 text-base Tablet:text-sm Laptop:text-xl"> Task
                        assigned.</h2>

                    </li>


                    <div class="button mt-5">
                      <a href=""
                        class="mt-6 block rounded text-white-c text-center  bg-blue-c py-2 px-4 text-sm Tablet:text-base">View
                        all</a>
                    </div>


                  </ul> --}}
                                </li>

                                <li class="item menu-item cursor-pointer relative"> <span
                                        class="fas fa-bell h-8 w-8 leading-4 Tablet:h-8 Tablet:w-8 Tablet:leading-8 text-center Laptop:w-10 Laptop:h-10 Laptop:leading-6 bg-white-c text-black-c p-2 rounded-full shadow-xl"></span>

                                    {{-- <ul
                    class="submenu notification absolute top-full p-4 right-0  bg-white-c rounded shadow-xl w-60 Tablet:w-72 Laptop:w-96 hidden">
                    <li class="flex items-center gap-2 Tablet:gap-3 py-2 border-b">
                      <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                        src="assets/image/man.jpg" alt="">
                      <div class="content">
                        <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="date text-[10px] Tablet:text-sm"> Today , 7:30pm</p>
                      </div>
                    </li>
                    <li class="flex items-center gap-2 Tablet:gap-3 py-2 border-b">
                      <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                        src="assets/image/man.jpg" alt="">
                      <div class="content">
                        <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="date text-[10px] Tablet:text-sm"> Today , 7:30pm</p>
                      </div>
                    </li>
                    <li class="flex items-center gap-2 Tablet:gap-3 py-2 border-b">
                      <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                        src="assets/image/man.jpg" alt="">
                      <div class="content">
                        <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="date text-[10px] Tablet:text-sm"> Today , 7:30pm</p>
                      </div>
                    </li>
                    <li class="flex items-center gap-2 Tablet:gap-3 py-2">
                      <img class="w-10 h-8 rounded  Tablet:w-16 Tablet:h-14 Laptop:w-20 Laptop:h-16 object-cover"
                        src="assets/image/man.jpg" alt="">
                      <div class="content">
                        <h5 class="title text-xs Tablet:text-sm Laptop:text-base font-medium mb-1 Tablet:mb-1.5 ">Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="date text-[10px] Tablet:text-sm"> Today , 7:30pm</p>
                      </div>
                    </li>

                    <div class="button mt-5">
                      <a href=""
                        class="mt-6 block rounded text-white-c text-center  bg-blue-c py-2 px-4 text-sm Tablet:text-base">View
                        all</a>
                    </div>


                  </ul> --}}

                                </li>
                                <li class="item menu-item relative cursor-pointer"> <img style="width: 70px;"
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

        <div class="container mx-auto" id="DashboardView">

            <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0">

                <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                    <h4 class="text-base mb-4">Recent Activities</h4>
                    <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">

                        <a href="{{ route('applicants.index') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">{{ $JobApplicant }}</h2>
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
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">6</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Email Verification</p>
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

        <div class="container mx-auto" id="AdministrationView">

          <div class="container mx-auto">

            <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0 ">
      
              <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                <h4 class="text-base mb-4">Recent Activities</h4>
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">
      
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
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">
      
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
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4  gap-2 Tablet:gap-3 Laptop:gap-4">
      
      
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


        {{-- <div class="container mx-auto" id="ServicesView">
            <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0">

                <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                    <h4 class="text-base mb-4">Recent Activities</h4>
                    <div
                        class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">

                        <a href="{{ route('applicants.index') }}">
                            <div class="border border-gray-300 rounded-xl p-2 px-4">
                                <div class="flex items-center justify-between mb-4">
                                    <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
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
                        <div class="border border-gray-300 rounded-xl p-2 px-4">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-black-c text-sm Tablet:text-base">6</h2>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <p class="text-xs Tablet:text-sm text-black-c">Email Verification</p>
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
        </div> --}}

        <div class="container mx-auto" id="PaymentView">
          <div class="container mx-auto">

            <div class="box-container py-4  Tablet:pt-8 p-2 Laptop:p-0 ">
      
              <div class="box bg-white-c p-4 Tablet:p-6 rounded-xl mb-6">
                <h4 class="text-base mb-4">Recent Activities</h4>
      
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4   ">
                  <div class="border border-gray-300 rounded-xl p-2 px-4">
                    <div class="flex items-center justify-between mb-4">
                      <h2 class="text-black-c text-sm Tablet:text-base">5</h2>
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <p class="text-xs Tablet:text-sm text-black-c">New Payment </p>
                  </div>
                  <div class="border border-gray-300 rounded-xl p-2 px-4">
                    <div class="flex items-center justify-between mb-4">
                      <h2 class="text-black-c text-sm Tablet:text-base">3</h2>
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <p class="text-xs Tablet:text-sm text-black-c">Dues Payment</p>
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
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">
      
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
                <div class="grid grid-cols-2 Tablet:grid-cols-3 Laptop:grid-cols-4 gap-2 Tablet:gap-3 Laptop:gap-4">
      
      
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



    <script src="assets/js/main.js"></script>


    <script>
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
    </script>
</body>

</html>
