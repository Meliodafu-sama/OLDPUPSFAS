<?php
 session_start();
header('Content-Type: text/html; charset = ISO-8859-1');
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="shortcut icon" href="favicon.ico" />
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/half-slider.css" rel="stylesheet">
 <link href="css/heroic-features.css" rel="stylesheet">
 <link href="css/4-col-portfolio.css" rel="stylesheet">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
 <link href="dist/css/sb-admin-2.css" rel="stylesheet">
 <link href="vendor/morrisjs/morris.css" rel="stylesheet">
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="css/business-frontpage.css" rel="stylesheet">
 <title>About</title>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
                <a class="navbar-brand" href="#">Scholarship and Financial Assistance Services</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="homepage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#vision">Vision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#mission">Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ourteam">Our Team</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#map">Map</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php 
  $dbServer = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "sfasdb";
  $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
  ?>

   <?php
        $sql = "SELECT * FROM about";
        $result = mysqli_query ($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        ?>


    <header class="bg-primary text-white" style="background-image: url(images/campus.jpg);background-size: 100% 120%;background-repeat: no-repeat;">
      <div class="container text-center">
        <h1>About Us</h1>
        <p class="lead">SFAS is committed to provide access to educational opportunities in terms of scholarship and financial assistance to PUP students.</p>
      </div>
    </header>

    <section id="vision">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Our Vision</h2>
            <p class="lead"><?php
            echo $row['vision'];
            ?></p>
            
          </div>
        </div>
      </div>
    </section>

    <section id="mission">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Our Mission</h2>
            <p class="lead"><?php
            echo $row['mission'];
            ?></p>
            
          </div>
        </div>
      </div>
    </section>

    <section id="ourteam">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About this page</h2>
            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
            <ul>
              <li>Clickable nav links that smooth scroll to page sections</li>
              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="contactus">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <h2>Our Office</h2>
            <p class="lead"><?php
            echo $row['address'];
            ?></p>
           
          </div>
           <div class="col-lg-4 mx-auto">
            <h2>General Contact</h2>
            <p class="lead"><b>Scholarship and Financial Assistance Services</b></p>
            <p><b>Telephone:</b> <?php
            echo $row['telephone'];
            ?></p>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <h2>Connect with Us</h2>
            <p class="lead"><b>E-mail:</b><?php
            echo $row['email'];
            ?></p>
            <p><b>Facebook Page:</b><a href="https://www.facebook.com/PUPSFAS/?ref=br_rs" style="color: black;"> https://www.facebook.com/PUPSFAS/?ref=br_rs</a></p>
           
          </div>
           <div class="col-lg-4 mx-auto">
            <h2 style="color: #7f0909;">PUP Website</h2>
            <p class="lead"><b>PUP: </b><a href="https://www.pup.edu.ph/">https://www.pup.edu.ph/</a></p>
            <p><b>PUP-SFAS: </b><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.pup.edu.ph%2Fstudentservices%2Fsfas%2F&h=AT3nW3xTb6Kf_X_5bpy3dpYal7fudSrbNM3McSJLVpsi7zEbyiNyAszyw4D44-m8cOgbX62dVZtZOJGtrPrVCFu8QenuGDRt62QdghCHEWzd1RdD_gf2zP0-9Dp9tIMAyyaWASs4bT-OwdB4LzN92cignkO8y6kfld2tEkBf6cIbVHotvd7ci5mxQ-UpRRFbBdUblOC1dmOd8uSJ9ebUvslyxYEgBgEdWTrcve7si8RYdbL5DKa1bH9I2P5HhZtwpLt_IX88w23HH2o0QgxwANeCMsvWBEqtO98pCTz_5FX-VoNCpH5uMUobPZscYRMlYLeK06WHRkMyfqdx0RvXss4F4mDNgpU1EaYEw4aaxdkBBnY0m5RSk1pTH1--7l6r4jYnbCo_wA1DfqqwF-HFbT35n58Ztx4LwUeDYPi3lOu9sbtUyBpuK1Pw_ertCrfrxhyo1BOFEO3WBLcqPooBVhNttQ_4Fdj0qCI8ubk"></a>https://www.pup.edu.ph/studentservices/sfas/</p>
           
          </div>
        </div>
      </div>
    </section>

    <section id="map">
      <div class="container" style="margin-top: -10%;">
        <div class="row">
          <div class="col-lg-12">
            <h2>Map</h2>
           
            <div id="map" style="width:100%;height:400px;background:yellow"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d4694.527490848755!2d121.00807826423258!3d14.597972894746439!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42056a19f2280cea!2sPolytechnic+University+of+the+Philippines-Institute+for+Science+and+Technology+Research!5e1!3m2!1sen!2sph!4v1531770301416" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
          </div>
        </div>
      </div>
    </section>
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2018-2019 Scholarship and Financial Assistance Services</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
