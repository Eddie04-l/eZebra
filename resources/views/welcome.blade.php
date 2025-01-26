<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eZebra Consortium</title>
    <!-- Include Bootstrap CSS (Bootstrap CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Animate.css (for animations) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Add Wow.js (for triggering animations on scroll) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Add Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<style>
    ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, #FFD700, #FFA500);
            border-radius: 6px;
            position: relative;
        }

        ::-webkit-scrollbar-thumb::after {
            content: 'Scroll';
            position: absolute;
            top: 50%;
            left: -40px;
            transform: rotate(-90deg);
            transform-origin: left center;
            font-size: 12px;
            color: #000;
            font-weight: bold;
        }
        /* Navbar Styling */
.navbar {
    background-color: #101820; /* Dark background */
    padding: 1rem 2rem;
}

.navbar-brand {
    font-size: 1.75rem; /* Larger logo font */
    font-weight: 700;
    color: #F5A623; /* Warm yellow */
    transition: all 0.3s ease;
}

.navbar-brand:hover {
    color: #4ECDC4; /* Hover color */
}

.navbar-nav .nav-link {
    font-size: 1.1rem;
    font-weight: 500;
    color: #ffffff;
    padding: 12px 18px;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    background-color: #4ECDC4; /* Hover background */
    color: #101820; /* Dark text color on hover */
    border-radius: 30px; /* Rounded hover effect */
}

.navbar-toggler-icon {
    background-color: #F5A623; /* Change hamburger icon color */
}

/* Mobile Menu (Slide-in Effect) */
@media (max-width: 992px) {
    .navbar-collapse {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 75%; /* Adjust width as needed */
        background-color: rgba(0, 0, 0, 0.6);
        transition: left 0.5s ease;
        z-index: 999;
    }

    .navbar-nav .nav-link {
        font-size: 1.25rem;
        padding: 15px 20px;
    }

    /* The navbar will remain visible when toggled */
    .navbar-toggler.collapsed + .navbar-collapse {
        left: 0;
    }

    /* Close the navbar if you click a nav link */
    .navbar-nav .nav-link:focus {
        outline: none;
    }

    .navbar-collapse.show {
        left: 0;
    }
}

@media (max-width: 576px) {
    .navbar-nav .nav-link {
        font-size: 1.5rem; /* Larger text size for small screens */
        padding: 20px 30px;
    }
}



        /* Hero Section Styling */
.hero {
    position: relative;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/img.jpg') center/cover no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
}

.hero .text-center {
    padding: 0 15px;
    z-index: 1;
}

.hero h1 {
    font-size: 4rem; /* Larger title for impact */
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    animation: fadeIn 2s ease-in-out;
}

.hero p {
    font-size: 1.5rem;
    line-height: 1.6;
    animation: fadeIn 3s ease-in-out;
}

.hero .btn-info {
    background-color: #4ECDC4; /* Deep Cyan */
    border-color: #4ECDC4;
    font-size: 1.1rem;
    padding: 12px 30px;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.hero .btn-info:hover {
    background-color: #3DB6A5; /* Slightly darker cyan */
    border-color: #3DB6A5;
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem; /* Adjust for smaller screens */
    }

    .hero p {
        font-size: 1.2rem;
    }

    .hero .btn-info {
        padding: 10px 25px;
    }
}

        #about {
            padding: 7rem 0;
            color: #fff;
        }

        #about h2 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 3rem;
            letter-spacing: 1px;
        }

        #about .container {
            position: relative;
            z-index: 2;
        }

        #about .container p {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        #about .col-lg-6 img {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            #about h2 {
                font-size: 2.5rem;
            }
            #about .container p {
                font-size: 1rem;
            }
        }
        .logistics-section {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.9)), url('{{ asset('images/abt.jpg') }}') no-repeat center center;
    background-size: cover;
    padding: 6rem 0;
    color: #fff;
}

.logistics-section h2 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 3.5rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
}

