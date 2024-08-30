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

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- js-swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom-css link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- responsive css link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Custom Styles Start --}}
    @yield('styles')
    {{-- Custom Styles Start --}}

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <style>
        .text-shadow {
            color: #ffffff;
            /* Text color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Horizontal offset, vertical offset, blur radius, shadow color */
        }

        /* Styles for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 0px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 888;
            overflow-y: scroll;
            /* Allow scrolling if content exceeds popup height */
            max-height: 97%;
            /* Limit max height to 90% of viewport height */
        }

        /* Styles for the overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 777;
        }

        .close-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #ec2222;
            z-index: 9999;
        }

        .error {
            border: 1px solid red !important;
        }

        .erromessage {
            font-size: 1.4rem;
            color: red;
            margin-top: 2px;

        }

        .allerror {
            color: red;
            text-align: center;
            font-size: 1.4rem;
            margin-bottom: 7px;
            text-align: left;
            padding: 5px;
        }

        .allerror li {
            margin-bottom: 7px;
            border: 1px solid rgb(202, 43, 43);
            padding: 10px;
        }


        .hero-slider {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently supported by most browsers */
        }

        .our-teams .swiper-wrapper {
            height: auto;
        }


        /* Media query for tablet and mobile */
        @media (max-width: 768px) {
            .popup {
                max-width: 90%;

            }

            .popup-form {
                padding: 1rem;
                /* Adjusted padding for smaller screens */
            }

            .popup-form h5,
            .popup-form h6 {
                font-size: 1.8rem;
                /* Adjusted font size for smaller screens */
            }

            .popup-form .p-form label {
                font-size: 1.4rem;
                /* Adjusted font size for smaller screens */
            }
        }

        .iti.iti--allow-dropdown.iti--show-flags.iti--inline-dropdown {
            width: 100%;
        }

        #scrollToTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            background-color: #506B96C4;
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        #scrollToTop:hover {
            background-color: #506B96;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        /* ------------------------------- */
        .contact {
            padding: 10px 10px;
            position: relative;
            background: rgba(0, 0, 0, 0.3);
        }

        .contact .bg-video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: -1;
        }

        .contact .form {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            border: none;
        }

        .contact .heading {
            text-align: center;
            font-size: 35px;
            color: #ffffff;
            margin-bottom: 0px;
            line-height: 1.6;
        }

        .contact .form h2 {
            font-size: 22px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        /* ----  */

        @media(max-width:450px) {

            .contact {
                background: url(frontend/images/bg.png) no-repeat;
                background-position: center;
                background-size: cover;
                height: 100vh;
                width: 100%;

            }


            .contact .bg-video {
                width: 100%;
                height: 100vh;
                background-size: cover;
                background-position: center;
            }

            .contact .heading {
                font-size: 20px;
            }
        }

        /* -----  */

        .contact .form .box {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .contact .form .box .bx {
            flex: 1 1 48%;
        }


        .contact .form label {
            font-size: 14px;
            color: #f9f9f9;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .contact .form input,
        .contact .form textarea {
            padding: 7px;
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid #333;
            color: white;
        }

        .contact .btn {
            background: #F89940 !important;
            font-weight: 500;
        }

        .contact .btn:hover {
            background: #dddddd !important;
            color: red;
            letter-spacing: .5px;
        }

        
    </style>

</head>

<body>


    @if (Session::has('message'))
        <section>
            <div
                style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.7rem;line-height:2.6rem;">
                {{ Session::get('message') }}
            </div>
        </section>
    @endif

    {{-- Main Content Start --}}
    @yield('content')
    {{-- Main Content End --}}


    <!-- Scroll to Top Button -->
    <button id="scrollToTop" title="Go to top">&#9650;</button>

    <!-- ----Footer end--- -->

    {{-- Custom Script Start --}}
    @yield('scripts')
    {{-- Custom Script end Here --}}

    <!-- js-links -->
    <script src="frontend/js/script.js'"></script>



    <script>
        // Get references to the popup and overlay elements
        var popup = document.getElementById('popup');
        var overlay = document.getElementById('overlay');

        // Get references to the open and close buttons
        var openButton = document.getElementById('openPopup');
        var openButton3 = document.getElementById('openPopupbtn3');
        var closeButton = document.getElementById('closePopup');

        // Function to open the popup
        function openPopup() {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }


        // Function to open the popup
        function openPopup3() {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }

        // Function to close the popup
        function closePopup() {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }

        // Event listener for the open button
        openButton.addEventListener('click', openPopup);
        openButton3.addEventListener('click', openPopup3);

        // Event listener for the close button
        closeButton.addEventListener('click', closePopup);

        // Close the popup if the overlay is clicked
        overlay.addEventListener('click', closePopup);
    </script>

    <script>
        function toggleMenudd() {
            var menum = document.querySelector('.ddmenu .navbarw ul');
            menum.classList.toggle('showw');
        }
    </script>




    <script>
        // Show or hide the scroll to top button based on scroll position
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            var scrollToTopBtn = document.getElementById("scrollToTop");

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        }

        // Scroll to top when button is clicked
        document.getElementById("scrollToTop").onclick = function() {
            scrollToTop();
        };

        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <!-- Newsletter email subcriptions -->
    <script type="text/javascript">
        // $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        $(document).ready(function() {
            $('#newsletterForm').submit(function(e) {
                e.preventDefault();

                // var formData = {
                //     email: $('#email').val(),
                // };
                var news_email = $("#news_email").val();


                $.ajax({
                    type: 'POST',
                    url: '{{ route('store.newsletter') }}', // Laravel route for subscription
                    data: {
                        news_email: news_email,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        // Handle success response, like displaying a success message
                        if (data) {

                            // Clear the input box
                            $('#news_email').val('');

                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',

                                showConfirmButton: false,
                                timer: 3000
                            })
                            if ($.isEmptyObject(data.error)) {

                                Toast.fire({
                                    type: 'success',
                                    icon: 'success',
                                    title: data.success,
                                })

                            } else {

                                Toast.fire({
                                    type: 'error',
                                    icon: 'error',
                                    title: data.error,
                                })
                            }

                        }

                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.errors;
                        if (errors) {
                            // Display validation errors
                            console.error('Validation errors:', errors);
                        } else {
                            console.error('Subscription error:', error);
                        }
                    }
                });
            });
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66291f4ea0c6737bd12fd0de/1hs8a4ja8';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
