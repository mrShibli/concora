<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/conqueror-logo.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CONQUEROR ASPIRATION LLC &#8211; Get the Best Quality</title>


    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- js-swiper link -->

    <!-- custom-css link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- responsive css link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/css/intlTelInput.css"> --}}


    <style>
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

        .sesmessage {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            font-size: 1.7rem;
            text-align: center;
            line-height: 2.3rem;
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

            .sesmessage {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            font-size: 2.1rem;
            text-align: center;
            line-height: 2.5rem;
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
    </style>


    {{-- Custom Styles Start --}}
    @yield('styles')
    {{-- Custom Styles Start --}}


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



    {{-- Custom Script Start --}}
    @yield('scripts')
    {{-- Custom Script end Here --}}


    <!-- js-links -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    {{-- popup js --}}



</body>

</html>
