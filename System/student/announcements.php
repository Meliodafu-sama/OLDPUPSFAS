<?php
session_start();
header('Content-Type: text/html; charset = ISO-8859-1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.ico"/>
  <title>Announcements</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/full-slider.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <a class="navbar-brand" href="#">Scholarship and Financial Assistance Services</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
     aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link" href="about2.php">About</a>
      </li>

      <li class="nav-item active">
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
          <a class="dropdown-item" href="#">FAQ`s</a>
          <a class="dropdown-item" href="#">Citizen Charter</a>
          <a class="dropdown-item" href="#">How to Apply</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle"  href="#">
          Sponsor
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">FAQ`s</a>
          <a class="dropdown-item" href="#">Citizen Charter</a>
          <a class="dropdown-item" href="#">How to Apply</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Login</a>
        </div>
        <!-- /.dropdown-user -->
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



<!-- Page Content -->
<div class="container">

  
  <br>
  <div class="col-lg-12">

    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-body">
          <h4>Latest Announcement</h4>
          <br>
          <ul>

            <?php
            $sql = "SELECT * FROM announcement_table ORDER BY announcement_id DESC LIMIT 10";
            $result = mysqli_query ($conn,$sql);
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result))
            {
              echo "<a href='studentviewannouncement.php?announcement_id={$row['announcement_id']}'> <li> {$row['announcement_title']} <span style='color:black;'>(Posted: {$row['date']})</span> </li> </a>";
            }
            ?>

          </ul>
          
          <br>
          <div class="panel-body">
            <h5>Past Announcement</h5>
            <br>
            <ul>

              <?php
              $sql = "SELECT * FROM announcement_table ORDER BY announcement_id DESC LIMIT 10 OFFSET 10";
              $result = mysqli_query ($conn,$sql);
              ?>
              <?php
              
              while ($row = mysqli_fetch_assoc($result))
              {
                
               echo "<a href='studentviewannouncement.php?announcement_id={$row['announcement_id']}'> <li> {$row['announcement_title']} <span style='color:black;'>(Posted: {$row['date']})</span> </li> </a>";

               


             }
             ?>
           </ul>
         </div>

         



         <br>
         <br>
         <br>
         <br>
         <br>
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
