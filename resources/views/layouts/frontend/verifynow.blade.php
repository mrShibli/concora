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


    <!-- custom-css link  -->
    <link rel="stylesheet" href="{{ asset('dist/assets/new.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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

    <div class="flex justify-center items-center  absolute bg-[#000000dd] top-0 left-0 right-0 bottom-0">

        <form action="{{ route('verify.email') }}" method="POST"
            class="email-otp w-full m-3 Tablet:m-0 Tablet:w-[550px] bg-White-c rounded shadow-lg p-4 py-8">
            @csrf
            <div class="flex items-center gap-2">
                <span
                    class="h-[2.5rem] w-[2.5rem]  leading-[1rem] text-gray-400 text-xl  p-3 border-2 border-gray-700 rounded-full text-center"><i
                        class="fas fa-envelope  ml-[-3px] mt-[-5px]"></i></span>
                <h5 class=" text-sm Tablet:text-base font-medium text-[#9f393d]">OTP Verification</h5>
            </div>

            <p class="text-md my-4 font-medium">A 6-digit code has been sent to your email ({{ $email }}) and
                phone.</p>

            <div>
                <p class="text-[#9f393d] text-sm mb-3">Enter Verification Code</p>
                <div class="flex items-center gap-3">
                    <input type="text" name="otpcode" placeholder="Enter 6 Digit OTP"
                        class="px-2 py-1 border rounded" required>

                    <div id="countdown"></div>
                    <span class="text-[#9f393d] text-sm" style="display: none" id="resendOTPForm">
                        <a href="javascript:void(0)" onClick="ResendOtpCode('{{ $email }}')">Resend OTP</a>
                    </span>

                </div>
            </div>

            <p class="text-sm font-medium mt-4">• To modify your email address, kindly <button type="button"
                    id="resetMailBTN" class="text-[#9f393d] ">click here</button>.</p>

            <div class="btn mt-4">
                <button type="submit"
                    class="  px-4 py-1.5 bg-Primary-c text-White-c rounded-full inline-block text-sm Tablet:text-base">Verify</button>
            </div>

        </form>

    </div>

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="text-xl font-bold mb-4">Change Email</h2>
            <form id="changeEmailForm">
                @csrf
                <div class="mb-4">
                    <label for="newEmail" class="block text-gray-700 text-sm font-bold mb-2">New Email:</label>
                    <input type="email" id="newEmail" name="newEmail"
                        class="shadow appearance-none border rounded w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                    <input type="hidden" id="oldEmail" value="{{ $email }}">
                </div>
                <div id="errMsg" style="color: red;"></div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-4 py-1.5 bg-Primary-c text-White-c rounded-full inline-block text-sm Tablet:text-base">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- js-links -->
    <script>
        // Set the OTP expiration time
        var otpExpirationTime =
            @if (request()->has('otpExpirationTime'))
                {{ urldecode(request('otpExpirationTime')) }}
            @endif ;

        // Update the countdown clock every second
        var countdown = setInterval(function() {
            // Get the current time
            var now = Math.floor(Date.now() / 1000);

            // Calculate the remaining time
            var remainingTime = otpExpirationTime - now;

            // If time is up, display a message and clear the countdown interval
            if (remainingTime <= 0) {
                document.getElementById('countdown').innerHTML = '';
                document.getElementById('resendOTPForm').style.display = 'block';
                clearInterval(countdown);
            } else {
                // Calculate remaining minutes and seconds
                var minutes = Math.floor(remainingTime / 60);
                var seconds = remainingTime % 60;

                document.getElementById('resendOTPForm').style.display = 'none';


                document.getElementById('countdown').innerHTML = '' + minutes + 'm ' + seconds +
                    's';
            }
        }, 1000);
    </script>

    <script>
        function ResendOtpCode(email) {
            $(this).prop('disabled', true);
            $.ajax({
                url: '{{ route('resendVerificationEmail') }}',
                type: 'POST',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $(this).prop('disabled', false);

                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                },
                error: function(xhr) {
                    $(this).prop('disabled', false);

                    alert(xhr.responseJSON.message);
                }
            });
        }
    </script>
    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("resetMailBTN");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        document.getElementById("changeEmailForm").onsubmit = function(event) {
            event.preventDefault();
            var newEmail = document.getElementById("newEmail").value;
            var oldEmail = document.getElementById("oldEmail").value;
            var btn = document.querySelector("#changeEmailForm button[type='submit']");
            btn.disabled = true;
            btn.innerHTML = 'Sending...';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('verified.changeEmail') }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    btn.disabled = false;
                    btn.innerHTML = 'Submit';

                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        document.getElementById('errMsg').innerHTML = '';
                        if (response.status === true) {
                            window.location.href = response.redirect;
                        } else {
                            document.getElementById('errMsg').innerHTML = response.message;
                        }
                    } else {
                        var response = JSON.parse(xhr.responseText);
                        document.getElementById('errMsg').innerHTML = response.message;
                    }
                }
            };

            xhr.send(JSON.stringify({
                oldEmail: oldEmail,
                newEmail: newEmail,
                _token: '{{ csrf_token() }}'
            }));
        };
    </script>
</body>

</html>
