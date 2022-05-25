<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Sunflower</title>
  <link rel="icon" href="img/sflogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<nav class="navbar sticky-top navbar-expand-lg bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/sflogo2.png" alt="" width="150" height="30" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Link -->
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#contactme">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>

        <?php

        if (isset($_SESSION["useruid"])) {
          echo "<li class='nav-item'><a class='nav-link' href='dashboard.php'>Dashboard</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
        } else {
          echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
        }
        ?>
        <ul class='navbar-nav d-flex flex-row me-1'>
        </ul>
    </div>
  </div>

</nav>
<!-- 2nd Page -->
<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="overlay-image" style="background-image:url(./img/sunflowerbg.jpeg);"></div>
      <div class="container">
        <h1>FOR YOUR COMFORT</h1>
        <p>A hassle-free system just for you.</p>
        <a href="#" class="btn btn-lg btn-dark">Sunflower</a>
      </div>
    </div>

    <div class="carousel-item">
      <div class="overlay-image" style="background-image:url(./img/solarpanel.jpg);"></div>
      <div class="container">
        <h1>FOR THE ENVIRONMENT</h1>
        <p>We promote a green and efficient community.</p>
        <a href="#" class="btn btn-lg btn-dark">Sunflower</a>
      </div>
    </div>

    <div class="carousel-item">
      <div class="overlay-image" style="background-image:url(./img/family.jpg);"></div>
      <div class="container">
        <h1>FOR YOUR FUTURE</h1>
        <p>Ensure a better future by monitoring your expenses.</p>
        <a href="#" class="btn btn-lg btn-dark">Sunflower</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<main class="container4" id="myblog">
  <div class="p-5" style="background-color:#F3F4ED">
    <img src="img/sflogo2.png" class="img-fluid" alt="..." />
    <p class="lead">Sunflower keeps track of your electrical activities and makes recommendations based on graphical illustrations and real-time readings.</p>
    <a class="btn btn-lg btn-dark" href="signup.php" role="button-join">JOIN US</a>
    <a class="btn btn-lg btn-dark" href="login.php" role="button-login">LOGIN</a>
  </div>
</main>
<!--FOOTER-->
<footer class="bg-dark text-center text-white p-2" id="contactme">
  <!-- Grid container -->
  <div class="container5 p-5 py-0">
    <!-- Section: Social media -->
    <section class="mb-2">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Edsuran!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/Edsuran!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com.ph/?gfe_rd=cr&ei=irCMV-qpHsaEmwWIhoGIAQ!" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/edsun_b/?hl=en!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/PabloEscobar-420!" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
    © 2021 Copyright:
    <a class="text-white" href="Sunflower.com">Sunflower, Inc. All Rights Reserved</a>
  </div>
  <!-- Copyright -->
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>