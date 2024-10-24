<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FemAura Home</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- <link rel="stylesheet" href="responsive-style.css"> -->

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

  <!-- Navbar section -->
  <header class="header_wrapper">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img href="home.php" src="images/icon1.png" class="img-fluid" style="width:150px; height:150px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FindGroup.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Blog.php">Security</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Navbar section exit -->

  <!-- Banner section -->
  <section id="home" class="home">
    <div class="banner_wrapper wrapper">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-1 order-2">
            <h3>Healthcare Accessibility</h3>
            <h1>Empower your wellness, nourish your soul. </h1>
            <p>FemAura is a comprehensive wellness platform designed exclusively for women, blending holistic health, mental well-being, and personal growth.</p>
            <a href="MentalAndPhysical.php" class="main-btn mt-4 fill-btn">Check your health status</a>
            <a href="Tracker.php" class="main-btn mt-4 ms-3">Period tracker</a>
          </div>
          <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
            <div class="top-right-sec">
              <!-- <div class="animate-img">
                                <img class="aimg1" src="./images/top-banner-img/woman-brush.png">
                                <img class="aimg2" src="./images/top-banner-img/doctor.png">
                            </div> -->

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
                <!-- <img src="./images/top-banner-img/Appointment-icon.png"> -->
                <i class='fas fa-cheese' style='font-size:48px;color:#57e8fb'></i>
              </div>
              <div>
                <a href="DietPlans.php" style="text-decoration:none;">
                  <h4 class="UKD" id="hov">Nutration and Diet Plans</h4>
                </a>
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
                <a href="forum.php" style="text-decoration:none;">
                  <h4 class="UKD" id="hov">Community Forum</h4>
                </a>
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
                <a href="a.php" style="text-decoration:none;">
                  <h4 class="UKD" id="hov">Wellness products</h4>
                </a>
                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="footer_wrapper wrapper">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <h5>FemAura Office</h5>
          <p class="ps-0">FemAura is a comprehensive wellness platform designed exclusively for women, blending holistic health, mental well-being, and personal growth.
          </p>
          <div class="contact-info">
            <ul class="list-unstyled p-0">
              <li><a href="#"><i class="fa fa-home me-3"></i> Sri Sairam Engineering College, Chennai</a></li>
              <li><a href="#"><i class="fa fa-phone me-3"></i>+91 8610031411</a></li>
              <li><a href="#"><i class="fa fa-envelope me-3"></i>femaura@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
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
        <div class="col-lg-3 col-md-6 mb-4">
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

        <div class="col-lg-3 col-md-6 mb-4">
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

  <!-- Custom Js Link -->
  <script src="main.js"></script>
</body>

</html>