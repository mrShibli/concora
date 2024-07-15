<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CONQUEROR Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('newAdmin/css/main.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @yield('styles')

</head>

<body>

    <div class="header bg-White-c p-3   Laptop:py-3  shadow-md rounded-b-3xl top-0 right-0 left-0 absolute w-full z-10">
        <div class="container mx-auto flex justify-between items-center ">
            <div class="logo">
                <a href="{{ route('dashboard') }}" id="logo"><img
                        class="w-20 Laptop:w-[170px] Laptop:h-[60px] object-contain Tablet:w-[120px]"
                        src="{{ asset('assets/img/logo.png') }}" alt=""></a>
            </div>

            <div class="search-bar w-28 Laptop:w-72">
                <input type="search" name="search" placeholder="search..." id=""
                    class=" p-1 Laptop:p-2.5 bg-gray-100 rounded text-[10px] Laptop:text-xs  w-full focus:border-[#0000ff17]">
            </div>

            <div class="admin flex gap-2 Laptop:gap-12 Tablet:gap-8 items-center">
                <div class="notification-bar">
                    <img src="{{ asset('newAdmin/image/ic_round-notifications.png') }}" alt=""
                        class="h-5 Laptop:h-7">
                </div>
                <div class="users">
                    <ul>
                        <li class=" relative menu flex gap-0.5 Laptop:gap-2 items-center  ">
                            <a href=""
                                class="flex gap-1 Laptop:gap-2 items-center text-[11px] Tablet:text-sm Laptop:text-base"><img
                                    class=" h-6 w-6 Laptop:h-10  Laptop:w-10 rounded-full"
                                    src="{{ asset('newAdmin/image/user.png') }}" alt=""> Admirra John</a> <i
                                class="fas fa-caret-down text-xs Tablet:text-base"></i>

                            <ul class="bg-White-c shadow-xl rounded pl-2 pb-4 px-4 pt-4 absolute top-full submenu ">
                                <li class="flex items-center gap-2"><a href=""
                                        class="text-xs Tablet:text-sm  font-medium flex items-center gap-2 Tablet:gap-3 mb-3"><i
                                            class="fa-regular fa-user text-xs Tablet:text-sm"></i> Profile</a></li>
                                <li><a href=""
                                        class="text-xs Tablet:text-sm  font-medium flex items-center gap-2 Tablet:gap-3 mb-3"><i
                                            class="fas fa-gear text-xs Tablet:text-sm"></i> Account Settings</a></li>
                                <li>
                                    {{-- <a href=""
                                        class="text-xs Tablet:text-sm  font-medium flex items-center gap-2 Tablet:gap-3"><i
                                            class="fa-solid fa-arrow-right-from-bracket text-xs Tablet:text-sm"></i> Log
                                        Out</a> --}}

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="text-xs Tablet:text-sm  font-medium flex items-center gap-2 Tablet:gap-3"><i
                                                    class="fa-solid fa-arrow-right-from-bracket text-xs Tablet:text-sm"></i>
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

    <div class="admin-panel bg-Dull-c pb-4 relative">

        <div id="menu" class="fa-solid fa-align-left"></div>

        <div class="container mx-auto">


            <div
                class="left-side w-[200px] Tablet:w-[220px] Laptop:w-[250px] ml-[-38px] bg-White-c absolute top-0  bottom-0 h-[100%] pt-20 Laptop:pt-[5.7rem]">


                <div class="dashboard">
                    <ul>
                        <li class="bg-Primary-c px-4  pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center gap-2 text-White-c text-sm Laptop:text-base py-3"><img
                                    src="assets/image/dashboard.png" alt=""
                                    class=" w-5 Laptop:w-6 h-auto">Dashboard</a>
                        </li>
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/space_dashboard (1).png" alt=""
                                    class=" w-5 Laptop:w-5 ">Job Board</a>
                        </li>
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="{{ route('admin.users.index') }}"
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/person.png" alt="" class=" w-5 Laptop:w-5 ">Users</a>
                        </li>
                        {{-- <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="l"
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/person.png" alt="" class=" w-5 Laptop:w-5 ">Applicants</a>
                        </li> --}}
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href=""
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/display_settings.png" alt=""
                                    class=" w-5 Laptop:w-5 ">Website Settings</a>
                        </li>
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href=""
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/settings (2).png" alt=""
                                    class=" w-5 Laptop:w-5 ">Slider Settings</a>
                        </li>
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="{{ route('admin.contact') }}"
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/contact_page.png" alt=""
                                    class=" w-5 Laptop:w-5 ">Contacts</a>
                        </li>
                        <li class="hover:bg-Primary-c px-4 pl-6 Laptop:pl-10 mb-2 Laptop:mb-3">
                            <a href="#"
                                class="flex items-center gap-2 text-Dull-c2 hover:text-White-c text-sm Laptop:text-base py-3 hover:brightness-200"><img
                                    src="assets/image/format_quote.png" alt=""
                                    class=" w-5 Laptop:w-5 ">Qautations</a>
                        </li>
                    </ul>
                </div>
            </div>


            @yield('content')


        </div>


    </div>

    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

    {{-- <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script> --}}


    <script src="https://cdn.tiny.cloud/1/8fai9pbxzi4qrv4ijrbj7cmdep8quwby2p1yo0li32n829jj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinymce_init.js') }}"></script>
    @yield('script')

</body>

</html>
