

<?php
// Database connection details
$servername = "localhost";
$username = "shsafricanet_shsadminn";
$password = "S@toshi19";
$dbname = "shsafricanet_shsadmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,address,email,phone,age FROM home WHERE 1 = 1";
$result = $conn->query($sql);

// Check if a row was returned for id = 1
$firstName = "";
$add="";
$secemail="";
$phonee="";
$ag="";

if ($result->num_rows > 0) {
    $firstRow = $result->fetch_assoc();
    $firstName = htmlspecialchars($firstRow['name']);
    $add=htmlspecialchars($firstRow['address']);
    $secemail=htmlspecialchars($firstRow['email']);
    $phonee=htmlspecialchars($firstRow['phone']);
    $ag=htmlspecialchars($firstRow['age']);
}

// Query to select all records from the 'home' table for the table display
$sql_all = "SELECT 1, name, email, phone, address, age FROM home";
$result_all = $conn->query($sql_all);

// Close connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>SHS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        /* Fix for dropdown visibility on mobile */
        .dropdown-menu {
            display: none;
        }

        .dropdown.open .dropdown-menu {
            display: block;
            position: absolute;
            background-color: white;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 50px; /* Adjust logo size as needed */
        }

        .navbar-nav > li > a {
            color: gold;
        }

        .dropdown-menu a p {
            color: black;
            font-size: 12px;
            font-weight: bold;
            margin: 0; /* Remove extra space around text */
        }

        .navbar-toggle {
            border-color: transparent;
        }
        
        /* Fix navbar behavior on mobile */
        @media (max-width: 768px) {
            .navbar-nav {
                width: 100%;
                text-align: center;
            }

            .dropdown-menu {
                position: static;
                float: none;
                background-color: white;
            }

            .dropdown-menu li {
                text-align: center;
            }

            .navbar-nav-first > li > a {
                color: #333; /* Change link color for small screens */
            }
        }
    </style>
</head>
<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- LOGO IMAGE HERE -->
                <a href="index.html" class="navbar-brand">
                    <img src="images/logo.png" class="logo" alt="Logo">
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll" style="color:gold;">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Projects <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="butajira_school.html"><p>Butajira School</p></a></li>
                            <li><a href="butajira_hospital.html"><p>Butajira Hospital</p></a></li>
                            <li><a href="Kebridehar_hospital.html"><p>Kebridehar Hospital</p></a></li>
                            <li><a href="KaramarMCH.html"><p>KaramarMCH</p></a></li>
                        </ul>
                    </li>
                    <li><a href="service.html" class="smoothScroll">Services</a></li>
                    <li><a href="gallery.html" class="smoothScroll">Gallery</a></li>
                    <li><a href="vacancy.html" class="smoothScroll">Vacancy</a></li>
                    <li><a href="about.html" class="smoothScroll">About</a></li>
                    <li><a href="Contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle dropdown toggle on mobile
            $('.dropdown-toggle').click(function(e) {
                e.preventDefault();
                const $dropdown = $(this).parent('.dropdown');
                $dropdown.toggleClass('open');
                $dropdown.find('.dropdown-menu').toggle();
            });

            // Handle navbar toggle button
            $('.navbar-toggle').click(function() {
                const $navbarCollapse = $('.navbar-collapse');
                $navbarCollapse.collapse('toggle');
            });

            // Close the dropdown if clicked outside
            $(document).click(function(e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown').removeClass('open');
                    $('.dropdown-menu').hide();
                }
                if (!$(e.target).closest('.navbar-collapse').length) {
                    $('.navbar-collapse').collapse('hide');
                }
            });
        });
    </script>
</body>
</html>


<style>
/* Styles for the logo */
.navbar-brand .logo {
    height: 75px;
}

/* Media query for mobile screens */
@media (max-width: 767px) {
    .navbar-brand .logo {
        height: 40px; /* Reduce logo size on mobile */
    }

    .navbar-brand {
        margin-left: 0; /* Reset margins for mobile view */
        margin-top: 0;
    }

    .navbar-nav-first {
        margin-left: 0;
    }
}

