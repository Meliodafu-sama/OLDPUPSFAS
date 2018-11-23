<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Review Sponsor</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.min.html">
  <link rel="stylesheet" href="node_modules/dropify/dist/css/dropify.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo2.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo_mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block align-self-center mr-2" type="button" data-toggle="minimize">
        <span class="icon-list icons"></span>
      </button>
      
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
              <div class="input-group">
                <span class="input-group-addon d-flex align-items-center"><i class="icon-magnifier icons"></i></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
          <span class="icon-menu icons"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include 'sidebarcontents.php';?>
        <!-- partial -->
        <?php

  $dbServer = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "sfasdb";
  $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

  
  ?>

   <?php
   $X=$_GET['sponsorid']; 
   $sql = "SELECT * FROM sponsor_t";
   $result = mysqli_query ($conn,$sql);        
      
         ?>

          <?php
          $sql = "SELECT * FROM sponsor_t WHERE sponsorid = $X";
          $result = mysqli_query ($conn,$sql);
          $row = mysqli_fetch_assoc($result);

          
          ?>

        <div class="content-wrapper">
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body avatar">
                      <h4 class="card-title">Sponsor Info</h4>
                      <img src="images/faces/user3.jpg" alt="">
                      <?php
                      echo "<p class='name'>{$row['company']}</p>";
                      ?> 
                      <p class="designation">- Individual  -</p>
                      <?php
                      echo "<a class='d-block text-center text-dark'>{$row['email']}</a>";
                      ?> 
                      <br>
                     <center>
                        <button class="btn btn-success" onclick="showSwal('warning-message-and-cancel')">Accept</button>
                    <button type="button" class="btn btn-danger btn-fw">Decline</button>
                     </center>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
            <div class="col-lg-8 side-right stretch-card">
              <div class="card">
                <div class="card-body">
                  
                    <h4 class="card-title mb-0">Personal Information</h4>
                    
                 
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                        <form action="#">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="<?php
                      echo "{$row['fname']} {$row['mname']} {$row['lname']}";
                      ?> " disabled="">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" rows="6" class="form-control" placeholder="<?php
                      echo "{$row['address']},{$row['city']},{$row['province']}";
                      ?> " disabled></textarea>
                          </div>
                          <div class="form-group">
                            <label for="mobile">Zip Code</label>
                            <input type="text" class="form-control" id="mobile" placeholder="<?php
                      echo "{$row['zip']}";
                      ?> " disabled>
                          </div>
                          <div class="form-group">
                            <label for="email">Country</label>
                            <input type="email" class="form-control" id="email" placeholder="<?php
                      echo "{$row['country']}";
                      ?> " disabled>
                          </div>
                          <div class="form-group">
                            <label for="email">Telephone Number</label>
                            <input type="email" class="form-control" id="email" placeholder="<?php
                      echo "{$row['telephone']}";
                      ?> " disabled>
                          </div>
                          <div class="form-group">
                            <label for="email">Phone Number</label>
                            <input type="email" class="form-control" id="email" placeholder="<?php
                      echo "{$row['phone']}";
                      ?> " disabled>
                          </div>
                          
                          
                        
                        </form>
                      </div><!-- tab content ends -->
                      <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                          <span class="badge badge-warning text-white">Note : </span>
                          <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                        </div>
                        
                      </div>
                      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
   <script src="js/dropify.js"></script>
   <script src="node_modules/dropify/dist/js/dropify.min.js"></script>
    <script src="js/alerts.js"></script>
  <script src="js/avgrund.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 15:31:02 GMT -->
</html>
