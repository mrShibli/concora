@extends('layouts.app')

@section('styles')
    <style>
        .applybutton {
            display: flex;
            align-content: center;
            justify-content: center;
        }
    </style>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .jobspopup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
            z-index: 9999;
        }

        .jobspopup {
            background-color: white;
            width: 80%;
            height: 80%;
            max-width: 600px;
            max-height: 600px;
            margin: auto;
            overflow: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .jobspopup-content {
            text-align: center;
        }

        .jobspopup-flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .jobspopup-flex-item {
            margin: 7px;
            width: 175px;
            cursor: pointer;
        }

        .jobspopup-flex-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .jobspopup-flex-item img:hover {
            border: 1px solid rgb(196, 196, 196);
        }
    </style>
@endsection

@section('content')
    <div id="jobspopupOverlay" class="jobspopup-overlay">
        <div class="jobspopup">
            <div class="jobspopup-content">
                <h4>Please choose your desired jobs from the below options:</h4>
                <div class="jobspopup-flex-container">
                    <a href="{{ route('rider.apply') }}" class="jobspopup-flex-item" onclick="jobspopupJobSelected('jobspopup-job1')">
                        <img src="{{ asset('delivery-boy-job.jpg') }}" alt="Job 1">
                        <p>Rider</p>
                    </a>
                    <a href="job2.html" class="jobspopup-flex-item" onclick="jobspopupJobSelected('jobspopup-job2')">
                        <img src="{{ asset('freelancing.jpg') }}" alt="Job 2">
                        <p>Freelancing</p>

                    </a>
                    <a href="{{ route('others.apply') }}" class="jobspopup-flex-item" onclick="jobspopupJobSelected('jobspopup-job3')">
                        <img src="{{ asset('others.jpg') }}" alt="Job 3">
                        <p>Others</p>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-heading rental" id="toppageheading">
        <section>
            <div class="content">
                <h2>Apply Job</h2>
                <div class="menu-links"><a href="#" >Home / </a> <span>Apply</span>
                </div>
            </div>

        </section>
    </div>
    <section>
        <div style="text-align: center;">
            <h3>Join Our Team – Apply Now!</h3>
            <p style="text-align: justify;">Welcome to CONQUEROR! We’re excited to learn more about you and your
                interest in joining our team.
                Please fill out the form below with your details and attach the necessary documents. We’re looking
                for passionate individuals from diverse backgrounds to contribute to our dynamic team. Your journey
                with us starts here – let’s create something incredible together!</p>
        </div>
        <section class="applybutton">
            <a href="#" class="btn" onclick="jobspopupOpenPopup()">Apply Job</a>
        </section>
    </section>
@endsection

@section('scripts')
    <script>
        function jobspopupOpenPopup() {
            document.getElementById("jobspopupOverlay").style.display = "block";
        }
    </script>
@endsection
