<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eZebra Consortium</title>
    <!-- Include Bootstrap CSS (Bootstrap CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
</style>
<body class="bg-dark p-2">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">eZebra</a>
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
    

    <div class="hero d-flex justify-content-center align-items-center" style="height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/img.jpg') center/cover;">
        <div class="text-center text-white px-4">
            <h1 class="display-4 font-weight-bold">Welcome to eZebra Consortium</h1>
            <p class="lead">Driving Africa’s Transportation and Logistics Revolution with Sustainable Electric Solutions</p>
        </div>
    </div>

    <section id="about" class="about-section py-5">
        <div class="container">
            <h2 class="text-center text-warning mb-4 display-4">About Us</h2>
            <div class="row justify-content-around text-justify">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/abt.jpg') }}" class="img-fluid rounded-3" alt="Sustainable Logistics">
                    </div>
                    <div class="col-lg-6">
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
            <h2 class="text-center text-warning mb-4 display-4">The State of Africa’s Logistics Ecosystem</h2>
            <p class="lead text-center font-weight-bold">
                Africa’s transportation and logistics industry is growing rapidly, driven by increasing trade volumes, e-commerce expansion, and infrastructure investments. However, traditional logistics operations still rely heavily on fossil fuel-powered fleets, leading to:
            </p>
    
            <!-- Grid System for Issues -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Cost of Finance</h3>
                            <p class="card-text">High cost of finance for acquiring assets from OEMs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">High Fuel Costs</h3>
                            <p class="card-text">A significant burden on operators, impacting profitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Environmental Impact</h3>
                            <p class="card-text">Rising carbon emissions contributing to climate change.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Operational Inefficiencies</h3>
                            <p class="card-text">Downtime caused by outdated fleet technology and infrastructure gaps.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <p class="lead text-center font-weight-bold" style="text-align: justify;">
                Operational inefficiencies, such as downtime caused by outdated fleet technology and infrastructure gaps, are also prominent in the sector.
            </p>
    
            <p class="lead text-center font-weight-bold" style="text-align: justify;">
                <span class="text-warning">eZebra Consortium</span> is at the forefront of solving these issues by introducing innovative electric vehicle solutions designed specifically for Africa’s unique environment.
            </p>
        </div>
    </section>
    <section id="why" class="why-choose-ezebra py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center text-warning mb-5 display-4">Why Choose eZebra?</h2>
            <p class="lead text-center font-weight-bold">
                At eZebra, we offer innovative and sustainable solutions for Africa’s transportation and logistics needs.
            </p>

            <!-- Grid for Why Choose eZebra Features -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Feature 1: Comprehensive Turnkey Solutions -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Comprehensive Turnkey Solutions</h3>
                            <p class="card-text">We provide the full spectrum of services, from vehicle supply to infrastructure setup, ensuring operators can focus on what they do best: delivering goods and services.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Flexible Rental Model -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Flexible Rental Model</h3>
                            <p class="card-text">Avoid the upfront capital investment with our rental model, offering scalability and flexibility for operators of all sizes.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: Battery Swap Technology -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Battery Swap Technology</h3>
                            <p class="card-text">Our cutting-edge battery swapping system minimizes downtime, enabling operators to keep their fleets on the road and their businesses moving forward.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4: Sustainability at the Core -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Sustainability at the Core</h3>
                            <p class="card-text">By transitioning to electric fleets, operators can significantly reduce their carbon footprint while benefiting from lower operational costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="vision-section py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center text-warning mb-5 display-4">Our Vision for Africa’s Logistics</h2>
            <p class="lead text-center font-weight-bold">
                At eZebra Consortium, we envision a future where Africa’s logistics industry thrives sustainably. By integrating advanced electric technology with innovative infrastructure, we aim to:
            </p>

            <!-- Grid for Vision Points -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Vision Point 1: Improve operational efficiency -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Improve Operational Efficiency</h3>
                            <p class="card-text">We aim to streamline processes and enhance productivity across the logistics value chain, driving profitability for operators.</p>
                        </div>
                    </div>
                </div>

                <!-- Vision Point 2: Empower operators -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Empower Operators</h3>
                            <p class="card-text">We provide cost-effective, eco-friendly solutions to empower operators, ensuring long-term sustainability and growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Vision Point 3: Foster partnerships -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Foster Partnerships</h3>
                            <p class="card-text">We aim to build strategic partnerships that drive the transition towards a more sustainable logistics industry across Africa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Join the eZebra Movement Section -->
<section id="join" class="join-section py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center text-center text-warning mb-5 display-4">Join the eZebra Movement</h2>
        <p class="lead text-center font-weight-bold">
            The eZebra Consortium is more than a service provider—it’s a partner in progress. Together, we can transform Africa’s logistics ecosystem, driving economic growth while safeguarding the environment for future generations.
        </p>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact" class="contact-section py-5 bg-dark text-white">
    <div class="container">
        <h3 class="text-center text-warning mb-3">Contact Us</h3>
        <p class="lead text-center font-weight-bold">
            Ready to be part of Africa’s logistics revolution? Let’s build a sustainable future together.
        </p>
        <p class="text-center">
            <strong>Email:</strong> 
            <a 
                href="mailto:info@ezconsortium.com?subject=Inquiry about eZebra Consortium&body=Dear eZebra Team,%0D%0A%0D%0AI would like to know more about your services." 
                class="text-decoration-none text-primary">
                info@ezconsortium.com
            </a>
        </p>
            </div>
</section>

<!-- Reference Sites Section -->
<section class="reference-sites py-5 bg-dark text-white">
    <div class="container">
        <h4 class="text-center text-success mb-3">Reference Sites</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark"><a href="https://www.jampur-group.com/divisions/equipment" class="text-decoration-none" target="_blank">Jampur Group Equipment Division</a></li>
            <li class="list-group-item bg-dark"><a href="https://www.tridentleasingcorp.com/#about-us" class="text-decoration-none" target="_blank">Trident Leasing Corporation - About Us</a></li>
        </ul>
    </div>
</section>
    <!-- Include Bootstrap JS and Popper.js (Bootstrap CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
