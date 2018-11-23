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
    <title>Apply</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a style="font-size: 15px;color: white;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES<p style="font-size: 25px;color: white;">Scholarship and Financial Assistance Services</p></a>
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
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="announcements.php">Announcement</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="applyscholarship.php">Apply Scholarships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchtab.php">Students</a>
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
    $sql = "SELECT * FROM typeofscholarship_table";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>


    <!-- Page Content -->
    <div class="container">

    
<br><br><br>


      <div class="row text-center">
<?php 
      while ($row = mysqli_fetch_array($result))
      {
       echo " <div class='col-lg-3 col-md-6 mb-4'>";
       echo "<div class='card'>";
       echo "<img class='card-img-top' src='images/".$row['image']."' >";
       echo "<div class='card-body'>";
       echo "<h4 class='card-title'>{$row['title']}</h4>";
       echo "<p class='card-text'>{$row['description']}</p>";
       echo " </div>";
       echo " <div class='card-footer'>";
       echo " <a href='studentprivate_scholarship.php?title={$row['title']}' class='btn btn-primary'>Apply!</a>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
}
       ?>
    

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
   
      <!-- Footer -->
    <footer class="py-1 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; 2018 Scholarship and Financial Assistance Services</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
