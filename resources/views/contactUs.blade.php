<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HealYourMind - Contact page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="res/lib/animate/animate.min.css" rel="stylesheet">
    <link href="res/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="res/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="res/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="res/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="contact/css/style.css">

    <style>
        img.img-fluid {
            max-width: 100%;
            /* Ensures the image fits within its container */
            height: auto;
            border-radius: 10px;
            /* Optional: rounded corners for the image */
        }
    </style>
</head>

<body>







    <!-- Navbar Start -->
    <nav style="height:65;" class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 style=" color: rgb(11, 57, 100) !important;" class="m-0 text-primary">HealYourMind</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('aboutUs') }}" class="nav-item nav-link active">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="404.html" class="dropdown-item">Myths and Facts</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route ('register')  }}" style="margin-right:5px; " class=" btn-primary btn-primaryy  py-2 px-md-3 d-none d-md-block">REGISTER</a>
            <a href="{{route ('loginUser')  }}" class=" btn-primary py-2 btn-primaryy px-md-3 d-none d-md-block">LOGIN</a>
       
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5 background-color">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p style="color:white;" class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>
                    <h1 style="color:white;" class="mb-4">Send us any queries. We are here to asist you.</h1>

                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4"
                        style="background-color:rgb(11, 57, 100)!important; height:30px !important;">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px; background-color:#37b8bd !important;">
                            <i style="color:#ffffff !important; "class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p style="color:white;"class="mb-2">Call Us Now</p>
                            <h5 style="color:white;" class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5"
                        style="background-color: rgb(11, 57, 100) !important; height:30px !important;">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;background-color:#37b8bd !important;">
                            <i style="color:#ffffff !important; "class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p style="color:white;" class="mb-2">Mail Us Now</p>
                            <h5 style="color:white;" class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5"
                        style="background-color:rgb(11, 57, 100)!important; margin-top:-25px;">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose Urgency</option>
                                        <option value="1">Urgent</option>
                                        <option value="2">Not Urgent</option>
                        
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose User</option>
                                        <option value="1">Registered</option>
                                        <option value="2">Not Registered</option>
                        
                                    </select>
                                </div>
                               
                               
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Your Queries"></textarea>
                                </div>
                                <div class="col-12">
                                    <button style="background-color:#37b8bd !important;
                                    border:none !important;" class="btn btn-primary btn-primaryy w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->







    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Cardiology</a>
                    <a class="btn btn-link" href="">Pulmonary</a>
                    <a class="btn btn-link" href="">Neurology</a>
                    <a class="btn btn-link" href="">Orthopedics</a>
                    <a class="btn btn-link" href="">Laboratory</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="res/lib/wow/wow.min.js"></script>
    <script src="res/lib/easing/easing.min.js"></script>
    <script src="res/lib/waypoints/waypoints.min.js"></script>
    <script src="res/lib/counterup/counterup.min.js"></script>
    <script src="res/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="res/lib/tempusdominus/js/moment.min.js"></script>
    <script src="res/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="res/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="res/js/main.js"></script>
</body>

</html>
