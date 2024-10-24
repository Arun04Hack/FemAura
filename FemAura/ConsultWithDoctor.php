<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FemAura consultancy</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="responsive-style.css"> -->
    <link rel="stylesheet" href="CSS/consultancy.css">
    <audio id="myAudio">
        <!-- <source src="Iphone Alarm.mp3" type="audio/mpeg"> -->
    </audio>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar section -->
    <header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/icon1.png" class="img-fluid" style="width:150px; height:150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">

                        <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Consult</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Profile</a>
            </li> -->


                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="FindGroup.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ConsultWithDoctor.php">Consult</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog.php">Security</a>
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
    <!-- <div class="buttons-div mt-5">
    <button onclick="playAudio()" type="button">SOS Alert</button>
    <button onclick="pauseAudio()" type="button">Stop Alert</button>
  </div> -->
    <!-- Navbar section exit -->
    <section class="security-section my-5 py-5">
        <div class="container-security">
            <div class="card-security">
                <div class="imgBx-security">
                    <img src="doc1.webp">
                </div>
                <div class="contentBx-security">
                    <br>
                    <h2>Dr Abinaya</h2>
                    <h2>Gynaecologist(M.S.) MBBS</h2>
                    <br>
                    <div class="size-security">
                        <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
                    </div>
                    <br>
                    <!-- <a onclick="toLocation()" style="cursor: pointer;">Police Stations</a> -->
                    <a href="https://demo.videowhisper.com/html5-videochat-php/" style="cursor: pointer;">Connect</a>
                </div>
            </div>
        </div>
        <div class="container-security">
            <div class="card-security">
                <div class="imgBx-security">
                    <img src="doc1.webp">
                </div>
                <div class="contentBx-security">
                    <br>
                    <h2>Dr Rakesh</h2>
                    <h2>Counselor and Therapist</h2>
                    <br>
                    <div class="size-security">
                        <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
                    </div>
                    <br>
                    <a href="https://demo.videowhisper.com/html5-videochat-php/" style="cursor: pointer;">Connect</a>
                </div>
            </div>
        </div>
        <div class="container-security">
            <div class="card-security">
                <div class="imgBx-security">
                    <img src="doc1.webp">
                </div>
                <div class="contentBx-security">
                    <br>
                    <h2>Dr Arun</h2>
                    <h2>Pyschology(M.S.) MBBS</h2>
                    <br>
                    <div class="size-security">
                        <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
                    </div>
                    <br>
                    <a href="https://demo.videowhisper.com/html5-videochat-php/" style="cursor: pointer;">Connect</a>
                </div>
            </div>
        </div>
    </section>


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
            <p class="p-0">Copyright <a href="#">@FemAura</a>2024 All Rights Reserved</p>
        </div>
    </section>



    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script>
        var x = document.getElementById("demo");
        function toLocation() {
            window.open("https://maps.google.com/maps?q=police+near+me");
        }
        var z = document.getElementById("myAudio");

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