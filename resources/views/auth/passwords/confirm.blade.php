@extends('layouts.loginregis')

@section('styles')
@endsection

@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="weblogo">
                <img src="{{ asset('images/adminlogo.png') }}" alt="" class="logo">
            </div>

            <label for="pass">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" required autocomplete="new-password">

            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="current-password">

            <input type="submit" value=" {{ __('Confirm Password') }}" class="btn @error('password') is-invalid @enderror">
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
@endsection