/* For larger screens */
@media (min-width: 768px) {
    .navbar-brand {
        margin-left: -125px;
        margin-top: -20px;
    }

    .navbar-nav-first {
        margin-left: 100px;
        margin-top: 16px;
    }
}
</style>

        <!-- HOME -->
        <section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>For your needs, We have the expertise</h3>
                            <!-- PHP Code to Display 'name' Column Value -->
                            <h1 style="color: white; font-family: inherit; font-weight: bold; font-size: 40px;">
                            <?php echo $firstName; ?>
                            </h1>

                            <a href="service.html" class="btn" style="background-color: #FFD700; color: #000; border: 2px solid #FFD700; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; margin-right: 10px;">
                                OUR SERVICE 
                            </a>
                            <a href="#" class="btn" style="background-color: transparent; color: #fff; border: 2px solid #fff; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; transition: background-color 0.3s ease, color 0.3s ease; cursor: pointer;" 
                               onmouseover="this.style.backgroundColor='#FFD700'; this.style.color='#000'; this.style.borderColor='#FFD700';" 
                               onmouseout="this.style.backgroundColor='transparent'; this.style.color='#fff'; this.style.borderColor='#fff';">
                               CONTACT US
                            </a>
               


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-8 col-sm-12">
                                <h3>
                                    For your needs, We have the expertise</h3>
                                    <h1 style="color: white; font-family: inherit; font-weight: bold; font-size: 40px;">
                                    <?php echo $firstName; ?>
                                    </h1>

                                    <a href="#" class="btn" style="background-color: #FFD700; color: #000; border: 2px solid #FFD700; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; margin-right: 10px;">
    OUR SERVICE 
</a>
<a href="Contact.html" class="btn" style="background-color: transparent; color: #fff; border: 2px solid #fff; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; transition: background-color 0.3s ease, color 0.3s ease; cursor: pointer;" 
   onmouseover="this.style.backgroundColor='#FFD700'; this.style.color='#000'; this.style.borderColor='#FFD700';" 
   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#fff'; this.style.borderColor='#fff';">
   CONTACT US
</a>

                                </div>
                            </div>
                        </div>
                    </div>

    
                </div>

            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" data-stellar-background-ratio="0.5">
            <div style="background-color: #FFC107; padding: 40px; text-align: left; color: #333; border-radius: 10px; width: 80%; margin: 0 auto;">
                <h2 style="font-size: 24px; font-weight: bold;"><?php echo $phonee; ?></h2>
                <h1 style="font-size: 36px; font-weight: bold;"><?php echo $secemail; ?></h1>
                <p style="font-size: 16px;">We deliver the best healthcare services in Ethiopia.</p>
                <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                    <div style="text-align: center;">
                        <h2 id="counter1" style="font-size: 48px; font-weight: bold;">0</h2>
                        <p style="font-size: 14px;">Combined experience in health systems management</p>
                    </div>
                    <div style="text-align: center;">
                        <h2 id="counter2" style="font-size: 48px; font-weight: bold;">0</h2>
                        <p style="font-size: 14px;">Ongoing Projects</p>
                    </div>
                    <div style="text-align: center;">
                        <h2 id="counter3" style="font-size: 48px; font-weight: bold;">0</h2>
                        <p style="font-size: 14px;">Experienced team members and counting</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="Contact.html" style="display: inline-block; background-color: #333; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">WORK WITH US</a>
                </div>
            </div>
        
            <script>
                // Counting function with an optional symbol
                function countUp(id, start, end, duration, symbol = '') {
                    let current = start;
                    const range = end - start;
                    const increment = end > start ? 1 : -1;
                    const stepTime = Math.abs(Math.floor(duration / range));
                    const element = document.getElementById(id);
        
                    const timer = setInterval(function() {
                        current += increment;
                        element.textContent = current + symbol;
                        if (current == end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
                }
        
                // Trigger when the section comes into view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            countUp('counter1', 0, 20, 2000, '+'); // Count from 0 to 20 with '+'
                            countUp('counter2', 0, 3, 3000);        // Count from 0 to 3 without symbol
                            countUp('counter3', 0, 10, 2500);       // Count from 0 to 10 without symbol
                            observer.disconnect(); // Stop observing once counted
                        }
                    });
                }, { threshold: 0.5 }); // Start counting when 50% of the section is visible
        
                observer.observe(document.getElementById('about'));
            </script>
        </section>
          
        
        <section id="team" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                           
                            <h2>We consult on all things Health</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
    <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.2s">
        <a href="service.html">
            <img class="img-responsive" src="images/key.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Turn-key Project Management</p>
            </div>
        </a>
    </div>
