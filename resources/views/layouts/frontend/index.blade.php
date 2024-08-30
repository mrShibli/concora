@extends('layouts.app')

@section('styles')
    <style>
        .phonecontact .iti__selected-dial-code {
            color: #fff;
        }

        .social-icons {
            text-align: center;
            margin-top: 20px;
        }

        .social-icons a {
            font-size: 17px;
            margin: 0 7px;
            padding: 8px 10px;
            background-color: #F89940;
            color: #ffffff;
            border-radius: 7px;
        }

        @media(max-width:450px) {
            .social-icons a {
                font-size: 15px;
                padding: 7px;
            }
        }

        .social-icons a:hover {
            transform: scale(1.1);
            color: red;
        }

        .p-t {
            margin-top: 20px;
        }

        .p-t a {
            font-size: 13px;
            margin-right: 8px;
            color: white;
            font-weight: 400;
        }

        .p-t a:hover {
            color: blue;
        }

        .career {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .career a {
            color: #fff;
            background: #ed911c;
            font-size: 1.4rem;
            padding: 8px 20px;
            border-radius: 4px;
            margin-bottom: -2px;
            margin-top: 3px;
        }

        .career a:hover {
            background: #bd6f09;
        }

        .contact .heading {
            margin-top: -2px;
        }

        @media(max-width:950px) {
            .career a {
                color: #fff;
                background: #ed911c;
                font-size: 1.7rem;
                padding: 8px 25px;
                border-radius: 4px;
                margin-bottom: -2px;
                margin-top: 3px;

            }
        }
        
        .header-area .header-inner-box .logo {
            border-right: none !important;
        }
    </style>
@endsection

@section('content')
    <!-- Contact Page Content Start  -->

    <div class="indexoverlay">
        <div class="contact">

            <video class="bg-video" autoplay loop muted plays-inline>
                <source src="frontend/images/bg.mp4" type="video/mp4">
            </video>

            <h1 class="heading text-shadow"> Welcome to Conqueror Group, Dubai </h1>

            <p style="text-align: center;color: #fff;font-weight:bold;" class="text-shadow">We are coming soon! If you have
                any questions, please send us a
                message.</p>
            <div class="career"><a href="{{ route('rider.apply') }}">Career</a> <a href="https://conquerorservices.com/contacts" style="margin-left:5px;">Contact us</a> </div>
            <form method="POST" action="{{ route('contact.store') }}" class="form">
                @csrf
                <div class="box">
                    <div class="bx">
                        <label for="name">First Name</label>
                        <input type="text" name="fname">
                        @error('fname')
                            <p class="erromessage">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="bx">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname">
                        @error('lname')
                            <p class="erromessage">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="box phonecontact">
                    <div class="bx contactdd">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" name="phone_number" id="phone_number">
                        @error('phone_number')
                            <p class="erromessage">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="bx">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        @error('email')
                            <p class="erromessage">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <label for="subject">Subject</label>
                <input type="text" name="subject" id="">
                @error('subject')
                    <p class="erromessage">{{ $message }}</p>
                @enderror

                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="5"></textarea>
                @error('subjmessageect')
                    <p class="erromessage">{{ $message }}</p>
                @enderror

                <input type="submit" name="Submit" class="btn">

            </form>

            <div>
                <div class="social-icons">
                    <a target="_blank" href="https://facebook/com/conquerordelivery"><i class="fab fa-facebook"></i></a>
                    <a target="_blank" href="https://instagram/conquerorservicesllc"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="http://www.youtube.com/@ConquerorServicesLLC"><i
                            class="fab fa-youtube"></i></a>
                    <a target="_blank" href="tel:+97142837636"> <i class="fas fa-phone"></i></a>
                </div>
                <div style="text-align: center;" class="p-t">
                    <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>
                    <a href="{{ route('terms.and.conditions') }}" target="_blank">Terms Of Service</a>
                </div>
            </div>

        </div>
    </div>

    <!-- --Contact Page Content End--  -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.min.js"></script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var full_number_qut = phone_number_qut.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='phoneNumber_qut'").val(full_number_qut);
        });
    </script>
@endsection
