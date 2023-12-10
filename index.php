<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Monroe Country Airport</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/images/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Greater Rochester Airport 1200, New York, USA</small>
                </div>
                <!-- <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div> -->
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa-solid fa-phone text-primary me-2"></small>
                    <small><a class="text-dark" href="tel: (585) 202-8240">(585)202-8240</a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 ">
            <img src="img/images/logo1.png" class="img-fluid nav-logo" alt="">
            <h2 class="m-0 text-primary">
                <!-- <span class="m-0 d-lg-none d-md-none d-sm-block fs-6 ">Monroe Country Airport <br> Taxi Service LLC</span> -->
                <span class="m-0 d-none d-md-block fs-3">Monroe Country Airport Taxi Service LLC</span>
                <!-- <span class="m-0 d-none d-lg-block d-md-none">Monroe County Airport Taxi Service LLC</span> -->
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="booking.html" class="nav-item nav-link">Booking</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <a href="contact.html" class="nav-item nav-link d-lg-none d-md-block d-sm-block">Contact</a>
            </div>
            <a href="contact.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Contact Us <i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/images/Photos/car12 - Copy.jpeg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-10 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-2 animated slideInDown">// Taxi Provider //
                                    </h6>
                                    <h1 class="display-3 text-white my-lg-4  mb-md-0 animated slideInDown">Monroe Country Airport Taxi Service LLC</h1>
                                    <a href="about.html" class="btn btn-primary py-3 px-5 animated slideInDown my-3 d-none d-lg-inline-block d-md-inline-block">About Us<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 animated slideInDown my-3 d-lg-none d-md-none d-sm-inline-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                    <div class=" row mt-md-3 fs-5 mb-md-0 ">
                                        <div class="col-lg-12 col-md-6">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Fair & Honest Pricing
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-md-6 ">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Always On Time</p>
                                        </div>
                                        <div class="col-lg-12 col-md-6 ">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Superior Service</p>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Neat & Clean Cabs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/images/Photos/car7 - Copy.jpeg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-10 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash
                                        Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                    <div class=" row mt-5 fs-5">
                                        <div class="col-md-3">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Fair & Honest Pricing
                                            </p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Always On Time</p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Superior Service</p>

                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa-solid fa-check text-success me-3"></i>Neat & Clean Cabs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-none d-lg-flex animated zoomIn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa-solid fa-user fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Private Driver</h5>
                            <p>If you need to collect your baggage, we are ready to help you.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa-solid fa-plane-departure fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Airport Transfer</h5>
                            <p>Comfortable transfer services from airport to any chosen address.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa-solid fa-cart-flatbed-suitcase fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Buggage Transfer</h5>
                            <p>If you need to collect your baggage, we are ready to help you.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4 pt-md-0" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/images/Photos/car11.jpeg"
                            style="object-fit: cover;" alt="">
                        <!-- <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">Trust</span> the leading and the most reliable US
                        Airport Taxi service provider.</h1>
                    <p class="mb-4 text-justify">At Monroe County Airport Taxi, we are your trusted partner for all your transportation needs. Whether you're arriving at the ROC (Greater Rochester Airport) and need a ride to your hotel, home, or college, or if you find yourself in a situation where you need to quickly get to another airport, we've got you covered. Our taxi service is dedicated to providing efficient and reliable transportation solutions.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3 text-justify">
                                    <h6>24/7 Availability</h6>
                                    <span>We understand that travel doesn't adhere to a strict schedule. That's why our services are available around the clock, ensuring you always have a dependable ride, even during early morning hours.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3 text-justify">
                                    <h6>Safety First</h6>
                                    <span>Your well-being is our priority. Rest assured, all our drivers undergo rigorous background checks, so you can have complete confidence in your journey.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3 text-justify">
                                    <h6>Fair Pricing</h6>
                                    <span>We are committed to transparent & fair pricing. Our taxi meters are regularly inspected and tested to ensure you're charged accurately, in accordance with the law.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about.html" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <!-- <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">200</h2>
                    <p class="text-white mb-0">Expert Drivers</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">5000</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Airport</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Fact End -->


    <!-- Service Start -->
    <!-- <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>

                            <h4 class="m-0">Private Driver</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-2" type="button">
                            <i class="fa-solid fa-plane-departure fa-2x me-3"></i>
                            <h4 class="m-0">Airport Transfer</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-3" type="button">
                            <i class="fa-solid fa-cart-flatbed-suitcase fa-2x me-3"></i>
                            <h4 class="m-0">Luggage Transfer</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Day Hire</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car17.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Airport Taxi Providing Service</h3>
                                    <p class="mb-4">Enjoy a customized ride with our private drivers—experts in safety,
                                        courtesy, and efficiency. Your comfort is our priority from airport pickup to
                                        drop-off, ensuring a delightful travel experience.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Personalized Service</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expertise and Safety</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Enhanced Convenience</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car2.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">
                                        15 Years Of Experience In Airport Taxi Providing Service</h3>
                                    <p class="mb-4">Experience seamless airport transfers with our service—specialists in
                                        reliability, professionalism, and passenger satisfaction. We prioritize your
                                        convenience, ensuring a stress-free and enjoyable journey.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Efficient Transfers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Professionalism and Courtesy</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Travel with Confidence</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car20.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Effortlessly handle your luggage with our specialized luggage transfer
                                        service—experts in reliability, care, and convenience. We prioritize the seamless
                                        handling of your belongings, ensuring a stress-free travel experience.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Convenience at its Best</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Care and Attention</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Convenience at its Best</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car9.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">
                                        You can hire our minicab service for as long as you want in a day at hourly rates
                                        (minimum 4 hours booking required). Day hire services cover all locations within NYC
                                        only. It is the most favourite and convenient way for passengers to enjoy a
                                        sightseeing tour in NYC. Contact us for prices!</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Personalized Experience</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Reliable Transportation</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Flexible Timeframes</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->




    <!-- Service md/lg Start -->
    <div class="container-xxl service py-5 d-none d-lg-block d-md-block">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-md-12">
                    <p class="text-justify" style="font-size:18px;">Our Airport Taxi Service is available 24/7 to meet all your
                        transportation needs. Whether you're
                        arriving at or departing from ROC Airport, or you require a ride to other airports like Buffalo
                        Airport, Toronto International Airport, Syracuse Airport or JFK Airport we've got you covered.
                    </p>
                    <p class="text-justify" style="font-size:18px;">At our core, we prioritize your satisfaction, safety, and
                        comfort. Your journey is our responsibility.
                        Contact us today to book your ride or to inquire about our versatile taxi services.</p>
                </div>
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-3 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fas fa-route fa-2x me-3"></i>
                            <h4 class="m-0">Local or Long-Distance Rides from ROC Airport</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-3 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa-solid fa-plane-departure fa-2x me-3"></i>
                            <h4 class="m-0">Ride to ROC Airport from Anywhere</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-3 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fas fa-plane fa-2x me-3"></i>
                            <h4 class="m-0">Ride to Other Airports</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-3 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Transportation Vouchers</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-3 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <!-- <i class="fa fa-car-side fa-2x me-3"></i> -->
                            <i class="fab fa-pagelines fa-2x me-3"></i>
                            <h4 class="m-0">Ride to Niagara Falls and Other Natural Attractions</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car17.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="mb-3">Local or Long-Distance Rides from ROC Airport</h3>
                                    <p class="mb-4 text-justify">Whether you're flying in or out of ROC Airport, we're here to
                                        provide you with
                                        local and long-distance transportation. We're committed to delivering a
                                        comfortable and punctual ride, regardless of the distance.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car2.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="mb-3">
                                        Ride to ROC Airport from Anywhere</h3>
                                    <p class="mb-4 text-justify">Need a ride to ROC Airport? We'll be at your doorstep, ready to
                                        whisk you
                                        away to the airport, ensuring you arrive on time and stress-free.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car20.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="mb-3">Ride to Other Airports</h3>
                                    <p class="mb-4 text-justify">We don't just stop at ROC Airport; our services extend to various
                                        airports in the
                                        region. From Buffalo Airport to Toronto International Airport, Syracuse Airport,
                                        and beyond, if a car can get there, we'll take you there.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car9.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="mb-3">Transportation Vouchers</h3>
                                    <p class="mb-4 text-justify">
                                        If you possess transportation vouchers, simply get in touch with us. We'll
                                        arrange
                                        a pickup to make the most of your vouchers and accommodate your travel plans.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="img/images/Photos/car3.jpeg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="mb-3"> Ride to Niagara Falls and Other Natural Attractions
                                    </h3>
                                    <p class="mb-4 text-justify">
                                        Explore the beauty of our region with our taxi service. Whether it's a trip to
                                        the
                                        awe-inspiring Niagara Falls, Finger Lakes or other natural attractions, we're
                                        your
                                        trusted transportation provider.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Service sm Start -->
    <div class="container-xxl service py-5  d-lg-none d-md-none d-sm-block">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-md-12">
                    <p class="text-justify" style="font-size:18px;">Our Airport Taxi Service is available 24/7 to meet all your
                        transportation needs. Whether you're arriving at or departing from ROC Airport, or you require a ride
                        to other airports like Buffalo Airport, Toronto International Airport, Syracuse Airport or JFK Airport
                        we've got you covered.
                    </p>
                    <p class="text-justify" style="font-size:18px;">At our core, we prioritize your satisfaction, safety, and comfort.
                        Your journey is our responsibility. Contact us today to book your ride or to inquire about our
                        versatile taxi services.</p>
                </div>
                <div class="col-lg-12">
                    <div class="accordion" id="serviceAccordion">

                        <!-- Service Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button  " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <i class="fas fa-route fa-2x me-3"></i>
                                    <h4 class="m-0">Local or Long-Distance Rides from ROC Airport</h4>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4">
                                        <div class="col-md-12" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/images/Photos/car17.jpeg" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-3">Local or Long-Distance Rides from ROC Airport</h3>
                                            <p class="mb-4 text-justify">Whether you're flying in or out of ROC Airport, we're here to
                                                provide you with local and long-distance transportation. We're committed to
                                                delivering a comfortable and punctual ride, regardless of the distance.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Service Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    <i class="fa-solid fa-plane-departure fa-2x me-3"></i>
                                    <h4 class="m-0">Ride to ROC Airport from Anywhere</h4>
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4">
                                        <div class="col-md-12" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/images/Photos/car2.jpeg" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-3">Ride to ROC Airport from Anywhere</h3>
                                            <p class="mb-4 text-justify">Need a ride to ROC Airport? We'll be at your doorstep, ready to
                                                whisk you
                                                away to the airport, ensuring you arrive on time and stress-free.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Service Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    <i class="fas fa-plane fa-2x me-3"></i>
                                    <h4 class="m-0">Ride to Other Airports</h4>
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4">
                                        <div class="col-md-12" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/images/Photos/car20.jpeg" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-3">Ride to Other Airports</h3>
                                            <p class="mb-4 text-justify">We don't just stop at ROC Airport; our services extend to various
                                                airports in the
                                                region. From Buffalo Airport to Toronto International Airport, Syracuse Airport,
                                                and beyond, if a car can get there, we'll take you there.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Service Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    <i class="fa fa-car-side fa-2x me-3"></i>
                                    <h4 class="m-0">Transportation Vouchers</h4>
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4">
                                        <div class="col-md-12" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/images/Photos/car9.jpeg" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-3">Transportation Vouchers</h3>
                                            <p class="mb-4 text-justify">If you possess transportation vouchers, simply get in touch with us. We'll
                                                arrange
                                                a pickup to make the most of your vouchers and accommodate your travel plans.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Service Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    <i class="fab fa-pagelines fa-2x me-3"></i>
                                    <h4 class="m-0">Ride to Niagara Falls and Other Natural Attractions</h4>
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4">
                                        <div class="col-md-12" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/images/Photos/car3.jpeg" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-3">Ride to Niagara Falls and Other Natural Attractions</h3>
                                            <p class="mb-4 text-justify">Explore the beauty of our region with our taxi service. Whether it's a trip to
                                                the
                                                awe-inspiring Niagara Falls, Finger Lakes or other natural attractions, we're
                                                your
                                                trusted transportation provider.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->






    <!-- rates start -->

    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5 mt-4">Rates & Payment</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="">
                <div class="card" style="max-width: 80rem; padding: 0px;">

                    <div class="row g-0 ">
                        <div class="col-md-12">
                            <div class="card-header text-white text-center fs-3" style="/*background-color: #5c81b4;*/ background-color: #b8101f;">
                                Innovation in Rates, Integrity in Service
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <img src="img/images/Photos/car12.jpeg" class="img-fluid rates-img" alt="" >
                        </div>
                        <div class="col-md-12 col-lg-6 bg-li">
                            <div class="">
                                <div class="card-body ">
                                    <p class=" fs-3 text-dark"><i class="fas fa-dollar-sign me-2"></i></i>RATES</p>
                                    <p class="card-text text-justify">At our Airport Taxi Service, we strive to provide transparent
                                        and competitive rates for your
                                        convenience. Our fare structure is based on the use of taxi meters, ensuring
                                        that you pay for the
                                        exact distance traveled.</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-li"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> first <b>⅙</b> Mile : <b>$2.50</b></li>
                                        <li class="list-group-item bg-li"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Each additional <b>⅙</b> Mile : <b>$0.50</b></li>
                                        <li class="list-group-item bg-li"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> Waiting Time (Per Hour) : <b>$21.00</b></li>
                                        <li class="list-group-item bg-li"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg> To & From Airport (Minimum Fare) : <b>$10.00</b></li>
                                        <li class="list-group-item bg-li"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>Each Extra Passenger (Over 1 passenger) : <b>$2.50</b>
                                        </li>
                                        <li class="list-group-item bg-li"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>Children (Under Age 6) : <b>No Charge</b>
                                        </li>
                                        <li class="list-group-item bg-li"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>Senior Discount (Age 65+) : <b>$1.00</b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- payment option -->


    <div class="container mt-5">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-1 mt-5">Payment Option</h1>
                <p>We have multiple payment option is available.</p>
            </div>
        </div>
        <div class="row wow fadeInUp mt-3 ">
            <div class=" mb-5">
                <div class="row payment-option">
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 ">
                        <a><img class="client-logo" src="img/images/any_card.jpg" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 ">
                        <a><img class="client-logo" src="img/images/apple-pay.png" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 ">
                        <a><img class="client-logo" src="img/images/cash_app.png" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 ">
                        <a><img class="client-logo" src="img/images/visa.png" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 ">
                        <a><img class="client-logo" src="img/images/master_card.jpg" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mx-lg-3 ms-sm-5 mt-3 ">
                        <a><img class="client-logo" src="img/images/cash-payment.png" alt="maven"
                                style="height: 120px; width: 200px; margin: 10px;"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- rates end -->











    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">We're Monroe Country Airport Taxi Service Provider</h1>
                        <p class="text-white mb-0 text-justify">Monroe Country Airport Taxi Service are available 24 hours a day,
                            seven days a week and 365 days of the year. Our reliable vehicles are comfortable, luxurious
                            and for sure more cost-effective! Our fully licenced and insured professional drivers will
                            be waiting for you at the airport terminal with a name sign to drive you directly to your
                            destination stress-free and safely. Enjoy your Reliable, Affordable and Comfortable
                            Pre-booked Service !</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                      data-wow-delay="0.6s">
                      <h1 class="text-white mb-4">Book For A Service</h1>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post" id="contactForm">
                        <div class="row g-3">
                            <div class="col-12">
                              <input type="text" class="form-control border-0" placeholder="Your Name" name="name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                              <input type="email" class="form-control border-0" placeholder="Your Email" name="email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                              <input type="tel" class="form-control border-0" placeholder="Mobile No." name="mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Date of Service"
                                  data-target="#date1" data-toggle="datetimepicker" name="flight_date" style="height: 55px;">
                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Time of Service"
                                  data-target="#time1" data-toggle="datetimepicker" name="flight_time" style="height: 55px;">
                              </div>
                            </div>
                            <div class="col-12">
                              <textarea class="form-control border-0" name="address" placeholder="Pickup Address"></textarea>
                            </div>
                            <div class="col-12">
                              <textarea class="form-control border-0" placeholder="Special Request" name="request"></textarea>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-secondary w-100 py-3" type="submit" name="submit">Book Now</button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $flight_date = $_POST['flight_date'];
    $flight_time = $_POST['flight_time'];
    $address = $_POST['address'];
    $request = $_POST['request'];
    $subject = $_POST['flight_time'];
    $message = "Name : " . $name . "\nEmail :" . $email . "\nMobile :" . $mobile . "\nFligt Date : " . $flight_date . "\nFlignt Time : " . $flight_time . "\nAddress : " . $address . "\nRequest : " . $request;

    // $to = 'mateen.ansari@rigorhole.com, imran.khan@rigorhole.com, ganesh.salunke@rigorhole.com,dilshad@rigorhole.com';
    // $to = array('riz1.ahamed@gmail.com', 'derekfk399@gmail.com', 'info@7techitservices.com', 'fp7456209@gmail.com');
    $to = 'fp7456209@gmail.com';
    $from = $email;
    $headers = "From: $from";
    $success = true;
    // foreach ($$to as $toeach) {
    //     if (!mail($recipient, $subject, $message, $headers)) {
    //         $success = false;
    //         break;
    //     }
    // }
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>Swal.fire({
			icon: 'success',
			text: 'Your Email Has Been Sent',
		})</script>";
    } else {
        echo "<script>Swal.fire({
			icon: 'error',
			text: 'Sorry, Your Email Has Not Been Sent',
		})</script>";
    }
}

