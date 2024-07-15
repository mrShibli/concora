@extends('layouts.loginregis')

@section('styles')
@endsection

@section('content')
    <div class="login-form">

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="weblogo">
                <img src="{{ asset('images/adminlogo.png') }}" alt="" class="logo">
            </div>
            <!-- <h5>A single trusted digital identity for all citizens, residents and visitors.</h5> -->
            @if (session('status'))
                <div class="alert alert-success mt10" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <label for="user-n">{{ __('Email Address') }}</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value=" {{ __('Send Password Reset Link') }}"
                class="btn @error('password') is-invalid @enderror">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="forgot-pass">
                <div>
                    <p><a href="{{ route('login') }}">Existing user?</a></p>
                    {{-- <p><a href="#">Forgot username?</a></p> --}}
                    {{-- <div style="margin-top: 18px;">
                        <p>Having trouble logging in?</p>
                        <p><a href="tel:+97142837636 ">Call:+97142837636 </a></p>
                        <p><a href="mailto:admin@conquerorservices.com">Email:admin@conquerorservices.com </a></p>
                    </div> --}}
                </div>
                {{-- <p><a href="{{ route('register') }}">New to Portal?</a></p> --}}
            </div>

        </form>
    </div>
@endsection
