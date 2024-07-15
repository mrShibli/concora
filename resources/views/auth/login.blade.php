@extends('layouts.loginregis')

@section('styles')
@endsection

@section('content')
    <div class="logarea">
        <div class="login-form">
            <div class="imagearea">
                <img src="{{ asset('admins/login.jpg') }}" width="92%" alt="">
            </div>
            <form class="loginform" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="weblogo">
                    <img src="{{ asset('images/adminlogo.png') }}" alt="" class="logo">
                </div>
                <!-- <h5>A single trusted digital identity for all citizens, residents and visitors.</h5> -->

                <label for="user-n">{{ __('Email Address') }}</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="pass">{{ __('Password') }}</label>
                <input type="password" name="password" id="password" required autocomplete="current-password">
                <div class="loginshowpass">
                    <label for="show-password">Show Password</label>
                    <input type="checkbox" id="show-password">
                </div>
                <style>
                    .loginshowpass {
                        margin-top: 10px;
                        display: flex;
                        align-items: center;
                    }
                
                    .loginshowpass input[type="checkbox"] {
                        margin-right: 5px;
                        margin-top: 10px;
                        margin-left: 10px;
                        width: auto;
                    }
                
                    .loginshowpass label {
                        font-size: 14px;
                        color: #333;
                    }
                </style>
                <div class="form-group" style="margin-top: 5px;">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="submit" value="{{ __('Login') }}" style="background: #F64637; !important"
                    class="btn @error('password') is-invalid @enderror">
               
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="forgot-pass">
                    <div>
                        <p><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
                        {{-- <p><a href="#">Forgot username?</a></p> --}}
                        {{-- <div style="margin-top: 18px;">
                            <p>Having trouble logging in?</p>
                            <p><a href="tel:+97142837636 ">Call:+97142837636 </a></p>
                            <p><a href="mailto:admin@conquerorservices.com">Email:admin@conquerorservices.com </a></p>
                        </div> --}}
                    </div>
                    {{-- <p><a href="{{ route('register') }}">New to portal?</a></p> --}}
                </div>

            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const passwordInput = document.getElementById('password');
            const toggleCheckbox = document.getElementById('show-password');

            toggleCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });
        });
    </script>
@endsection
