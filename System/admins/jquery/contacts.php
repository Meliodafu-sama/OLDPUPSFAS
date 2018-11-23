<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contacts</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
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
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="card px-3">
                <form action="contacts.php" method="POST">
                  <div class="card-body">
                    <h4 class="card-title">Contact Information</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Address</label>
                          <input style="font-size: 13px" type="text" autocomplete="off" class="form-control border-input" value="<?php 
                          echo $row['address'];
                          ?>" name="address">
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>E-mail Address</label>
                          <input style="font-size: 13px" type="text" autocomplete="off" class="form-control border-input" name="email" value="<?php 
                          echo $row['email'];
                          ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Telephone</label>
                          <input style="font-size: 13px" type="text" name="telephone" autocomplete="off" class="form-control border-input" value="<?php 
                          echo $row['telephone'];
                          ?>">
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="text-center">
                      <input type="submit" name="updatecontacts" class="btn btn-info btn-fw" value="Update" >
                    </div>
                  </div>
                </form>
                <?php 
                if (isset($_POST ['updatecontacts']))
                {
                  $address = $_POST['address'];
                  $email = $_POST['email'];
                  $telephone = $_POST['telephone'];
                  $sql = "UPDATE about SET address='$address',email='$email',telephone='$telephone'";
                  mysqli_query ($conn,$sql);
                  echo "<meta http-equiv='refresh' content='0'>";
                }
                ?>
              </div>
            </div>
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include 'footer.php';?>
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
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 15:31:02 GMT -->
</html>
