<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladyhub-Checkup</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive-style.css">
    <link rel="stylesheet" href="CSS/security.css">
    <audio id="myAudio">
        <source src="Iphone Alarm.mp3" type="audio/mpeg">
    </audio>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar section -->
    <header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="icon1.png" class="img-fluid" style="width:80px; height:80px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">
                       
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php" style="color:#fc5185">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="FindGroup.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <!-- <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Testimonial</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                  </li>
                                  <li class="nav-item mt-3 mt-lg-0">
                                    <a class="nav-link" href="#contact">Contact</a>
                                  </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="height:50vh;">

      <div class="buttons-div my-5 py-5" >
        <button type="button" style="border-radius: 10px;" class="btns"><a href="./healthChecker/index.php" style="color: white;text-decoration:none;">Physical Health Checkup</a></button>
        <button type="button" style="border-radius: 10px;" class="btns"><a href="MentalHealthForm.php" style="color: white;text-decoration:none;">Mental Health Checkup</a></button> 
      </div>
    </div>
    <!-- Navbar section exit -->
    <!-- <section class="security-section my-5 py-5">
        <div class="container-security">
            <div class="card-security">
              <div class="imgBx-security">
                <img src="./png-transparent-police-officer-computer-icons-security-police-policeman-angle-hat-people-thumbnail-removebg-preview.png">
              </div>
              <div class="contentBx-security">
                <br>
                <h3>Contact Nearby Police Station</h2>
                <br>
                <div class="size-security">
                  <button onclick="toLocation()" style="cursor: pointer;">Try It</button>
                </div>
                <br>
                <a onclick="toLocation()" style="cursor: pointer;">Police Stations</a>
              </div>
            </div>
          </div>
          <div class="container-security">
            <div class="card-security">
              <div class="imgBx-security">
                <img src="./male-icon-7928-removebg-preview.png">
              </div>
              <div class="contentBx-security">
                <br>
                <h2>Speed Contact</h2>
                <br>
                <div class="size-security">
                  <button onclick="toLocation()" style="cursor: pointer;">Try It</button>
                </div>
                <br>
                <a href="tel:+4733378901" style="cursor: pointer;">Speed Dial 1</a>
              </div>
            </div>
          </div>
          <div class="container-security">
            <div class="card-security">
              <div class="imgBx-security">
                <img src="./male-icon-7928-removebg-preview.png">
              </div>
              <div class="contentBx-security">
                <br>
                <h2>Speed Contact</h2>
                <br>
                <div class="size-security">
                  <button onclick="toLocation()" style="cursor: pointer;">Try It</button>
                </div>
                <br>
                <a href="tel:+4733378901" style="cursor: pointer;">Speed Dial 2</a>
              </div>
            </div>
          </div>
        </section> -->

    <!-- Banner section -->
    <!-- <section id="home" class="home">
        <div class="banner_wrapper wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 order-2">
                        <h3></h3>
                        <h1>Better Dentistry</h1>
                        <p>Join us to a fun and friendly dental environment. Our professionals are working so hard
                            to see smile on your face that you deserve! We are dedicated about our duties.</p>
                        <a href="#" class="main-btn mt-4 fill-btn">Appointment</a>
                        <a href="#" class="main-btn mt-4 ms-3">Learn More</a>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                        <div class="top-right-sec">
                            <div class="animate-img">
                                <img class="aimg1" src="./images/top-banner-img/woman-brush.png">
                                <img class="aimg2" src="./images/top-banner-img/doctor.png">
                            </div>
                            <img class="img-fluid ms-xl-5" src="./images/health-track-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper pb-0">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="./images/top-banner-img/Appointment-icon.png">
                            </div>
                            <div>
                                <h4>Easy Appointment</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="./images/top-banner-img/Emergency-icon.png">
                            </div>
                            <div>
                                <h4>Emergency Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img src="./images/top-banner-img/7-Service-icon.png">
                            </div>
                            <div>
                                <h4>24/7 Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Banner section exit -->

    <!-- About section -->
    <!-- <section id="about" class="about_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-mb-0 mb-5">
                    <div class="position-relative">
                        <img src="./images/about/about-banner1.png" class="img-fluid">
                        <img src="./images/about/about-img2.png" class="about-animate">
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2>Welcome to a Family</h2>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                    <div class="mt-5 card">
                        <div class="about-clinic">
                            <h4>500+</h4>
                            <p>Happy Patients</p>
                        </div>
                        <div class="about-clinic">
                            <h4>88+</h4>
                            <p>Qualified Doctors</p>
                        </div>
                        <div class="about-clinic">
                            <h4>25+</h4>
                            <p>Years Experience</p>
                        </div>
                        <div class="about-clinic">
                            <h4>55+</h4>
                            <p>Dental Awards</p>
                        </div>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="services" class="services_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Our Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/1.svg">
                        </div>
                        <div>
                            <h4>Complete Dentistry</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/2.svg">
                        </div>
                        <div>
                            <h4>Dental Selants</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/3.svg">
                        </div>
                        <div>
                            <h4>Dental Dictionary</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/4.svg">
                        </div>
                        <div>
                            <h4>Dental Implants</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/5.svg">
                        </div>
                        <div>
                            <h4>Oral Surgery</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img src="./images/services/6.svg">
                        </div>
                        <div>
                            <h4>General Dentistry</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3 class="text-black">Our Dentists</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card rounded-3">
                        <div class="team-img">
                            <img src="./images/team/team1.png" class="img-fluid">
                        </div>
                        <div class="team-info pt-4 text-center">
                            <h5>Darry Milin</h5>
                            <p>Oral Surgeon</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card rounded-3">
                        <div class="team-img">
                            <img src="./images/team/team2.png" class="img-fluid">
                        </div>
                        <div class="team-info pt-4 text-center">
                            <h5>Salman Ahmed</h5>
                            <p>Oral Surgeon</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card rounded-3">
                        <div class="team-img">
                            <img src="./images/team/team3.png" class="img-fluid">
                        </div>
                        <div class="team-info pt-4 text-center">
                            <h5>Santa Binte</h5>
                            <p>Oral Surgeon</p>
                            <ul class="social-network">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <section id="gallery" class="gallery_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="./images/gallery/1.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="./images/gallery/2.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="./images/gallery/3.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="./images/gallery/5.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-8 col-sm-6 mb-4">
                    <img src="./images/gallery/4.jpg" class="w-100 h-100">
                </div>
            </div>
        </div>
    </section>

    
    <section id="testimonial" class="testimonial_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h3 class="text-black">Testimonials</h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <img src="./images/testimonial/client1.png" class="img-fluid">
                        <h4 class="pt-4 mb-0">Aliceano Colby</h4>
                        <p>CEO of Prime IT</p> 
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 col-sm-6 ps-md-4 pt-sm-0 pt-4">
                    <h4>Awesome Work</h4>
                    <p>“They really took my individual case to heart. Their team is very helpful. They all work
                        together in an impressive way to make sure that my needs were met and I walked out pain
                        free.”</p>
                </div>
            </div>
        </div>
    </section> 
   

    
    <section class="appointment_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                    <h3>Request your appointment and start your smile makeover!</h3>
                    <a href="#" class="mt-5 main-btn fill-btn">Request Appointment</a>
                </div>
            </div>
        </div>
    </section>

    

    
    <section id="blog" class="blog_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3 class="text-black">Latest Blog</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="./images/blog/1.jpg">
                        <div class="blog-content">
                            <h5 class="text-white mb-4">Dental Insurance with Benefits</h5>
                            <h6 class="text-white">By Admin - February 18, 2018</h6>
                            <p class="mt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                                nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="./images/blog/2.jpg">
                        <div class="blog-content">
                            <h5 class="text-white mb-4">Dental Insurance with Benefits</h5>
                            <h6 class="text-white">By Admin - February 18, 2018</h6>
                            <p class="mt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                                nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="./images/blog/3.jpg">
                        <div class="blog-content">
                            <h5 class="text-white mb-4">Dental Insurance with Benefits</h5>
                            <h6 class="text-white">By Admin - February 18, 2018</h6>
                            <p class="mt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                                nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section id="contact" class="footer_wrapper wrapper">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>FemAura Office</h5>
                    <p class="ps-0">FemAura is a comprehensive wellness platform designed exclusively for women, blending holistic health, mental well-being, and personal growth.
                    </p>
                    <div class="contact-info">
                        <ul class="list-unstyled p-0">
                            <li><a href="#"><i class="fa fa-home me-3"></i> Sri Sairam Engineering College, Chennai</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+91 8610031411</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>femaura2024@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <!-- <li><a href="#">About Us</a></li> -->
                        <!-- <li><a href="#">Our Office</a></li> -->
                        <li><a href="#">Delivery</a></li>
                        <!-- <li><a href="#">Our Store</a></li> -->
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <!-- <li><a href="#">Delivery</a></li> -->
                        <li><a href="#">Our Store</a></li>
                        <!-- <li><a href="#">Guarantee</a></li> -->
                        <!-- <li><a href="#">Buy Gift Card</a></li> -->
                        <!-- <li><a href="#">Return Policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0 ">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>



            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p class="p-0">Copyright <a href="#">@Ladyhub</a>2022 All Rights Reserved</p>
        </div>
    </section>



    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script>
        var x = document.getElementById("demo");
        function toLocation(){
            window.open("https://maps.google.com/maps?q=police+near+me");
        }
        var z= document.getElementById("myAudio"); 

        function playAudio() { 
        z.play(); 
        } 

        function pauseAudio() { 
        z.pause(); 
        } 
        </script>

    <!-- Custom Js Link -->
    <script src="main.js"></script>
</body>

</html>