</div>


                    <div class="col-md-4 col-sm-4">
                        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.4s">
                            <a href="service.html"><img class="img-responsive" src="images/chain.jpg" alt=""style="width: 100%; height: 300px;">
                            <div class="team-desc">
                                
                                <p class="mb-1">Supply chain management and consulting</p>
                              
                            </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.6s">
                        <a href="service.html">    <img class="img-responsive" src="images/ict.jpg" alt="" style="width: 100%; height: 300px;">
                            <div class="team-desc">
                                
                                <p class="mb-1">ICT Solutions for health</p>
                                
                            </div>
                        </div>
                        </a>
                    </div>
                </div>


<!-- New Row -->
<div class="row" style="margin-top: 40px;">
    <div class="col-md-12 col-sm-12">
       
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.2s">
           <a href="service.html"> <img class="img-responsive" src="images/hr.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Human Resources for Health</p>
            </div>
           </a>
        </div>

    </div>


    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.4s">
           <a href="service.html"> <img class="img-responsive" src="images/pha.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Pharmaceuticals and Medical Devices</p>
            </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.6s">
         <a href="service.html">   <img class="img-responsive" src="images/inov.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Incubating Innovation in Health</p>
            </div>
            </a>
        </div>
    </div>
</div>


<!-- New Row -->
<div class="row" style="margin-top: 40px;">
    <div class="col-md-12 col-sm-12">
       
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <a href="service.html"><img class="img-responsive" src="images/est.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Establishing and Organizing Hospitals, Speciality Clinics, Medical Offices</p>
            </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.4s">
           <a href="service.html"> <img class="img-responsive" src="images/oper.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Operating Hospitals, Speciality Clinics, Medical Offices.</p>
            </div>
            </a>
        </div>
    </div>


    <div class="col-md-4 col-sm-4">
        <div class="team-card mb-5 wow fadeInUp" data-wow-delay="0.6s">
           <a href="service.html"> <img class="img-responsive" src="images/condact.jpg" alt="" style="width: 100%; height: 300px;">
            <div class="team-desc">
                <p class="mb-1">Conducting Feasibility Studies and Developing Business Plans</p>
            </div>
            </a>
        </div>
    </div>
</div>

            </div>
        </section>


        <div style="display: flex; justify-content: space-between; align-items: center; height: 500px; flex-wrap: wrap;">
            <!-- Left Section (Text over Image Background with Overlay) -->
            <div style="position: relative; width: 50%; height: 400px; background-image: url('images/pexels-sevenstormphotography-443383.jpg'); background-size: cover;">
                <!-- Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                <!-- Content Over Image -->
                <div style="position: relative; z-index: 1; color: white; padding: 50px; display: flex; flex-direction: column; justify-content: center;">
                    <h1 style="font-size: 36px; font-weight: bold; color: white;"><?php echo $add; ?></h1>
                    <a href="Contact.html"><button style="width:175px; margin-top: 40px; padding: 10px 20px; background-color: #ffc107; color: black; border: none; font-size: 18px; cursor: pointer;">GET IN TOUCH</button></a>
                </div>
            </div>
            
            <!-- Right Section (Text over Image Background with Yellow Overlay) -->
            <div style="position: relative; width: 50%; height: 400px; background-image: url('images/pexels-pixabay-159306.jpg'); background-size: cover;">
                <!-- Yellow Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 193, 7, 0.9);"></div>
                <!-- Content Over Image -->
                <div style="position: relative; z-index: 1; padding: 50px; color: black;">
                    <h2 style="font-size: 28px; font-weight: bold;">We Follow Best Practices</h2>
                    <ul style="list-style: none; padding-left: 0;">
                        <li style="margin-bottom: 15px; font-size: 20px;">
                            <span style="font-weight: bold;">&#x23F0;</span> On time Delivery
                        </li>
                        <li style="margin-bottom: 15px; font-size: 20px;">
                            <span style="font-weight: bold;">&#x1F4BB;</span> Modern Technology
                        </li>
                        <li style="margin-bottom: 15px; font-size: 20px;">
                            <span style="font-weight: bold;">&#x2705;</span> Quality Management
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <style>
            @media (max-width: 768px) {
                h1 {
                    font-size: 24px; /* Smaller size for mobile */
                }
                h2 {
                    font-size: 20px; /* Smaller size for mobile */
                }
                ul li {
                    font-size: 16px; /* Smaller size for mobile */
                }
                button {
                    font-size: 16px; /* Smaller button text */
                }
            }
        </style>
        
<div class="section-title wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 170px; margin-bottom: 5px; text-align: center;">
    <h2>Our Latest Works</h2>
</div>

       
        
