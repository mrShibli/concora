@extends('layouts.loginregis')

@section('styles')
@endsection

@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="weblogo">
                <img src="{{ asset('images/adminlogo.png') }}" alt="" class="logo">
            </div>
            <!-- <h5>A single trusted digital identity for all citizens, residents and visitors.</h5> -->

            <label for="user-n">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="user-n">{{ __('Email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="pass">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" required autocomplete="new-password">

            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">

            <input type="submit" value="{{ __('Register') }}" class="btn @error('password') is-invalid @enderror">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="forgot-pass">
                <div>
                    <p><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
                    {{-- <p><a href="#">Forgot username?</a></p> --}}
                    <div style="margin-top: 18px;">
                        <p>Having trouble logging in?</p>
                        <p><a href="tel:+97142837636 ">Call:+97142837636 </a></p>
                        <p><a href="mailto:admin@conquerorservices.com">Email:admin@conquerorservices.com </a></p>
                    </div>
                </div>
                {{-- <p><a href="{{ route('login') }}">Existing user?</a></p> --}}
            </div>

        </form>
    </div>
@endsection
