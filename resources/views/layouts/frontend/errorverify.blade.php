@extends('layouts.appwithoutheaderfooter')

@section('styles')
    <style>
        .errorveirifymessage {
            background-color: #f58b2712;
            color: #ff3f3f;
            border-color: #f35d5d14;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            font-size: 1.5rem;
            text-align: left;
            margin-top: 10px;
            
        }
    </style>
@endsection

@section('content')
    @if (Session::has('error'))
        <section style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
            

            <div class="errorveirifymessage">
                {{ Session::get('error') }}
            </div>



            <!-- Button back to home -->
            <div style="text-align: center;">
                <a href="http://conqueror.ae/"
                    style="display: inline-block; padding: 10px 20px; background-color: #113163; color: #fff; text-decoration: none; border-radius: 5px;font-size:14px;">Back
                    to Home</a>
            </div>
        </section>
    @endif
@endsection