<!-- Photo Slider Container -->
<div style="width: 100%; max-width: 1000px; height: 500px; margin: 10px auto; overflow: hidden; position: relative;">
    <div class="slider-container" style="display: flex; width: 400%; height: 100%; animation: slide 10s infinite;">
        <!-- Make sure each image occupies 25% of the total slider width -->
        <img src="images/s1.jpeg" alt="Image 1" style="width: 25%; height: 100%; object-fit: contain;">
        <img src="images/s2.jpeg" alt="Image 2" style="width: 25%; height: 100%; object-fit: contain;">
        <img src="images/p2.jpg" alt="Image 3" style="width: 25%; height: 100%; object-fit: contain;">
        <img src="images/p3.jpg" alt="Image 4" style="width: 25%; height: 100%; object-fit: contain;">
    </div>
</div>

<!-- Inline Keyframe Animation -->
<style>
    @keyframes slide {
        0% { margin-left: 0%; }    /* Show the first image */
        20% { margin-left: 0%; }   /* Pause on the first image */
        25% { margin-left: -100%; } /* Slide to the second image */
        45% { margin-left: -100%; } /* Pause on the second image */
        50% { margin-left: -200%; } /* Slide to the third image */
        70% { margin-left: -200%; } /* Pause on the third image */
        75% { margin-left: -300%; } /* Slide to the fourth image */
        95% { margin-left: -300%; } /* Pause on the fourth image */
        100% { margin-left: 0%; }   /* Loop back to the first image */
    }


</style>




<section style="padding: 2rem; max-width: 1000px; margin: auto; margin-top:130px">

    <h2 style="text-align: center; font-size: 30px; color: #202F55; font-weight: bold;"><?php echo $ag; ?></h2>
    
    <div style="border: 1px solid #e1e1e1; margin-bottom: 1rem; border-radius: 5px;">
        <button style="width: 100%; padding: 1rem; font-size: 1.5rem; font-weight: bold; background-color: #f8f9fa; border: none; cursor: pointer; text-align: left; display: flex; justify-content: space-between; align-items: center;" onclick="toggleAnswer(this)">
            1. How do we get in contact with you? <span style="font-size: 1.5rem;">+</span>
        </button>
        <div style="display: none; padding: 1rem; font-size: 1rem;">
            <p style="margin: 0;">Thank you for your interest in getting in touch with us! Please send us an email on <a href="mailto:info@shsafrica.net">info@shsafrica.net</a> and one of our team members will contact you shortly thereafter. We value your network and are happy to tend to you as soon as we can.</p>
        </div>
    </div>

    <div style="border: 1px solid #e1e1e1; margin-bottom: 1rem; border-radius: 5px;">
        <button style="width: 100%; padding: 1rem; font-size: 1.5rem; font-weight: bold; background-color: #f8f9fa; border: none; cursor: pointer; text-align: left; display: flex; justify-content: space-between; align-items: center;" onclick="toggleAnswer(this)">
            2. What does SHS do? <span style="font-size: 1.5rem;">+</span>
        </button>
        <div style="display: none; padding: 1rem; font-size: 1rem;">
            <p style="margin: 0;">Thank you for your interest in our company.<br/><br/>

SHS was founded to assist public, private and non-governmental organizations with their ongoing demands. We strive to provide administrators and managers with high-end, paradigm shifting solutions in their quest to provide better products and services even when they are pre-occupied with daily operations.
<br/><br/>
Our team of specialists is prepared to dedicate their time, knowledge, and passion to finding long-term solutions. They have extensive backgrounds in healthcare management, building construction and follow-up, consulting, and ICT. Our team is richly experienced in critical processes including but not limited to supply chain management, leadership, quality healthcare delivery, project management, hospital development, and capacity building. Our goal is to offer comprehensive support for efficient healthcare delivery.</p>
        </div>
    </div>

    <div style="border: 1px solid #e1e1e1; margin-bottom: 1rem; border-radius: 5px;">
        <button style="width: 100%; padding: 1rem; font-size: 1.5rem; font-weight: bold; background-color: #f8f9fa; border: none; cursor: pointer; text-align: left; display: flex; justify-content: space-between; align-items: center;" onclick="toggleAnswer(this)">
            3. Who do you work with? <span style="font-size: 1.5rem;">+</span>
        </button>
        <div style="display: none; padding: 1rem; font-size: 1rem;">
            <p style="margin: 0;">We work with renowned international and local NGOs, large businesses and investors as well as government agencies who would like us to assist them in their daily operations as well as strategic endeavours. We seek out partnerships in like-minded organizations who see healthcare in Ethiopia the way that we do- a treasure trove of opportunity. We currently have more than 8 active partners.</p>
        </div>
    </div>
