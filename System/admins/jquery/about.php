<?php
 session_start();
header('Content-Type: text/html; charset = ISO-8859-1');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About</title>
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
        <!-- partial -->
        <?php
        $sql = "SELECT * FROM about";
        $result = mysqli_query ($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="card px-3">
                <form action="about.php" method="POST">
                  <div class="card-body">
                    <h4 class="card-title">What We Do</h4>
                    <textarea rows="7" class="form-control border-input" name="wedo" style="font-size: 13px"><?php 
                    echo $row['wedo'];
                    ?></textarea>
                    <br>
                    <div class="text-center">
                      <input type="submit" name="updatewedo" class="btn btn-info btn-fw" value="Update What We Do" >
                    </div>
                  </div>
                </form>
                <?php 
                if (isset($_POST ['updatewedo']))
                {
                  $wedo = $_POST['wedo'];
                  $sql = "UPDATE about SET wedo='$wedo'";
                  mysqli_query ($conn,$sql);
                  echo "<meta http-equiv='refresh' content='0'>";
                }
                ?>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="card px-3">
                <form action="about.php" method="POST">
                  <div class="card-body">
                    <h4 class="card-title">Vision</h4>
                    <textarea rows="5" class="form-control border-input" name="vision" style="font-size: 13px"><?php 
                    echo $row['vision'];
                    ?></textarea>
                    <br>
                    <div class="text-center">
                      <input type="submit" name="update" class="btn btn-info btn-fw" value="Update Vision">
                    </div>
                  </div>
                </form>
                <?php 
                if (isset($_POST ['update']))
                {
                  $vision = $_POST['vision'];
                  $sql = "UPDATE about SET vision='$vision'";
                  mysqli_query ($conn,$sql);
                  echo "<meta http-equiv='refresh' content='0'>";
                }
                ?>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="card px-3">
                <form action="about.php" method="POST">
                  <div class="card-body">
                    <h4 class="card-title">Mission</h4>
                    <textarea rows="12" class="form-control border-input" name="mission" style="font-size: 13px"><?php 
                    echo $row['mission'];
                    ?></textarea>
                    <br>
                    <div class="text-center">
                     <input type="submit" name="updatemission" class="btn btn-info btn-fw" value="Update Mission">
                   </div>
                 </div>
               </form>
               <?php 
               if (isset($_POST ['updatemission']))
               {
                $mission = $_POST['mission'];
                $sql = "UPDATE about SET mission='$mission'";
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
