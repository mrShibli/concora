@extends('layouts.appupdate')

@section('containerupdate')
    <!-- Hero Area -->

    <div class="homepage-slides">
        <div class="single-slide-item">
            <div class="overlay-1"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="hero-area-content">
                            <div class="section-title">
                                <h1>Food Delivery Dependability & Reliable Service</h1>
                                <p>Conqueror Services LLC is a household name for having been the pioneer of Food and
                                    Parcel
                                    Services in the country from the Corporate Clients to the average person.</p>
                            </div>
                            <a href="#" class="main-btn primary">Our Services <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 text-lg-end">
                        <div class="info-content">
                            <div class="info-content-icon">
                                <img src="{{ asset('assets/img/icon/info/1.png') }}" alt="">
                            </div>
                            <div class="info-title">
                                <h5>Our Mission</h5>
                            </div>
                            <div class="info-desc">
                                <span>
                                    Swiftly delivering fresh food and parcels with reliability and satisfaction.
                                </span>
                            </div>
                            <a href="#"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item hero-area-bg-2">
            <div class="overlay-1"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="hero-area-content">
                            <div class="section-title">
                                <h1>Parcel Deliver Packages in Sustainable</h1>
                                <p>Conqueror Services LLC is a household name for having been the pioneer of Food and
                                    Parcel
                                    Services in the country from the Corporate Clients to the average person.</p>
                            </div>
                            <a href="#" class="main-btn primary">Our Services <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 text-lg-end">
                        <div class="info-content">
                            <div class="info-content-icon">
                                <img src="{{ asset('assets/img/icon/info/2.png') }}" alt="">
                            </div>
                            <div class="info-title">
                                <h5>Our Vision</h5>
                            </div>
                            <div class="info-desc">
                                <span>
                                    Leading in seamless, efficient food and parcel delivery for all.
                                </span>
                            </div>
                            <a href="#"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 order-2 order-lg-1">
                    <div class="about-img wow fadeInRight animated" data-wow-delay="100ms">
                        <img src="{{ asset('assets/img/about/1.jpg') }}" alt="">
                        <div class="about-counter wow fadeInLeft animated" data-wow-delay="400ms">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/img/icon/courier.png') }}" alt="">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="154">154</span>
                            </div>
                            <h6>World Wide Branch</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-1 order-lg-2">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <p>Entire Domestic and International Food Services</p>
                            <h2>
                                We Are Providing best way of Food & Parcel Delivery!
                            </h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="about-content-left">
                                        <p class="highlight mb-30">
                                            We provide the trustworthy to deliver any packages with our latest
                                            technologies, also provide secured & on time service!
                                        </p>
                                        <p>
                                            Food companies and delivery agency stay on the ground and do most of the
                                            authority to ensure that customers get their orders on time, is greatly
                                            dependent on the kind of Food company.
                                        </p>
                                        <a href="#" class="main-btn primary d-none d-lg-inline-block mt-30">Learn More
                                            <i class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="about-content-right">
                                        <p>
                                            We Are Providing best way of Food & Parcel Delivery!
                                        </p>
                                        <ul class="list-unstyled feature-list mt-30">
                                            <li>
                                                <i class="las la-check"></i>Reliability and
                                                Trustworthy
                                            </li>
                                            <li>
                                                <i class="las la-check"></i>Fast & Secured Deliveries
                                            </li>
                                            <li><i class="las la-check"></i>World Wide Shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section  -->

    <div class="service-area gray-bg service-3 section-padding pt-100">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <p>Popular Service With Quick Response!</p>
                        <h2>
                            A Leading corporation of Food Deliveries & Suppliers.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="service-item-wrap mt-30 owl-carousel">
                <div class="service-single wow fadeInLeft animated" data-wow-delay="100ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-1.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-delivery-man"></i>
                        </div>
                    </div>

                    <div class="service-content">
                        <h4>
                            <a href="#">Standard Food</a>
                        </h4>
                        <p>
                            This services involve transferring the parcels to the closest depot to the delivery
                            location.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-single wow fadeInLeft animated" data-wow-delay="200ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-2.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-truck-1"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">Over Night Food</a>
                        </h4>
                        <p>
                            This Food will usually transport the goods during the night or early of the morning.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-single wow fadeInLeft animated" data-wow-delay="300ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-3.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-pallet"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">Pallet Food</a>
                        </h4>
                        <p>
                            This is a service provided to those that safely strict delivery and promptly delivers goods
                            on pallets.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-single wow fadeInLeft animated" data-wow-delay="400ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-4.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-air-freight"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">International Food</a>
                        </h4>
                        <p>
                            This is a transport service of goods or documents from one country to another country.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-single wow fadeInLeft animated" data-wow-delay="500ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-5.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-wholesale"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">Ware Housing Service</a>
                        </h4>
                        <p>
                            This type of service will involve managed storage solutions to give companies greater
                            control.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-single wow fadeInLeft animated" data-wow-delay="600ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-6.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-truck-1"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">Express Food</a>
                        </h4>
                        <p>
                            This is a service provided to those who need urgent delivery to be sent and received on the
                            same day.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-single wow fadeInUp animated" data-wow-delay="700ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/service/service-7.jpg') }}" alt="">
                        </div>
                        <div class="services_icon">
                            <i class="flaticon-delivery-man-1"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a href="#">Same Day Food</a>
                        </h4>
                        <p>
                            These services specialise in delivering parcels on the same day, making them with emergency
                            requirements.
                        </p>

                        <a class="main-btn primary" href="#">Read More <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section  -->

    <div class="feature-area dark-bg section-padding pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="section-title">
                        <p>Secured, Fastest & Reliable Delivery Service!</p>
                        <h2 class="text-white">
                            Since during our launch, to deliver high value package.
                        </h2>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-6 offset-lg-1">
                    <div class="feature-right-content">
                        <p class="text-white">
                            Company providing its own fulfilment to a domestic depot, which is then picked up by the
                            Food and distributed to customers, or Foods pick up packages directly from the vendor.
                        </p>
                        <p class="text-white">
                            The process of Food or parcel delivery depends on the company, contract, location and a
                            variety of other factors.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-item-wrap">
                <div class="feature-slider owl-carousel">
                    <div class="feature-single wow fadeInLeft animated" data-wow-delay="100ms">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/feature/1.png') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h5>Free Estimate</h5>
                        </div>
                        <div class="feature-desc">
                            <p>Food services will package according to customers required consumer.
                            </p>
                        </div>
                        <a href="#"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="feature-single wow fadeInLeft animated" data-wow-delay="200ms">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/feature/2.png') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h5>24/7 Services</h5>
                        </div>
                        <div class="feature-desc">
                            <p>
                                Shipments any day or time, even on weekends and holidays.
                            </p>
                        </div>
                        <a href="#"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="feature-single wow fadeInLeft animated" data-wow-delay="300ms">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/feature/3.png') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h5>Flat Rate Fees</h5>
                        </div>
                        <div class="feature-desc">
                            <p>
                                Parcel Charge depends on speedy delivery of flexible price rates.
                            </p>
                        </div>
                        <a href="#"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="feature-single wow fadeInLeft animated" data-wow-delay="400ms">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/feature/4.png') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h5>Fast Delivery</h5>
                        </div>
                        <div class="feature-desc">
                            <p>
                                Specialty Foods are able to deliver items faster than other services.
                            </p>
                        </div>
                        <a href="#"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="feature-single wow fadeInLeft animated" data-wow-delay="200ms">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/feature/5.png') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h5>Secured Service</h5>
                        </div>
                        <div class="feature-desc">
                            <p>
                                Specialty Foods provide the highest level of security and tracking for packages
                            </p>
                        </div>
                        <a href="#"><i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row mt-100">
                <div class="col-12 col-lg-4">
                    <div class="more-feature">
                        <p class="text-white">
                            If you have any delivery queries, don't hesitate to contact our team, or you can also phone
                            call us anytime
                            <a href="tel:+97142837636">+97142837636</a>
                        </p>
                        <a href="quotation.html" class="main-btn border-btn">Get Quote <i
                                class="las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="video-section">
                        <a class="popup-video video-play-btn mfp-iframe"
                            href="https://www.youtube.com/watch?v=zHwiZyra5mk">
                            <i class="las la-play"></i><span>watch our video!</span></a>
                    </div>
                    <div class="pop-up-video">
                        <a href="https://www.youtube.com/watch?v=i4a7aeA8F60" class="video-play-btn mfp-iframe">
                            <i class="las la-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section  -->

    <div class="testimonial-area section-padding pt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="counter-wrap-2">
                        <div class="counter">
                            <div class="counter-inner">
                                <div class="counter-num">
                                    <h2 class="counting">25</h2>
                                </div>
                                <div class="counter-bg">
                                    <img src="{{ asset('assets/img/icon/courier.png') }}" alt="">
                                </div>
                            </div>
                            <div class="counter-content">
                                <p>Years of Experience in Food Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 col-12">
                    <div class="testimonial-wrap-2 owl-carousel">
                        <div class="testimonial-inner">

                            <div class="testimonial-content">
                                <p>“Conqueror’s service is reliable, timely, and accurate, and the communication system
                                    is excellent. Their commitment to quality and customer satisfaction is
                                    unparalleled.”</p>
                            </div>
                            <div class="testimonial-thumb" data-hover="">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/img/testimonial/1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-meta">
                                    <h6>Pat Cummins,</h6>
                                    <p>Delta Logistics</p>
                                </div>
                            </div>

                        </div>
                        <div class="testimonial-inner">

                            <div class="testimonial-content">
                                <p>“Conqueror’s service is reliable, timely, and accurate, and the communication system
                                    is excellent. Their professionalism and dedication ensure top-notch delivery every
                                    time.”</p>
                            </div>
                            <div class="testimonial-thumb" data-hover="">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/img/testimonial/2.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-meta">
                                    <h6>Sara Fatima,</h6>
                                    <p>Alfa Textile</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section  -->

    <div class="fact-area sky-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="process-wrap">
                        <div class="section-title">
                            <p>Dependable of Food & Delivery Service!</p>
                            <h2 class="text-white">
                                Simple processing to deliver Food & parcel service
                            </h2>
                        </div>
                        <p class="text-white">
                            The process of Food delivery depends on the company, contract, location and a variety of
                            other factors. Either a company provides its own fulfilment.
                        </p>
                        <p class="text-white">We offer deliver, solutions, and services across the entire parcel value
                            chain. We support our customers on their way to a more sustainable future </p>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="single-process-area">
                                    <div class="process-icon">
                                        <img src="{{ asset('assets/img/icon/process/1.png') }}" alt="">
                                    </div>
                                    <h5>Order <br> Received</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="single-process-area">
                                    <div class="process-icon">
                                        <img src="{{ asset('assets/img/icon/process/2.png') }}" alt="">
                                    </div>
                                    <h5>Packaging <br> Process</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="single-process-area">
                                    <div class="process-icon">
                                        <img src="{{ asset('assets/img/icon/process/3.png') }}" alt="">
                                    </div>
                                    <h5>Package <br> Delivered</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 offset-lg-1">
                    <div class="counter-wrap">
                        <div class="counter wow fadeInUp animated" data-wow-delay="100ms">
                            <div class="counter-num">
                                <span class="odometer" data-count="6154">0000</span>
                                <h6>delivered packages</h6>
                            </div>
                            <div class="counter-desc">
                                <p>
                                    Once your parcel has been carefully packaged and labelled, it must be handed over to
                                    your chosen Food.
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="counter wow fadeInUp animated" data-wow-delay="200ms">
                            <div class="counter-num">
                                <span class="odometer" data-count="2512">0000</span>
                                <h6>expert employees</h6>
                            </div>
                            <div class="counter-desc">
                                <p>
                                    Delivery drivers are given specific routes based on the destination addresses of the
                                    packages they are assigned.
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="counter wow fadeInUp animated" data-wow-delay="300ms">
                            <div class="counter-num">
                                <span class="odometer" data-count="642">000</span>
                                <h6>total warehouse</h6>
                            </div>
                            <div class="counter-desc">
                                <p>
                                    Your parcel is back on the move, on its way to the next depot, where it will be
                                    sorted
                                    once more. The second depot will be local.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section  -->
    <div class="project-section section-padding pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-title">
                        <p>Our Portfolio of Various Delivery project</p>
                        <h2>Recent Delivered Package <br> And Parcel Supplies</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xl-12">
                    <div class="project-slider owl-carousel">

                        <a href="#" class="single-project-wrapper">
                            <div class="project-bg">
                                <img src="{{ asset('assets/img/project/1-1.jpg') }}" alt="">
                            </div>
                            <div class="project-details">
                                <h5>Standard Food</h5>
                                <span>Road Freight</span>
                            </div>
                        </a>

                        <a href="#" class="single-project-wrapper">
                            <div class="project-bg">
                                <img src="{{ asset('assets/img/project/1-2.jpg') }}" alt="">
                            </div>
                            <div class="project-details">
                                <h5>Express Food</h5>
                                <span>Sea Freight</span>
                            </div>
                        </a>

                        <a href="#" class="single-project-wrapper">
                            <div class="project-bg">
                                <img src="{{ asset('assets/img/project/1-3.jpg') }}" alt="">
                            </div>
                            <div class="project-details">
                                <h5>International Food</h5>
                                <span>Air Freight</span>
                            </div>
                        </a>

                        <a href="#" class="single-project-wrapper">
                            <div class="project-bg">
                                <img src="{{ asset('assets/img/project/1-4.jpg') }}" alt="">
                            </div>
                            <div class="project-details">
                                <h5>Warehousing</h5>
                                <span>Rail Freight</span>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Section  -->

    <div class="client-area pt-0 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-wrap owl-carousel">
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('assets/img/client/1.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('assets/img/client/2.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('assets/img/client/3.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('assets/img/client/4.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('assets/img/client/5.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quatation Section  -->

    <div class="quotation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="contact-wrap">
                        <div class="section-title">
                            <p>Delivery Package With Reasonable Service!</p>
                            <h2 class="text-white">A renowned Food & Delivery Service For Customers</h2>
                        </div>
                        <div class="contact-desc">
                            <p class="text-white">
                                We offer deliver, solutions, and services across the entire
                                parcel value chain. We support our customers on their way to a
                                more sustainable future – no matter how far along the journey
                                to Food delivery with sustainable cargo systems.
                            </p>
                        </div>
                        <div class="contact-list-wrap">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-sm-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="las la-check"></i>Reliable & Perfection</li>
                                        <li><i class="las la-check"></i>Affordable Low Cost</li>
                                        <li><i class="las la-check"></i>On-time Delivering</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="las la-check"></i>50% More Delivery Cost</li>
                                        <li><i class="las la-check"></i>Service using Modern Way</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <a class="main-btn primary" href="#">learn more <i class="las la-arrow-right"></i></a>
                            <a class="main-btn white" href="#">asked query <i class="las la-arrow-right"></i></a>
                        </div>
                        <div class="contact-quote d-flex mt-40">
                            <div class="contact-icon">
                                <img src="{{ asset('assets/img/noteicon.png') }}" alt="icon">
                            </div>
                            <div class="contact-info">
                                <p>Receive right package within 3-5 days when you fill out this form. Or Contact with Us
                                    : <a href="tel:+97142837636">+97142837636</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-6 col-12">
                    <div class="quotation-wrap wow fadeInUp animated" data-wow-delay="200ms">
                        <div class="quotation-inner">
                            <h5 class="quotation-heading">Request A Quote</h5>
                            <p class="quotation-desc">
                                There are various ways to deliver Food so you can have the right place that you’re
                                making a positive impact.
                            </p>
                            <form class="contactForm" method="post" action="assets/php/contact.php"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Name" required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Company Name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Compnay Name"
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Contact Number
                                        </label>
                                        <input class="form-control" type="number" placeholder="Contact Number"
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">E-mail
                                        </label>
                                        <input class="form-control" type="email" placeholder="E-mail" required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Service Type</label>
                                        <select class="form-control">
                                            <option>Standard Food</option>
                                            <option>Express Food</option>
                                            <option>Over Night Food</option>
                                            <option>Pallet Food</option>
                                            <option>International Food</option>
                                            <option>Warehousing</option>
                                        </select>
                                        <div class="nice-select form-control">
                                            <span class="current">Standard Food</span>
                                            <ul class="list">
                                                <li class="option">
                                                    Standard Food
                                                </li>
                                                <li class="option">
                                                    Express Food
                                                </li>
                                                <li class="option">
                                                    Over Night Food
                                                </li>
                                                <li class="option">
                                                    Pallet Food
                                                </li>
                                                <li class="option">
                                                    International Food
                                                </li>
                                                <li class="option">
                                                    Warehousing
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Freight Type</label>
                                        <select class="form-control">
                                            <option>Air Freight</option>
                                            <option>Sea Freight</option>
                                            <option>Ground Freight</option>
                                        </select>
                                        <div class="nice-select form-control">
                                            <span class="current">Air Freight</span>
                                            <ul class="list">
                                                <li class="option">
                                                    Air Freight
                                                </li>
                                                <li class="option">
                                                    Sea Freight
                                                </li>
                                                <li class="option">
                                                    Ground Freight
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Pickup Date
                                        </label>
                                        <input type="date" required="">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Delivery Date
                                        </label>
                                        <input type="date" required="">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Dimensions
                                        </label>
                                        <input class="form-control" type="text" placeholder="20 sft" required="">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Weight
                                        </label>
                                        <input class="form-control" type="text" placeholder="2.5 KG" required="">
                                    </div>

                                    <div class="col-12">
                                        <a href="#" class="main-btn primary">
                                            submit request <i class="las la-arrow-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section  -->

    <div class="blog-area gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <p>Read Our Latest News</p>
                        <h2>Recent Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="blog-wrap">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-date">
                                    <span>Jan 21, 2024</span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h5>Five Importance logistics solutions for Parcel & Delivery Services </h5>
                            </div>
                            <div class="blog-img-wrap">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="">
                                </div>
                                <div class="blog-cat">
                                    <a href="#">standard, </a>
                                    <a href="blog-details"> express</a>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dolorem, facilis perferendis ipsam.</p>
                            </div>
                            <div class="blog-more">
                                <a href="#" class="main-btn border-btn">Read More <i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="blog-wrap">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-date">
                                    <span>Jan 07, 2024</span>
                                </div>

                            </div>
                            <div class="blog-title">
                                <h5>Cargo Shipment on Ocean Freight Demands Frequently Costly</h5>
                            </div>
                            <div class="blog-img-wrap">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="">
                                </div>
                                <div class="blog-cat">
                                    <a href="#">standard, </a>
                                    <a href="blog-details"> express</a>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dolorem, facilis perferendis ipsam.</p>
                            </div>
                            <div class="blog-more">
                                <a href="#" class="main-btn border-btn">Read More <i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="600ms">
                    <div class="blog-wrap">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-date">
                                    <span>Dec 16, 2022</span>
                                </div>

                            </div>
                            <div class="blog-title">
                                <h5>We believe in building long lasting our business relationships</h5>
                            </div>
                            <div class="blog-img-wrap">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="">
                                </div>
                                <div class="blog-cat">
                                    <a href="#">standard, </a>
                                    <a href="blog-details"> express</a>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dolorem, facilis perferendis ipsam.</p>
                            </div>
                            <div class="blog-more">
                                <a href="#" class="main-btn border-btn">Read More <i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
