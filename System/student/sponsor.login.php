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
  <link href="css/signin.css" rel="stylesheet">
</head>



<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sfasdb";
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>



<!-- Page Content -->
 <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="images/pup1.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2018-2019 Scholarship and Financial Assistance Services</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer>
    </form>

        

        

      </body>


      </html>
