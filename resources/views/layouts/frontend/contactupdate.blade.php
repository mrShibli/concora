@extends('layouts.appupdate')

@section('styles')
    <style>
        .contact-bg {
            background-image: url('https://conquerorservices.com/contact-banner2.jpg');
        }

        .section-padding {
            padding: 30px 0;
        }

        .contact-info-office p {
            color: #000 !important;
        }

        .contact-info-office a {
            color: #000 !important;
        }

        .bbutton .btn-info {
            color: #fff;
            background-color: #ed911c;
            border-color: #ed911c;
            margin-top: 15px;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css"> --}}
@endsection

@section('containerupdate')
    <!-- Breadcrumb Area -->

    <div class="breadcrumb-area contact-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>Contact</h1>
                        <p>We deliver products quickly and reliably, ensuring customer satisfaction and timely service.
                        </p>
                        <!-- <a href="services.html" class="main-btn primary">Our Services</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{ route('mainindex') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ul>
        </div>
    </div>

    <!-- Google Map Start-->
    <!-- <div class="contact-page google-map">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.2156438445377!2d-2.2936754376828103!3d53.4626665378156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72e7e47f69%3A0x6c930e96df4455fe!2sOld%20Trafford!5e0!3m2!1sen!2sbd!4v1661768864802!5m2!1sen!2sbd"
                                                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div> -->

    <!-- Contact Section  -->

    <div class="contact-page section-padding pb-50">
        <div class="container">
            <div class="row gx-5">
                {{-- <div class="col-lg-5">
                    <div class="contact-wrap">
                        <div class="contact-inner">
                            <div class="contact-headline">
                                <h3>Get Quatation for Delivery & Parcel Service?</h3>
                            </div>
                            <div class="contact-meta-info">
                                <div class="contact-single-info">
                                    <i class="las la-map-marker-alt"></i>
                                    <h6>Address</h6>
                                    <p>248, Park Street Avenue, NY, USA </p>
                                </div>
                                <div class="contact-single-info">
                                    <i class="las la-phone"></i>
                                    <h6>Phone</h6>
                                    <p>+14-127893 </p>
                                    <p>+12-356786</p>
                                </div>
                                <div class="contact-single-info">
                                    <i class="las la-envelope"></i>
                                    <h6>Mail</h6>
                                    <p>support@experia.com </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="section-title">
                        <p>Let's Get In Touch</p>
                        <h2>Send Us a Message</h2>
                    </div>
                    <p>Pleas put up a topic below reated to your inquiry. If you dont find what you need fill out our
                        contract form. For all enquiries please mail us using the below</p>
                    <div class="contact_form">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.store') }}"
                            class="comment-one_form contact-form-validated" novalidate="novalidate">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6">
                                    <div>
                                        <input type="text" placeholder="FIrst Name" name="fname">
                                        @error('fname')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div>
                                        {{-- <input type="email" placeholder="Email Address" name="email"> --}}
                                        <input type="text" placeholder="Last Name" name="lname">
                                        @error('lname')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div>
                                        <input type="tel" placeholder="Phone Number" name="phone_number"
                                            id="phone_number">
                                        @error('phone_number')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div>
                                        <input type="email" placeholder="Email Address" name="email">
                                        @error('email')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div>
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div>
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                        @error('subjmessageect')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- <a href="#" class="main-btn primary">Send Message<i
                                            class="las la-arrow-right"></i></a> --}}
                                    <input type="submit" name="Submit" class="main-btn primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Office address -->
    <div class="container">
        <h2>Our Office Address</h2>
        <hr>
    </div>
    <div class="container contact-info-office">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="mb-2">Dubai Office:</h4>
                <p><i class="fas fa-map-marker-alt"></i> City Pharmacy Building, M02, Al Khubasi, Port Saeed, Dubai</p>
                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+97142837636">+971 4 2837636</a></p>
                <p><i class="fab fa-whatsapp"></i> WhatsApp: <a href="https://wa.me/97142833787" target="_blank">+971
                        4
                        2833787</a></p>
                <p class="pb-2"><i class="fas fa-envelope"></i> Email: <a
                        href="mailto:info@conquerorservices.com">info@conquerorservices.com</a></p>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28865.95027672565!2d55.3115067347656!3d25.262383400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d7e149dc5d3%3A0x59ee853ad68708d4!2sConqueror%20Services%20LLC!5e0!3m2!1sen!2sbd!4v1719048553837!5m2!1sen!2sbd"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center">
            <div class="col-md-6 pb-2">
                <h4 class="mb-2">Pakistan Agency:</h4>
                <p><i class="fas fa-building"></i> New Gulf Pak Recruiting Agency</p>
                <p><i class="fas fa-map-marker-alt"></i> Office-18, 2nd Floor, Kala Khan Shopping Center</p>
                <p><i class="fas fa-map-marker-alt"></i> Shamsabad, Rawalpindi, Pakistan</p>
                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+92514854060">+92 51 4854060</a></p>
                <p><i class="fab fa-whatsapp"></i> Whatsapp: (Mr. Bilal) <a href="https://wa.me/923076200365">+92 307 6200365</a></p>
                <p><i class="fas fa-envelope"></i> Email: <a
                        href="mailto:jobs@conquerorservices.com">jobs@conquerorservices.com</a></p>
                <p class="pb-2"><i class="fas fa-map-marker-alt"></i> Bismillah Center, Near PSO Pump, Kotli Behram,
                    Sialkot, Pakistan</p>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.128566725263!2d73.07864127479537!3d33.653830438664166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95319df75ef5%3A0x85c70b9deb6a4dfd!2sNew%20Gulf%20Pak%20Recruiting%20Agency!5e0!3m2!1sen!2sbd!4v1719049085461!5m2!1sen!2sbd"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center">
            <div class="col-md-6 pb-2">
                <h4 class="mb-2">Nepal Agency:</h4>
                <p><i class="fas fa-building"></i> C.D Education Consultancy Pvt.Ltd.</p>
                <p><i class="fas fa-map-marker-alt"></i> Sarswotin Nagar, Chabel</p>
                <p><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</p>
                
            </div>
            <div class="col-md-6">
                <!-- You can add a Google Map iframe here if available -->
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center">
            <div class="col-md-6 pb-2">
                <h4 class="mb-2">India Agency:</h4>
                <p><i class="fas fa-map-marker-alt"></i> India</p>
                <p class="pb-2"><i class="fas fa-envelope"></i> Email: <a
                        href="mailto:jobs@conquerorservices.com">jobs@conquerorservices.com</a></p>
            </div>
            <div class="col-md-6">
                <!-- You can add a Google Map iframe here if available -->
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center mb-2">
            <div class="col-md-6 pb-2">
                <h4 class="mb-2">London Office:</h4>
                <p><i class="fas fa-building"></i> UKBytes Limited</p>
                <p><i class="fas fa-map-marker-alt"></i> 71-75, Shelton Street, Covent Garden,</p>
                <p><i class="fas fa-map-marker-alt"></i> London WC2H 9JQ, United Kingdom</p>
                <p class="pb-2"><i class="fas fa-envelope"></i> Email: <a
                        href="mailto:info@ukbytes.com">info@ukbytes.com</a></p>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9931.631612740543!2d-0.1235464!3d51.5149056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876058e2d6980b3%3A0x66953ec052b97e89!2sUKBYTES%20LIMITED!5e0!3m2!1sen!2sbd!4v1719049234479!5m2!1sen!2sbd"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row bbutton">
            <div class="col-md-12 text-center">
                <a href="https://conquerorservices.com" class="btn btn-info mb-5">Back to Home</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.min.js"></script>
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
    </script> --}}
@endsection
