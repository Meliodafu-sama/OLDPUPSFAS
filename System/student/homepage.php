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
  <title>PUP-SFAS Home</title>
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


</head>
<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <a class="navbar-brand" href="homepage.php">Scholarship and Financial Assistance Services</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
     aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about2.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="announcements.php">Announcements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applyscholarship.php">Apply Scholarship</a>
      </li>
      <li  class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle"  href="#">
          Student
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="working.php">FAQ`s</a>
          <a class="dropdown-item" href="citizencharter.php">Citizen Charter</a>
          <a class="dropdown-item" href="citizencharter.php">How to Apply</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle"  href="#">
          Sponsor
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="working.php">FAQ`s</a>
          <a class="dropdown-item" href="citizencharter.php">Citizen Charter</a>
          <a class="dropdown-item" href="apply.sponsor.php">How to Apply</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sponsor.login.php">Login</a>
        </div>
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

<header class="business-header">
  <div class="row">
    <div class="col-lg-12">
     <img src="images/sc3.png" style="width: 1360px;
    height: 400px;
    object-fit: fill;" >
   </div>
 </div>
</header>

<?php
$sql = "SELECT * FROM about";
$result = mysqli_query ($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- Page Content -->
<div class="container">
 <br>
 <br>
 <br>
 <div class="row">
  <div class="col-sm-8">
    <h2 class="mt-4">What We Do</h2>
    <p>
      <?php
      echo $row['wedo'];
      ?>
    </p>
  </div>
  <div class="col-sm-4">
    <h2 class="mt-4">Contact Us</h2>
    <address>
      <strong>Scholarship and Financial Assistance Services</strong>
      <?php
      echo $row['address'];
      ?>
    </address>
    <address>
     <abbr >E-mail:</abbr>
     <a href="mailto:#"><?php
     echo $row['email'];
     ?></a>
     <br>
     <abbr>Telephone:</abbr>
     <?php
     echo $row['telephone'];
     ?>
     <br>
   </address>
 </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-sm-4 my-4">
    <div class="card">
      
      <div class="card-body">
        <h4 class="card-title">How to apply scholarship?</h4>
        <p class="card-text">Students who wants to apply for a specific scholarship</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 my-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Apply as Sponsor</h4>
        <p class="card-text">For more information, </p>
      </div>
      <div class="card-footer">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Find Out More!</button>
     </div>

     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Apply as Sponsor</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p> Thank you for your interest for being one of our benefactor, in order to start your application. You`ll need to provide us, some of your information for us to know your credibility and your Letter of Intent </p>
            <p><strong>Requirements:</strong></p>
            <p style="text-indent: 6%;">• Letter of Intent (<a href="apply.letter.php" target="_blank">Template of Letter of Intent</a>)</p>
            <p style="text-indent: 6%;">• Proposed Memorandum of Agreement (MOA)</p>
            <p><strong>Fees:</strong></p>
            <p style="text-indent: 3%;">Administrative Fees*</p>
            <p style="text-indent: 6%;">Government Institution    Php 500.00</p>
            <p style="text-indent: 6%;">Private Individual/Institution    Php 1,000.00</p>
            <p><strong>Processing Time:</strong> 1-2 months</p>
            <p>Open this pdf file to know more <a href="apply.sponsor.php" target="_blank">How to apply as Sponsor</a></p>
          </div>
          <div class="modal-footer">
            <small><span style="color:#c0392b;"><strong>*</strong></span>prepare your Letter of Intent before proceeding
            </small>
            <a href="apply.sponsor.step1.php" class="btn btn-primary">Proceed</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="col-lg-4">
  <div class="row">
    <h4>Latest Announcements..</h4>
    <div class="col-lg-12" >
     <ul>
      <?php
      $sql = "SELECT * FROM announcement_table ORDER BY announcement_id DESC LIMIT 5";
      $result = mysqli_query ($conn,$sql);
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($result))
      {
       echo "<a href='studentviewannouncement.php?announcement_id={$row['announcement_id']}'> <li> {$row['announcement_title']}</li> </a>";
     }
     ?>
     <a href="announcements.php">See more...</a>
   </ul>
 </div>
</div>
</div>

</div>
<!-- /.row -->

</div>







<!-- Footer -->
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2018-2019 Scholarship and Financial Assistance Services</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>