.logistics-section .lead {
    font-size: 1.2rem;
    font-weight: 500;
    line-height: 1.8;
}

.custom-card {
    background: rgba(255, 255, 255, 0.1); /* Slightly transparent background */
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}

.custom-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.2); /* Change background on hover */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.custom-card .card-body {
    padding: 20px;
    text-align: center;
}

.custom-card .card-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #F5A623; /* Warm Yellow */
}

.custom-card .card-text {
    font-size: 1.1rem;
    color: #f4f4f4; /* Lighter text for better readability */
    line-height: 1.6;
}

@media (max-width: 768px) {
    .logistics-section h2 {
        font-size: 2.5rem;
    }

    .logistics-section .lead {
        font-size: 1rem;
    }

    .custom-card .card-title {
        font-size: 1.2rem;
    }
}

.why-choose-ezebra {
    position: relative;
    overflow: hidden;
}

.custom-card {
    min-height: 220px;
    border: 0;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.custom-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.background-deco {
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(255, 223, 0, 0.5), transparent);
    border-radius: 50%;
    z-index: -1;
    animation: pulse 5s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

.vision-section {
    background: url('images/vision.jpg') no-repeat center center; /* Replace 'your-image-path.jpg' with the actual image URL */
    background-size: cover; /* Ensure the image covers the entire section */
    position: relative;
    padding: 60px 0;
    overflow: hidden;
}

.vision-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Add a dark overlay to improve text readability */
    z-index: 1;
}

.vision-section .container {
    position: relative;
    z-index: 2;
}

.glow-card {
    background: rgba(255, 255, 255, 0.1); /* Transparent background with a glow */
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 15px rgba(255, 223, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    color: white;
}

.glow-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 0 30px rgba(255, 223, 0, 0.8), 0 0 20px rgba(255, 255, 255, 0.4);
}

.icon-wrapper {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255, 223, 0, 0.3), rgba(255, 255, 255, 0.1));
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.material-icons {
    font-size: 3rem;
}

.text-warning {
    color: #FFD700; /* Gold color */
}

.text-white {
    color: #ffffff;
}

@media (max-width: 768px) {
    .glow-card {
        margin-bottom: 2rem;
    }
}

/* Join Section Styling */
.join-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #4A90E2, #1B1B1B); /* Gradient background */
    padding: 60px 0;
}

.join-section .glow-text {
    text-shadow: 0 0 20px rgba(255, 223, 0, 0.8), 0 0 10px rgba(255, 255, 255, 0.5);
}

.btn-warning.shadow-hover {
    box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
    transition: all 0.3s ease;
}

.btn-warning.shadow-hover:hover {
    box-shadow: 0 10px 25px rgba(255, 193, 7, 0.8);
    transform: translateY(-5px);
}

