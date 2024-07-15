@extends('layouts.appupdate')

@section('containerupdate')
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;

        }

        .image img {
            width: 100%;
            height: 500px;
        }

        .container-fluid .buttons {
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 30px 0px;
        }

        .container-fluid .buttons a {
            width: 200px;
            text-align: center;
            padding: 6px;
            font-weight: 700;
            border-radius: 15px;
            border: 6px double #ffffff;
            margin-bottom: 20px;

        }

        .container-fluid {
            position: relative;
        }

        .error {
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100vw;
            top: 0;
            bottom: 0;
            background: #000000ab;
            opacity: 0;
            transform: scale(0);
        }

        .error.active {
            opacity: 1;
            transform: scale(1);
        }

        .error-info {
            text-align: center;
            width: 400px;
            padding: 50px 20px;
            background: #fff;
            border-radius: 10px;
            position: relative;
        }

        .error-info img {
            width: 40px;
        }


        .error h4 {
            padding: 10px 0;
            font-size: 18px;
        }

        .error p {
            font-size: 17px;
            line-height: 22px;
        }

        #close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        #close:hover {
            color: red;
        }


        @media(max-width:450px) {
            .error-info img {
                width: 35px;
            }

            .error-info {
                margin: 20px;
            }

        }

        @media (max-width: 900px) {
            .image img {
                width: 100%;
                height: 250px;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="image">
            <img src="{{ asset('img.png') }}" alt="">
        </div>

        <div class="buttons">
            <a href="{{ route('rider.apply') }}" class="" style="background: #5acbf4; color: #b2230a;">New Application</a>
            <a href="#" class="new-btn" style="background: #f8aa4d; color: #165d37;">Track Application</a>
            <a href="#" class="update-btn" style="background: #f69ea7; color: #000000;">Update Application</a>
            <a href="#" class="email-btn" style="background: #f8f14e; color: #165d37;">Email Verify</a>
        </div>

        <div class="error">
            <div class="error-info">
                <div id="close"><i class="fas fa-times"></i></div>
                <img src="{{ asset('warning.png') }}" alt="">
                <h4>Error</h4>
                <p>This service is unavailable temporarily but soon to be functional. Thank you for your patience.</p>
            </div>
        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let trackApplicationBtn = document.querySelector('.new-btn');
            let updateApplicationBtn = document.querySelector('.update-btn');
            let emailVerifyBtn = document.querySelector('.email-btn');
            let error = document.querySelector('.error');
            let close = document.querySelector('#close');

            trackApplicationBtn.onclick = (e) => {
                e.preventDefault(); // Prevent the default action of the button
                error.classList.add('active');
            };

            updateApplicationBtn.onclick = (e) => {
                e.preventDefault(); // Prevent the default action of the button
                error.classList.add('active');
            };

            emailVerifyBtn.onclick = (e) => {
                e.preventDefault(); // Prevent the default action of the button
                error.classList.add('active');
            };

            close.onclick = () => {
                error.classList.remove('active');
            };
        });
    </script>

</body>
@endsection