</section>

<script>

// Function to animate the counter
function animateValue(id, start, end, duration, suffix = "") {
    let obj = document.getElementById(id);
    let range = end - start;
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / range));
    
    let timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current + suffix;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// When the page loads, start counting

window.onload = function() {
    // Fetch the data from the database
    fetch('db_fetch.html')
        .then(response => response.json())
        .then(data => {
            // Use the data to animate the values
            animateValue("counter1", 0, data.experience, 4000, "+");  // Combined Experience
            animateValue("counter2", 0, data.projects, 2500);         // Ongoing Projects
            animateValue("counter3", 0, data.team, 3000);             // Experienced Team
        })
        .catch(error => console.error('Error fetching data:', error));
};

// Function to animate numbers
function animateValue(id, start, end, duration, suffix = "") {
    const obj = document.getElementById(id);
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start) + suffix;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Function to toggle answer visibility (if needed)
function toggleAnswer(button) {
    const answerDiv = button.nextElementSibling;
    if (answerDiv.style.display === "block") {
        answerDiv.style.display = "none";
        button.querySelector('span').textContent = "+";
    } else {
        answerDiv.style.display = "block";
        button.querySelector('span').textContent = "-";
    }
}


</script>

        
        <!-- FOOTER -->
<!-- FOOTER -->
<footer id="footer" class="footer" style="background-color: #04171a; color: white; ">

    <div class="container footer-top">
        <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 footer-about" style="padding-top: -20px;">
                <h4 class="text-white">Find Us</h4>
                <div class="footer-contact pt-3">
                    <p>Nathel Building 4th Floor Office No. 2,</p>
                    <p>Piassa in front of Central Statistics Agency</p>
                    <p class="mt-3"><strong>Addis Ababa, Ethiopia</p>
                    <p><strong>Email:</strong> <span>info@shsafrica.net</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white ms-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white ms-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white ms-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <!-- Useful Links Section -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4 class="text-white">Useful Links</h4>
                <ul class="list-unstyled">
                    <li><a href="index.html" class="text-white">Home</a></li>
                    <li><a href="about.html" class="text-white">About us</a></li>
                    <li><a href="vacancy.html" class="text-white">Vacancy</a></li>
                    <li><a href="gallery.html" class="text-white">Gallery</a></li>
                    <li><a href="Contact.html" class="text-white">Contact Us</a></li>
                </ul>
            </div>
            <!-- Services Section -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4 class="text-white">Open Hours</h4>
                <ul class="list-unstyled" style="margin-bottom: 10px;">
                    <li><p style="color: #f8f9fa;"> Mon - Fri 8:00AM - 5:30PM</p></li>
                    <li><p style="color: #f8f9fa;"> Satrday 8:00AM - 12:00PM</p></li>
                    <li><p style="color: #f8f9fa;"> Sunday - CLOSED</p></li>
                   
                </ul>
            </div>
            <!-- Newsletter Section -->
            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4 class="text-white">Follow Us</h4>
                <p>Subscribe to our social media and receive the latest news about our products and services!</p>
                <ul style="list-style: none; padding: 0; display: flex;">
                    <li style="margin-right: 10px;">
                        <a href="#" class="fa fa-facebook-square" style="background-color: #ffc107; padding: 10px; border-radius: 50%; color: white; text-decoration: none;"></a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="#" class="fa fa-twitter" style="background-color: #ffc107; padding: 10px; border-radius: 50%; color: white; text-decoration: none;"></a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="#" class="fa fa-instagram" style="background-color: #ffc107; padding: 10px; border-radius: 50%; color: white; text-decoration: none;"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-google" style="background-color: #ffc107; padding: 10px; border-radius: 50%; color: white; text-decoration: none;"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 <!-- Copyright Section -->
 <hr style="border-top: 1px solid white; margin: 0;">

 <section class="p-2 pt-0" style="margin: 0; padding-bottom: 0;">
     <div class="row d-flex justify-content-center" style="margin: 0; padding: 0;">
         <!-- Centered Content -->
         <div class="p-1 text-center" style="margin-bottom: 5px;">
             © 2024 Copyright:
             <a class="text-white" href="https://www.nanadigitalads.com/">Nana Digital Ads</a>
         </div>
     </div>
 </section>
 

</footer>


        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>
          <script src="js/filter.js"></script>
       
        <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=V2xakVgL7gKJ"></script>
       
        <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=V2xakVgL7gKJ"></script>
    </body>
</html>