/* Background Animation */
.background-animation {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.background-animation .circle {
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
    opacity: 0.8;
}

.background-animation .circle:nth-child(1) {
    top: 10%;
    left: 20%;
    animation-delay: 0s;
}

.background-animation .circle:nth-child(2) {
    top: 40%;
    left: 70%;
    animation-delay: 1.5s;
}

.background-animation .circle:nth-child(3) {
    top: 60%;
    left: 30%;
    animation-delay: 3s;
}

.background-animation .circle:nth-child(4) {
    top: 20%;
    left: 80%;
    animation-delay: 4.5s;
}

.background-animation .circle:nth-child(5) {
    top: 80%;
    left: 50%;
    animation-delay: 6s;
}

/* Float Animation */
@keyframes float {
    0%,
    100% {
        transform: translateY(0) scale(1);
    }
    50% {
        transform: translateY(-30px) scale(1.2);
    }
}
/* Contact Section Styling */
.contact-section {
    overflow: hidden;
    background: linear-gradient(135deg, #1B1B1B, #4A90E2);
    padding: 60px 0;
}

.contact-section .glow-text {
    text-shadow: 0 0 20px rgba(255, 223, 0, 0.8), 0 0 10px rgba(255, 255, 255, 0.5);
}

.contact-section .glow-link {
    transition: all 0.3s ease-in-out;
    text-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

.contact-section .glow-link:hover {
    color: #FFD700;
    text-shadow: 0 0 15px rgba(255, 223, 0, 1), 0 0 10px rgba(255, 255, 255, 0.5);
}

.contact-section .btn-warning.shadow-hover {
    box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
    transition: all 0.3s ease;
}

.contact-section .btn-warning.shadow-hover:hover {
    box-shadow: 0 10px 25px rgba(255, 193, 7, 0.8);
    transform: translateY(-5px);
}

/* Background Animation */
.background-animation {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.background-animation .circle {
    position: absolute;
    width: 150px;
    height: 150px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
    opacity: 0.7;
}

.background-animation .circle:nth-child(1) {
    top: 10%;
    left: 20%;
    animation-delay: 0s;
}

.background-animation .circle:nth-child(2) {
    top: 50%;
    left: 70%;
    animation-delay: 2s;
}

.background-animation .circle:nth-child(3) {
    top: 80%;
    left: 30%;
    animation-delay: 4s;
}

.background-animation .circle:nth-child(4) {
    top: 30%;
    left: 80%;
    animation-delay: 6s;
}

/* Float Animation */
@keyframes float {
    0%, 100% {
        transform: translateY(0) scale(1);
    }
    50% {
        transform: translateY(-20px) scale(1.2);
    }
}
/* Contact Section Styling */
.contact-section {
    padding: 80px 0;
    background: #101820; /* Charcoal Gray */
    position: relative;
    overflow: hidden;
}

.contact-section h3 {
    color: #F7F7F7; /* Warm White */
}

.contact-section .contact-card {
    background: rgba(26, 83, 92, 0.8); /* Muted Teal (semi-transparent) */
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-section .contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
}

.contact-section .btn-info {
    background-color: #4ECDC4; /* Deep Cyan */
    border-color: #4ECDC4;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.contact-section .btn-info:hover {
    background-color: #3DB6A5; /* Slightly darker cyan */
    box-shadow: 0 5px 15px rgba(78, 205, 196, 0.5);
}

.contact-section a.text-info {
    color: #4ECDC4; /* Deep Cyan */
}

.contact-section a.text-info:hover {
    color: #3DB6A5;
}

/* Background Waves */
.contact-background {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 120px; /* Adjust height for desired wave size */
    z-index: -1;
    overflow: hidden;
}

.contact-background .wave {
    position: absolute;
    width: 200%;
    height: 100px; /* Adjust wave height */
    background: #4ECDC4; /* Deep Cyan */
    border-radius: 50%;
    opacity: 0.2;
    animation: wave-animation 8s infinite linear;
}

.contact-background .wave1 {
    top: -20%;
    left: -60%;
    animation-delay: 0s;
}

.contact-background .wave2 {
    top: 20%;
    left: -70%;
    animation-delay: 4s;
}

.contact-background .wave3 {
    top: 50%;
    left: -80%;
    animation-delay: 2s;
}

/* Wave Animation */
@keyframes wave-animation {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-30%);
    }
}
/* Reference Sites Section */
.reference-sites {
    background-color: #101820; /* Charcoal Gray */
}

.reference-sites h4 {
    color: #4ECDC4; /* Deep Cyan */
    font-size: 2rem; /* Larger font size for better readability */
    font-weight: 700;
}

.reference-sites .list-group-item {
    background-color: #101820 !important; /* Ensures a consistent background */
    color: #fff;
    font-size: 1.1rem; /* Slightly larger font for better readability */
    border-radius: 12px; /* Rounded corners */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.reference-sites .reference-link {
    display: flex;
    align-items: center;
    color: #F7F7F7; /* Warm white */
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.reference-sites .reference-link:hover {
    color: #4ECDC4; /* Deep Cyan */
    text-decoration: none;
}

.reference-sites .reference-link i {
    font-size: 1.5rem;
    color: #F7F7F7;
    transition: color 0.3s ease;
}

.reference-sites .reference-link:hover i {
    color: #4ECDC4; /* Deep Cyan */
}

.reference-sites .list-group-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.reference-sites .list-group-item.mb-3 {
    margin-bottom: 1.5rem;
}



</style>
<body class="bg-dark p-2">

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fw-bold" href="#">eZebra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#why">Why eZebra?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#vision">Our Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#join">Join Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    

    <!-- Landing Page Hero Section -->
<div class="hero d-flex justify-content-center align-items-center" style="height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/img.jpg') center/cover;">
    <div class="text-center text-white px-4 py-5">
        <h1 class="display-3 font-weight-bold animated fadeIn">Welcome to eZebra Consortium</h1>
        <p class="lead animated fadeIn mb-4">Driving Africa’s Transportation and Logistics Revolution with Sustainable Electric Solutions</p>
        <a href="#about" class="btn btn-info btn-lg rounded-pill animated fadeIn" role="button">Learn More</a>
    </div>
</div>


    <section id="about" class="about-section py-5">
        <div class="container">
            <h2 class="text-center text-warning mb-4 display-4 wow fadeIn" data-wow-delay="0.5s">About Us</h2>
            <div class="row justify-content-center align-items-center text-justify">
                <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.7s">
                    <img src="{{ asset('images/abt.jpg') }}" class="img-fluid rounded-3 shadow-lg" alt="Sustainable Logistics">
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.9s">
                    <p class="text-light" style="text-align: justify;">
                        The African Transportation and logistics ecosystem is the lifeblood of trade and commerce, connecting bustling urban centers with rural areas and linking the continent to the global market.
                    </p>
                    <p class="text-light" style="text-align: justify;">
                        Yet, this dynamic sector faces significant challenges, including high operational costs, environmental concerns, and limited access to sustainable infrastructure. At <strong>eZebra Consortium</strong>, we are addressing these challenges head-on by delivering turnkey electric vehicle (EV) solutions tailored to the unique needs of Africa’s logistics operators.
                    </p>
                    <p class="text-light" style="text-align: justify;">
                        Our model combines advanced electric assets with innovative infrastructure to create a more efficient, sustainable, and resilient logistics ecosystem.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    

    <section class="logistics-section bg-dark text-white py-5">
        <div class="container">
            <h2 class="text-center text-warning mb-5 display-4 wow fadeIn" data-wow-delay="0.5s">The State of Africa’s Logistics Ecosystem</h2>
            <p class="lead text-center font-weight-bold wow fadeInUp" data-wow-delay="0.7s">
                Africa’s transportation and logistics industry is growing rapidly, driven by increasing trade volumes, e-commerce expansion, and infrastructure investments. However, traditional logistics operations still rely heavily on fossil fuel-powered fleets, leading to:
            </p>
    
            <!-- Grid System for Issues -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
                <div class="col wow fadeInUp" data-wow-delay="0.9s">
                    <div class="card custom-card shadow-lg border-0">
                        <div class="card-body">
                            <h3 class="card-title text-warning"><i class="material-icons">account_balance_wallet</i> <br>Cost of Finance</h3>
                            <p class="card-text">High cost of finance for acquiring assets from OEMs.</p>
                        </div>
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="1s">
                    <div class="card custom-card shadow-lg border-0">
                        <div class="card-body">
                            <h3 class="card-title text-warning"><i class="material-icons">local_gas_station</i><br> High Fuel Costs</h3>
                            <p class="card-text">A significant burden on operators, impacting profitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="1.1s">
                    <div class="card custom-card shadow-lg border-0">
                        <div class="card-body">
                            <h3 class="card-title text-warning"><i class="material-icons">eco</i> <br>Environmental Impact</h3>
                            <p class="card-text">Rising carbon emissions contributing to climate change.</p>
                        </div>
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="1.2s">
                    <div class="card custom-card shadow-lg border-0">
                        <div class="card-body">
                            <h3 class="card-title text-warning"><i class="material-icons">build</i> <br>Operational Inefficiencies</h3>
                            <p class="card-text">Downtime caused by outdated fleet technology and infrastructure gaps.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <p class="lead text-center font-weight-bold wow fadeInUp" data-wow-delay="1.3s" style="text-align: justify;">
                Operational inefficiencies, such as downtime caused by outdated fleet technology and infrastructure gaps, are also prominent in the sector.
            </p>
    
            <p class="lead text-center font-weight-bold wow fadeInUp" data-wow-delay="1.5s" style="text-align: justify;">
                <span class="text-warning">eZebra Consortium</span> is at the forefront of solving these issues by introducing innovative electric vehicle solutions designed specifically for Africa’s unique environment.
            </p>
        </div>
    </section>
    
    
    
    <section id="why" class="why-choose-ezebra py-5 text-white position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.9)), url('images/battery.jpg') no-repeat center center/cover;">
        <div class="container">
            <h2 class="text-center text-warning mb-5 display-4 wow fadeInUp" data-wow-delay="0.3s">Why Choose eZebra?</h2>
            <p class="lead text-center font-weight-bold wow fadeInUp" data-wow-delay="0.5s">
                At eZebra, we offer innovative and sustainable solutions for Africa’s transportation and logistics needs.
            </p>
            <!-- Custom-designed overlapping cards -->
            <div class="row justify-content-center align-items-stretch mt-5">
                <div class="col-md-10 position-relative">
                    <!-- Card Container -->
                    <div class="row g-4">
                        <!-- Feature 1 -->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="custom-card shadow-lg rounded  text-white p-4" style="background: #011627; opacity:0.9">
                                <i class="material-icons md-48 mb-3 text-warning">build</i>
                                <h3 class="text-warning">Comprehensive Turnkey Solutions</h3>
                                <p>We provide the full spectrum of services, from vehicle supply to infrastructure setup, ensuring operators can focus on what they do best: delivering goods and services.</p>
                            </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="custom-card shadow-lg rounded bg-success text-white p-4" style="opacity: 0.9">
                                <i class="material-icons md-48 mb-3 text-warning">refresh</i>
                                <h3 class="text-warning">Flexible Rental Model</h3>
                                <p>Avoid the upfront capital investment with our rental model, offering scalability and flexibility for operators of all sizes.</p>
                            </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                            <div class="custom-card shadow-lg rounded bg-info text-white p-4" style="opacity: 0.9">
                                <i class="material-icons md-48 mb-3 text-warning">battery_swap</i>
                                <h3 class="text-warning">Battery Swap Technology</h3>
                                <p>Our cutting-edge battery swapping system minimizes downtime, enabling operators to keep their fleets on the road and their businesses moving forward.</p>
                            </div>
                        </div>
                        <!-- Feature 4 -->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                            <div class="custom-card shadow-lg rounded bg-warning text-dark p-4" style="opacity: 0.9">
                                <i class="material-icons md-48 mb-3 text-dark">eco</i>
                                <h3 class="text-dark">Sustainability at the Core</h3>
                                <p>By transitioning to electric fleets, operators can significantly reduce their carbon footprint while benefiting from lower operational costs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Element -->
                    <div class="background-deco position-absolute top-0 start-50 translate-middle-x"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="vision-section py-5 text-white">
        <div class="container">
            <h2 class="text-center mb-5 display-4">Our Vision for Africa’s Logistics</h2>
            <p class="lead text-center font-weight-bold mb-5">
                At eZebra Consortium, we are committed to reshaping Africa's logistics landscape by integrating cutting-edge electric technologies and sustainable solutions to achieve efficiency, empowerment, and innovation.
            </p>
    
            <!-- Glowing Vision Cards -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Vision Point 1 -->
                <div class="col">
                    <div class="glow-card text-center p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="material-icons text-warning" style="font-size: 50px;">speed</i>
                        </div>
                        <h3>Streamline Efficiency</h3>
                        <p>
                            Transforming logistics by optimizing processes, minimizing delays, and maximizing operational performance to boost profitability.
                        </p>
                    </div>
                </div>
                <!-- Vision Point 2 -->
                <div class="col">
                    <div class="glow-card text-center p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="material-icons text-warning" style="font-size: 50px;">eco</i>
                        </div>
                        <h3>Sustainable Empowerment</h3>
                        <p>
                            Empowering operators with eco-friendly and affordable solutions that drive long-term growth and sustainability.
                        </p>
                    </div>
                </div>
                <!-- Vision Point 3 -->
                <div class="col">
                    <div class="glow-card text-center p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="material-icons text-warning" style="font-size: 50px;">groups</i>
                        </div>
                        <h3>Collaborative Partnerships</h3>
                        <p>
                            Building strategic alliances that foster innovation, enhance capabilities, and create a unified logistics network across Africa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    


    <section id="join" class="join-section py-5 text-white">
        <div class="container position-relative">
            <h2 class="text-center text-warning mb-4 display-4 glow-text">
                Join the eZebra Movement
            </h2>
            <p class="lead text-center font-weight-bold mb-5">
                The eZebra Consortium is more than a service provider—it’s a partner in progress. Together, we can transform Africa’s logistics ecosystem, driving economic growth while safeguarding the environment for future generations.
            </p>
            <div class="text-center">
                <a href="#contact" class="btn btn-warning btn-lg rounded-pill px-5 shadow-hover">Get Involved</a>
            </div>
        </div>
        <!-- Background Animation -->
        <div class="background-animation">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </section>
    

<!-- Contact Us Section -->
<section id="contact" class="contact-section py-5 position-relative text-light">
    <div class="container text-center">
        <h3 class="text-secondary mb-4 fw-bold display-4 text-light">Connect with Us</h3>
        <p class="lead mb-4">
            Be part of Africa’s logistics revolution. Let’s collaborate to build a sustainable and prosperous future.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="contact-card bg-dark rounded p-4 shadow">
                    <h5 class="text-light mb-3">Contact Information</h5>
                    <p class="mb-2">
                        <strong>Email:</strong> 
                        <a 
                            href="mailto:info@ezconsortium.com?subject=Inquiry about eZebra Consortium" 
                            class="text-decoration-none text-info">
                            info@ezconsortium.com
                        </a>
                    </p>
                    <button class="btn btn-info rounded-pill px-4 py-2 mt-3"><a style="text-decoration: none; color:#000" href="mailto:info@ezconsortium.com?subject=Inquiry about eZebra Consortium">Send a Message</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Waves -->
    <div class="contact-background">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
    </div>
</section>





<!-- Reference Sites Section -->
<section class="reference-sites py-5 bg-dark text-white">
    <div class="container">
        <h4 class="text-center text-success mb-5">Reference Sites</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark border-0 rounded-3 mb-3">
                <a href="https://www.jampur-group.com/divisions/equipment" class="reference-link d-flex align-items-center text-decoration-none" target="_blank">
                    <i class="bi bi-link-45deg me-3 text-success"></i> <!-- Bootstrap Icons -->
                    Jampur Group Equipment Division
                </a>
            </li>
            <li class="list-group-item bg-dark border-0 rounded-3 mb-3">
                <a href="https://www.tridentleasingcorp.com/#about-us" class="reference-link d-flex align-items-center text-decoration-none" target="_blank">
                    <i class="bi bi-link-45deg me-3 text-success"></i> <!-- Bootstrap Icons -->
                    Trident Leasing Corporation - About Us
                </a>
            </li>
        </ul>
    </div>
</section>

    <!-- Include Bootstrap JS and Popper.js (Bootstrap CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
