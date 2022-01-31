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
                <li class="nav-item"><a class="nav-link" href="#myCarousel">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactme">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactme">AboutUs</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                <ul class="navbar-nav d-flex flex-row me-1">
                </ul>
        </div>
    </div>

</nav>
<!--SIGNUP FORM -->
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invalid UID") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalid Email") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "password don't match") {
            echo "<p>Password don't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Taken Username!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>

</section>



<!--FOOTER-->
<footer class="bg-dark text-center text-white" id="contactme">
    <!-- Grid container -->
    <div class="container5 p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
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
        <a class="text-white" href="S+EClothing.com">S + E Clothing, Inc. All Rights Reserved</a>
    </div>
    <!-- Copyright -->
</footer>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>