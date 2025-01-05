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
    <style>
        .btn-primary {
            background-color: transparent !important;
            border: none !important;
            margin-bottom: 20px !important;
            color: rgb(1, 72, 109) !important;
            padding: 45px !important;
            font-weight: bold;
            font-size: 16px !important;
            padding-left: 10px !important;
            padding-right: 15px !important;
            margin-top: -5px !important;
            margin-left: -4px !important;

        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Menu */
        .menu {
            width: 20%;
            background-color: #01354f;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .menu h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            
        }

        .menu ul li {
            margin: 15px 0;
            
        }

        .menu ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
            
        }

        .menu ul li a:hover {
            background-color: #027092;
        }

        /* Main Content */
        .content {
            flex: 1;
            padding: 20px;
        }

        .whats-on-your-mind {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .whats-on-your-mind textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .whats-on-your-mind input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }

        .post-btn {
            background-color: #01354f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .post-btn:hover {
            background-color: #005f7c;
        }

        /* Feed Section */
        .feed-section {
            margin-top: 20px;
        }

        .post {
            display: flex;
            align-items: flex-start;
            background-color: #fff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .left-post {
            justify-content: flex-start;
        }

        .right-post {
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 0 15px;
        }

        .post-content {
            max-width: 70%;
        }

        .reaction-buttons {
            margin-top: 10px;
        }

        .react-btn {
            background-color: #e6e6e6;
            border: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .react-btn:hover {
            background-color: #d1d1d1;
        }

        .feed-section {
            max-height: 500px;
            /* Set the desired maximum height for the feed section */
            overflow-y: hidden;
            /* Default to no scroll */
            padding-right: 15px;
            /* Optional, to add space for the scrollbar */
            display: flex;
            flex-direction: column;
            /* Ensure posts are stacked vertically */
        }

        .post {
            margin-bottom: 15px;
            /* Space between posts */
        }

        .post {
            margin-bottom: 15px;
            /* Space between posts */
        }

        .logout-btn {
            background-color: #057885;
            /* Red background for the logout button */
            color: white;
            /* White text */
            border: none;
            /* Remove border */
            padding: 10px 20px;
            /* Padding for the button */
            font-size: 16px;
            /* Font size */
            width: 100%;
            /* Make the button take full width */
            cursor: pointer;
            /* Change cursor to pointer on hover */
            margin-top: 0px;
            /* Space above the button */
            border-radius: 5px;
            /* Rounded corners */
            transition: background-color 0.3s ease;
            /* Smooth transition on hover */
        }

        .logout-btn:hover {
            background-color: #045f69;
            /* Darker red when hovered */
        }
    </style>
</head>

<body>
    <nav style="height:70px;"class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 style="color:rgb(1, 72, 109) !important;" class="m-0 text-primary"></i>HealYourMind</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('aboutUs') }}" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="{{ route('register') }}" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Myths and Facts</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('register') }}" style="margin-right:5px; "
                class=" btn btn-primary rounded-0 py-2 px-md-3 d-none d-md-block">REGISTER</a>
            <a href="{{ route('loginUser') }}"
                class="btn btn-primary rounded-0 py-2 px-md-3 d-none d-md-block">LOGIN</a>
        </div>
    </nav>

    <div class="dashboard">
        <!-- Sidebar Menu -->
        <div class="menu">
            <h2 style="color:white;">Menu</h2>
            <ul>
                <li><a href="#">Book Appointment</a></li>
                <li><a href="#">My Appointments</a></li>
                <li><a href="#">My Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Subscription</a></li>
                <li><a href="#">Change Password</a></li>

            </ul>
            <button class="logout-btn">Logout</button> <!-- Logout button added -->
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- What's on your mind section -->
            <div class="whats-on-your-mind">
                <h3>What's on your mind?</h3>
                <textarea placeholder="Write something..."></textarea>
                <input type="file" id="upload-image" accept="image/*">
                <button class="post-btn">Post Now</button>
            </div>

            <!-- Feed Section -->
            <div class="feed-section">
                <h3>Recent Posts</h3>

                <!-- Post 1 -->
                <div class="post left-post">
                    <img src="https://via.placeholder.com/50" alt="Profile" class="profile-pic">
                    <div class="post-content">
                        <p><strong>John Doe:</strong> Feeling great today! 😊</p>
                        <div class="reaction-buttons">
                            <button class="react-btn">Like</button>
                            <button class="react-btn">Comment</button>
                            <button class="react-btn">Share</button>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post right-post">
                    <img src="https://via.placeholder.com/50" alt="Profile" class="profile-pic">
                    <div class="post-content">
                        <p><strong>Jane Smith:</strong> Grateful for all the support I’ve received recently. 💕</p>
                        <div class="reaction-buttons">
                            <button class="react-btn">Like</button>
                            <button class="react-btn">Comment</button>
                            <button class="react-btn">Share</button>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post left-post">
                    <img src="https://via.placeholder.com/50" alt="Profile" class="profile-pic">
                    <div class="post-content">
                        <p><strong>Alex Johnson:</strong> Excited to start a new chapter in my life!</p>
                        <div class="reaction-buttons">
                            <button class="react-btn">Like</button>
                            <button class="react-btn">Comment</button>
                            <button class="react-btn">Share</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>









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

    <script>
        window.onload = function() {
            const feedSection = document.querySelector('.feed-section');
            const posts = feedSection.querySelectorAll('.post');

            // If there are more than 2 posts, enable scrolling
            if (posts.length > 2) {
                feedSection.style.overflowY = 'auto'; // Enable vertical scrolling
            } else {
                feedSection.style.overflowY = 'hidden'; // No scrolling
            }
        };
    </script>

</body>

</html>
