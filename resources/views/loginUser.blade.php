<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="res2/css/util.css">
    <link rel="stylesheet" type="text/css" href="res2/css/main.css">
    <!--===============================================================================================-->
    <link href="res/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

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
    <style>
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Container for relative positioning */
        .slide-container {
            position: relative;
            overflow: hidden;
            /* Prevents overflow during animation */
        }

        /* Slide from right for the image */
        .slide-right {
            animation: slideRight 1.5s ease-out forwards;
        }

        @keyframes slideRight {
            from {
                transform: translateY(-100%);
                /* Start off-screen to the right */
                opacity: 0;
                /* Optional fade-in */
            }

            to {
                transform: translateX(0);
                /* Ends in its original position */
                opacity: 1;
            }
        }

        /* Slide up for the text */
        .slide-up {
            animation: slideUp 1.5s ease-out forwards;
            animation-delay: 0.5s;
            /* Optional delay for a staggered effect */
        }

        @keyframes slideUp {
            from {
                transform: translateY(100%);
                /* Start off-screen at the bottom */
                opacity: 0;
                /* Optional fade-in */
            }

            to {
                transform: translateY(0);
                /* Ends in its original position */
                opacity: 1;
            }
        }


        .login100-form {
            animation: slideInFromLeft 2s ease-out;
            /* 1s duration, ease-out timing */
            opacity: 1;
            /* Ensure it's visible after animation */
        }
        .btn-primary{
            background-color:rgb(1, 72, 109) !important;
            border: navy;
            margin-bottom:20px !important;
            padding:45px !important;
            
        }
        
    </style>
</head>

<body>
    <nav style="height:70px;"class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 style="color:rgb(1, 72, 109) !important;" class="m-0 text-primary"><i class="far fa-hospital me-3"></i>HealYourLife</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="{{route ('aboutUs')  }}" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="{{route ('register')  }}" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Myths and Facts</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route ('register')  }}" style="margin-right:5px; " class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-md-block">Register Now</a>
            <a href="{{route ('loginUser')  }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-md-block">Login</a>
        </div>
    </nav>

    <div class="limiter">

        <div class="container-login100 d-flex" style="margin-top:-70px;">

            <!-- Left side: Login form -->
            <div class="wrap-login100 w-50">

                <form class="login100-form validate-form" style="margin-right:100px;">
                    <span class="login100-form-logo">
                        <img src="res/img/user.avif" alt="Logo" style="width: 85px; height: auto;">
                    </span>




                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" type="text" name="username" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn" style="margin-top:-10px;">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90" style="margin-top:-70px;">
                        <a class="txt1">
                            Don't have an account? <a style="color:white; " href=" {{ route('register') }}">
                                Register</a>
                        </a>
                    </div>
                </form>
            </div>

            <!-- Right side: Image -->
            <div class="w-50 slide-container">
                <img src="res/img/forLogin.png" alt="Login Image" class="img-fluid h-100 slide-right"
                    style="width: 530px;" />
                <p class="textHeal slide-up" style="color: white; text-align: center; margin-top:-5px;">
                    It starts getting better the moment you start talking.
                </p>
            </div>

        </div>
        <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
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
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
    </div>
    

    <div id="dropDownSelect1"></div>

    

    <!--===============================================================================================-->
    <script src="res2/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="res2/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="res2/vendor/bootstrap/js/popper.js"></script>
    <script src="res2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="res2/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="res2/vendor/daterangepicker/moment.min.js"></script>
    <script src="res2/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="res2/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="res2/js/main.js"></script>
    
</body>

</html>
