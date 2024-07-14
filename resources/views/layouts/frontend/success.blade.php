@extends('layouts.appwithoutheaderfooter')

@section('content')

@if (Session::has('success'))
  <section style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div class="div300" style="width: 400px; text-align: center;">
        <iframe src="https://lottie.host/embed/961eb669-b7e1-4c33-a9e0-5e7fe71712dc/lE0k8tII94.json"></iframe>
    </div>
    <div style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem; font-size: 1.7rem; text-align: center;line-height: 2.3rem;">
                {{ Session::get('success') }}

    </div>
    
    <!-- Button back to home -->
    <div style="text-align: center;">
        <a href="https://conqueror.ae/" style="display: inline-block; padding: 10px 20px; background-color: #113163; color: #fff; text-decoration: none; border-radius: 5px;font-size:14px;">Back to Home</a>
    </div>
</section>
@endif


@endsection
