<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="res/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="res/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="registerCss/css/style.css">
    {{-- for nav --}}
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


    <title>Register</title>
</head>

<body>
    <nav style="height:65px;   ;" class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        
         <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 style="color:rgb(1, 72, 109) !important; margin-left:-12px !important;" class="m-0 text-primary">HealYourMind</h2>
        </a>
         
        
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{route ('aboutUs')  }}" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{route ('register')  }}" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Myths and Facts</a>
                    </div>
                </div>
                <a href="{{ route('contactUs') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route ('register')  }}" style="margin-right:5px; " class=" btn-primary btn-primaryy  py-2 px-md-3 d-none d-md-block">REGISTER</a>
            <a href="{{route ('loginUser')  }}" class=" btn-primary py-2 btn-primaryy px-md-3 d-none d-md-block">LOGIN</a>
        </div>
    </nav>

    <div class="d-lg-flex half" style="margin-top:-22px; background-color:#e0f5ff !important " >
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 slide-in">
                        <h3 style="margin-top:35px; font-size:32px; margin-left:20px; color:#037e82;">Enlist as a
                            Healer/Seeker
                            today!</h3>


                        <div class="radio-group" style="Margin-left:20px;margin-bottom:10px;margin-top:-4px;">

                            <label>
                                <input type="radio" name="userType" value="healer" checked> Healer
                            </label>
                            <label>
                                <input type="radio" name="userType" value="seeker"> Seeker
                            </label>
                        </div>

                        <form action="/save-owner" method="get" style="margin-bottom:70px;margin-left:20px;margin-top:-5px;">
                            <div id="healer" class="form-container active">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="name" style="margin-bottom:4px;"><b>Name</b></label>
                                        <input type="text" class="form-control registerForm"
                                            placeholder="ex. Alex John" name="name"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email" style="margin-bottom:4px;"><b>Email</b></label>
                                        <input type="text" class="form-control registerForm"
                                            placeholder="ex. alex@gmail.com" name="email"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="phone" style="margin-top:8px; margin-bottom:4px;"><b>Phone
                                                Number</b></label>
                                        <input type="text" class="form-control registerForm"
                                            placeholder="Enter an 11 digit Phone Number" name="phone"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="license" style="margin-top:8px; margin-bottom:4px;"><b>License
                                                Number</b></label>
                                        <input type="tel" class="form-control registerForm"
                                            placeholder="Enter a valid number" name="license"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="experience" style="margin-top:8px; margin-bottom:4px;"><b>Years of
                                                Experience</b></label>
                                        <input type="tel" class="form-control registerForm"
                                            placeholder="Enter a number" name="experience"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="specialization"
                                            style="margin-top:8px; margin-bottom:4px;"><b>Specialization</b></label>
                                        <div class="custom-dropdown">
                                            <input type="text" id="selectedOption"
                                                class="form-control dropdown-selected"
                                                placeholder="Select your Specialization" readonly>
                                            <ul class="dropdown-options" id="dropdownOptions">
                                                <li data-value="Psychiatrist">Psychiatrist</li>
                                                <li data-value="Psychologist">Psychologist</li>
                                                <li data-value="Therapist">Therapist</li>
                                                <li data-value="Marriage and Family Therapist">Marriage and Family
                                                    Therapist</li>
                                                <li data-value="Psychoanalyst">Psychoanalyst</li>
                                                <li data-value="Grief Counselor">Grief Counselor</li>
                                                <li data-value="Trauma Specialist">Trauma Specialist</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="qualification"
                                            style="margin-top:8px; margin-bottom:4px; color:#848383;"><b>Qualification</b></label>
                                        <select name="qualification" id="qualification"
                                            class="form-control registerForm"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                            <option value="Select">Select</option>
                                            <option value="MBBS">MBBS</option>
                                            <option value="MD">MD</option>
                                            <option value="PhD">PhD</option>
                                            <option value="MPhil">MPhil</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="institution"
                                            style="margin-top:8px; margin-bottom:4px;"><b>Institution Name</b></label>
                                        <input type="tel" class="form-control registerForm"
                                            placeholder="ex. DMC, IUB, NSU" name="institution"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                </div>
                            </div>

                            <div id="forSeeker" hidden>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="username" style="margin-bottom:4px;"><b>Name</b></label>
                                        <input type="text" class="form-control registerForm"
                                            placeholder="ex. Alex John" name="name"
                                            style="border: 1px solid #37b8bd; padding: 15px;">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email" style="margin-bottom:4px;"><b>Email</b></label>
                                        <input type="email" class="form-control registerForm"
                                            placeholder="ex. alex@gmail.com" name="email"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="phone" style="margin-bottom:4px;"><b>Phone</b></label>
                                        <input type="tel" class="form-control registerForm"
                                            placeholder="ex. 123-456-7890" name="phone"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="dob" style="margin-bottom:4px;"><b>Date of Birth</b></label>
                                        <input type="date" class="form-control registerForm" name="dob"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="qualification"
                                            style="margin-top:8px; margin-bottom:4px; color:#848383;"><b>Gender</b></label>
                                        <select name="qualification" id="qualification"
                                            class="form-control registerForm"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                            <option value="Select">Select</option>
                                            <option value="MBBS">Male</option>
                                            <option value="MD">Female</option>
                                            <option value="PhD">Prefer not to say</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="serviceType" style="margin-top:12px;"><b>Preferred Service
                                                Type</b></label>
                                        <select class="form-control registerForm" name="serviceType"
                                            style="border: 1px solid #37b8bd; font-weight: regular; padding: 15px;">
                                            <option value="medical">Medical</option>
                                            <option value="therapy">Therapy</option>
                                            <option value="counseling">Counseling</option>
                                            <option value="consultation">Consultation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="questionnaire" style="margin-bottom:4px;"><b>Fill Up the
                                            Questionnaire</b></label>
                                    <button id="openModal"
                                        style="background-color: #37b8bd; color: white; padding: 15px; border: none;">Fill
                                        Up the Questionnaire</button>
                                </div>
                            </div>




                            <div style="text-align: center; margin-top: 12px !important;">
                                <input type="submit" value="Register" class="btn btn-block btn-primary btn-prime"
                                    style="border: 2px ; font-weight: bold; padding:12px; width: 100%; background-color:#029ca1;">
                            </div>
                            <div class="alreadyAccount">
                                <p >Already have an account?
                                    <a href="{{ route('loginUser') }}">Login</a>
                                </p>
                            </div>

                        </form>


                    </div>
                    <div class="col-md-5">
                        <div style="display: inline-block; padding: 10px; margin-left: 60px; margin-top: 40px; margin-bottom: 20px;"
                            class="image-container">
                            <img src="res/img/healer.png" alt="" class="animated-image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="questionnaireModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <h4><b>Mental Health Questionnaire</b></h4>
            <form id="questionnaireForm">
                <div class="form-group">
                    <label for="q1"><b>1. How often do you feel anxious or nervous?</b></label>
                    <textarea name="q1" id="q1" rows="2" placeholder="Your answer..."></textarea>
                </div>
                <div class="form-group">
                    <label for="q2"><b>2. Do you have trouble sleeping due to stress or worries?</b></label>
                    <textarea name="q2" id="q2" rows="2" placeholder="Your answer..."></textarea>
                </div>
                <div class="form-group">
                    <label for="q3"><b>3. How often do you feel overwhelmed by your emotions?</b></label>
                    <textarea name="q3" id="q3" rows="2" placeholder="Your answer..."></textarea>
                </div>
                <div class="form-group">
                    <label for="q4"><b>4. Have you experienced any major life changes recently?</b></label>
                    <textarea name="q4" id="q4" rows="2" placeholder="Your answer..."></textarea>
                </div>
                <div class="form-group">
                    <label for="q5"><b>5. Do you feel that you have a good support system?</b></label>
                    <textarea name="q5" id="q5" rows="2" placeholder="Your answer..."></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
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
    <!-- Footer End -->

    <script src="res/js/jquery-3.3.1.min.js"></script>
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/main.js"></script>
    <script src="registerJs/js/reg.js"></script>



    <script>
        document.querySelectorAll('input[name="userType"]').forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'healer') {
                    document.getElementById('healer').style.display = 'block';
                    document.getElementById('forSeeker').style.display = 'none';
                } else if (this.value === 'seeker') {
                    document.getElementById('healer').style.display = 'none';
                    document.getElementById('forSeeker').style.display = 'block';

                    // Remove hidden attribute and add sliding effect
                    document.getElementById('forSeeker').removeAttribute('hidden');

                    // Add class to trigger the sliding effect (if you want sliding)
                    setTimeout(() => {
                        document.getElementById('forSeeker').classList.add('show');
                    }, 10); // Small delay to ensure the element is visible before sliding
                }
            });
        });
    </script>

    <script>
        document.getElementById("openModal").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission
            document.getElementById("questionnaireModal").style.display = "flex"; // Show the modal
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("questionnaireModal").style.display = "none"; // Hide the modal
        });

        // Optional: Close the modal when clicking outside of the modal content
        window.addEventListener("click", function(event) {
            if (event.target === document.getElementById("questionnaireModal")) {
                document.getElementById("questionnaireModal").style.display = "none"; // Hide the modal
            }
        });
    </script>
