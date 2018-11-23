<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <!-- FAV ICON  -->
  <link rel="shortcut icon" href="favicon.ico" />
  <!-- FAV ICON -->
  <title>Announcement</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/blog-post.css" rel="stylesheet">

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
  <br>
<?php

  $dbServer = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "sfasdb";
  $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

  
  ?>

   <?php
   $X=$_GET['announcement_id']; 
   $sql = "SELECT * FROM announcement_table";
   $result = mysqli_query ($conn,$sql);        
      
         ?>

          <?php
          $sql = "SELECT * FROM announcement_table WHERE announcement_id = $X";
          $result = mysqli_query ($conn,$sql);
          $row = mysqli_fetch_assoc($result);

          
          ?>
         

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="mt-4">
          <?php
          echo "<h2>{$row['announcement_title']}</h2>";
          ?>
        </h1>
        <p class="lead">
          by
          <a>
            <?php
          echo "{$row['announcement_author']}";
          ?>
          </a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p> Posted on
           <?php
          echo "{$row['date']}";
          ?>
        </p>

        <hr>
        <p class="lead">
          <?php
          echo "{$row['announcement_article']}";
          ?>
        </p>     
      </div>
      <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Other Announcements</h5>
            <div class="card-body">
              <div class="input-group">
             
                 <ul>

          <?php
          $sql = "SELECT * FROM announcement_table LIMIT 10";
          $result = mysqli_query ($conn,$sql);
          ?>
          <?php
          while ($row = mysqli_fetch_assoc($result))
          {
              echo "<a href='studentviewannouncement.php?announcement_id={$row['announcement_id']}'> <li> {$row['announcement_title']}</li> </a>";
          }
           ?>
       </ul>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>



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