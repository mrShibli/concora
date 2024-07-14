<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Conqueror Dashboard Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .is-invalid {
            border-color: #dc3545;
            /* Red border color for invalid input */
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            /* Red color for error messages */
            font-size: 0.875rem;
            /* 14px */
            margin-top: 0.25rem;
            /* 4px */
        }

        .alert-success {
            color: #155724;
            /* Dark green color for success messages */
            background-color: #d4edda;
            /* Light green background color for success messages */
            border-color: #c3e6cb;
            /* Border color for success messages */
            padding: 0.75rem 1.25rem;
            /* Padding for the success message */
            margin-bottom: 1rem;
            /* Margin bottom for the success message */
            border: 1px solid transparent;
            /* Transparent border for the success message */
            border-radius: 0.25rem;
            /* Border radius for the success message */
        }

        .mb10 {
            margin-top: 10px;
        }

        .login-form {
            background: url({{ asset('images/loginbg.jpg') }}) no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-attachment: fixed;
        }

        .login-form form {
            width: 385px;
            background: #fff;
            padding: 30px;
            border-radius: 7px;
        }

        .weblogo {
            background: #efefefc4;
            text-align: center;
            border-radius: 7px;
        }

        .login-form form .logo {
            width: 200px;
            background: none;
            padding: 7px;
            border-radius: 7px;
        }

        .login-form form h5 {
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            color: black;
            line-height: 1.6;
        }

        .login-form form label {
            display: block;
            margin-bottom: 6px;
            margin-top: 14px;
            font-size: 16px;
        }

        .login-form form input {
            width: 100%;
            padding: 12px 8px;
            border-radius: 7px;
            border: 1px solid #bebebe;
            outline: none;
        }

        .login-form form input:focus {
            border: 1px solid #FFA000;
        }

        .login-form form .btn {
            margin-top: 10px;
            background-color: #FFA000;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form form .forgot-pass {
            display: flex;
            gap: 2rem;
            margin-top: 20px;
        }

        .login-form form .forgot-pass a {
            margin-bottom: 10px;
            font-size: 15px;
            color: blue;
            text-decoration: none;
        }

        .login-form form .forgot-pass a:hover {
            text-decoration: underline;
        }

        .login-form form .forgot-pass div p {
            font-size: 13px;
            margin-bottom: 7px;
        }

        @media(max-width:968px) {

            .login-form form {
                width: 95%;
            }

            .login-form {
                display: block;
                width: auto;
                margin: 10px;
            }

            .imagearea img {
                width: 94%;
            }

        }

        @media(max-width:768px) {

            .login-form form {
                width: 95%;
            }

        }

        @media(max-width:450px) {

            .login-form form {
                width: 95%;
                padding: 15px 12px;
            }

            .login-form form h5 {
                font-size: 14px;
            }

            .login-form form label {
                margin-bottom: 7px;
                margin-top: 10px;
                font-size: 14px;
            }

            .login-form form .forgot-pass a {
                font-size: 13px;
            }

            .login-form form .forgot-pass div p {
                font-size: 11px;
            }
        }
    </style>
    @yield('styles')
</head>

<body>

    @yield('content')

    @yield('scripts')
</body>

</html>
