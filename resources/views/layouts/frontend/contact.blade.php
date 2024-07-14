<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conqueror Services LLC &#8211; Food Delivery Services </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="{{ $pageDescription ?? 'Conqueror Services LLC | Food Delivery Services | UAE | KSA | Bahrain | Qatar' }}">
    <meta property="og:image" content="{{ asset('logoicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .headerbg {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 350px;
            background-image: url('contact-banner2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            text-shadow: 2px 2px 2px rgb(34, 34, 34);
        }

        .banner-image {
            width: 100%;
            height: auto;
            /* Maintain aspect ratio */
            max-height: 370px;
            /* Max height */
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .headerbg {
                 height: 140px;
                background-position: center;
                font-size: 14px;
                justify-content: start;
            }
            .headerbg h1{
                font-size: 29px;
                padding-left: 20px;
                text-shadow: 2px 2px 2px rgb(34, 34, 34);
            }
        }

        @media (max-width: 576px) {
            .headerbg {
                height: 140px;
            }
        }


        .contact-info {
            padding-top: 20px;
        }

        .contact-info h4 {
            margin-bottom: 15px;
        }

        .contact-info p {
            margin-bottom: 5px;
        }

        .contact-info i {
            margin-right: 8px;
        }

        .bbutton .btn-info {
            color: #fff;
            background-color: #ed911c;
            border-color: #ed911c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="headerbg">
            <h1>Contact us</h1>
        </div>
    </div>

    <div class="container contact-info">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4>Dubai Office:</h4>
                <p><i class="fas fa-map-marker-alt"></i> City Pharmacy Building, M02, Al Khubasi, Port Saeed, Dubai</p>
                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+971 4 2837636">+971 4 2837636</a></p>
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
                <h4>Pakistan Agency:</h4>
                <p><i class="fas fa-building"></i> New Gulf Pak Recruiting Agency</p>
                <p><i class="fas fa-map-marker-alt"></i> Office-18, 2nd Floor, Kala Khan Shopping Center</p>
                <p><i class="fas fa-map-marker-alt"></i> Shamsabad, Rawalpindi, Pakistan</p>
                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+92 51 4854060">+92 51 4854060</a></p>
                <p><i class="fas fa-envelope"></i> Email: <a
                        href="mailto:jobs@conquerorservices.com">jobs@conquerorservices.com</a></p>
                <p class="pb-2"><i class="fas fa-map-marker-alt"></i> Bismillah Center, Near PSO Pump, Kotli Behram,
                    Sialkot,
                    Pakistan</p>
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
                <h4>Nepal Agency:</h4>
                <p><i class="fas fa-building"></i> C.D Education Consultancy Pvt.Ltd.</p>
                <p><i class="fas fa-map-marker-alt"></i> Sarswotin Nagar, Chabel</p>
                <p><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</p>
                <p class="pb-2"><i class="fas fa-phone"></i> Contact: <a href="tel:+977 9767992821">+977
                        9767992821</a></p>
            </div>
            <div class="col-md-6">
                <!-- You can add a Google Map iframe here if available -->
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center">
            <div class="col-md-6 pb-2">
                <h4>India Agency:</h4>
                <p><i class="fas fa-map-marker-alt"></i> India</p>
                <p class="pb-2"><i class="fas fa-envelope"></i> Email: <a
                        href="tel:jobs@conquerorservices.com">jobs@conquerorservices.com</a></p>
            </div>
            <div class="col-md-6">
                <!-- You can add a Google Map iframe here if available -->
            </div>
        </div>
        <hr style="color: #000;">
        <div class="row align-items-center mb-2">
            <div class="col-md-6 pb-2">
                <h4>London Office:</h4>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