?>

    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Emilia Clarke</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Booking was a breeze, website was very user-friendly. The driver (Charles) was
                            punctual and highly professional. Despite having a long journey it was both smooth and
                            comfortable! Thank you!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mazhar Hussain</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4 ">
                        <p class="mb-0">Great service. Booked a return trip to and from the airport. Received text
                            reminders and phone calls to keep in touch and updated. Drivers on both trips turned up in
                            good time.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Tom Cruise</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Very good service, excellent customer service. For long time I didn't use this
                            company, but all was very very perfect!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Kate Winslet</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Very professional and efficient service. Punctual. Very nice cars. Super clean.
                            Comfortable. Very friendly and welcoming. Will certainly use service again in the future.
                            Highly reccomanded.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row d-flex justify-content-lg-around justify-content-md-evenly">
                <div class="col-lg-3 col-md-4  mb-5">
                    <h4 class="text-white mb-3">
                        <a class="navbar-brand fs-4" href="index.html">
                            <img src="images/logo1.png" class="img-fluid footer-logo" alt=""><span class=" text-light">Monroe County Airport <br> Taxi service LLC</span>
                        </a>
                    </h4>
                    <p><span style="max-width: 250px;" class="text-light mt-3">We provide the best Airport Taxi
                            Services for you in the USA.</span></p>
                    <a class="button button-sm " href="">
                        <div class="text-center w-100 text-md-start text-lg-start mt-lg-4">
                            <button class="btn btn-outline-light px-lg-3 py-2" data-bs-toggle="tooltip"
                                data-bs-title="Contact Now">Order
                                Taxi Now</button>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <h4 class="text-light mb-3">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Greater Rochester Airport 1200, NY</p>
                    <p class="mb-2"><i class="fa-solid fa-phone me-3"></i><a class="text-light" href="tel: (585) 202-8240">(585) 202-8240</a></p>
                    <p class="mb-2"><i class="fa-solid fa-phone me-3"></i><a class="text-light" href="tel: (585) 635-3522">(585) 635-3522</a></p>
                    <!-- <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="text-light" href="mailto:">monroecountyairorttaxi@gmail.com</a></p> -->
                    <!-- <p class="mb-2"><i class="fab fa-whatsapp me-3"></i><a class="text-light" href="https://wa.me/15856353522">(585) 635-3522</a></p> -->
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div> -->
                <div class="col-lg-2 col-md-2">
                    <h4 class="text-light mb-3 d-lg-none d-md-block d-sm-block">Links</h4>
                    <h4 class="text-light mb-3 d-none d-lg-block">Quick Links</h4>
                    <a class="btn btn-link" href="index.html">Home</a>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="service.html">Services</a>
                    <a class="btn btn-link" href="booking.html">Booking</a>
                    <a class="btn btn-link" href="contact.html">Contact</a>
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>