@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <p class="card-header">{{ __('Porfile Page') }}</p>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <p>{{ __('You are logged in!') }}</p>
                            <p>Welcome, {{ Auth::user()->name }}!</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">{{ __('Logout') }}</button>
                            </form>
                            <a href="{{ url('/') }}" class="btn" style="background-color: #000;">{{ __('Back to Home') }}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
