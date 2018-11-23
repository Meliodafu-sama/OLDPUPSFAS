<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit</title>
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
        $X=$_GET['announcement_id']; 
         
        $sql = "SELECT * FROM announcement_table WHERE announcement_id = $X";
        $result = mysqli_query ($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card overflow-hidden dashboard-curved-chart">
                <div class="card-body mx-2">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Announcement</h4>

                        <form action="announcement.php" method="POST">

                          
                        
                            <label>Title</label>
                            <input type="text" class="form-control" name="announcement_title"  value="<?php 
                            echo $row['announcement_title'];
                            ?>">
                                     <br>
                            <label>Author</label>
                            <input type="text" class="form-control" name="announcement_author"  value="<?php 
                            echo $row['announcement_author'];
                            ?>">
                                    <br>
                            <label>Article</label>
                            <textarea class="form-control" rows="10" name="announcement_article"><?php 
                            echo $row['announcement_article'];
                            ?></textarea>
                            
                         










                            <br>
                          <input type="submit" name="updateannouncement" class="btn btn-success mr-2" value="Update">
                          <a class="btn btn-light" href="announcement.php">Cancel</a>

                        </form>

                        <?php 

                                    if (isset($_POST ['updateannouncement']))
                                    {
                                        $announcement_title = $_POST['announcement_title'];
                                        $X = $_POST['announcement_id'];
                                        
                                        $sqla = "UPDATE announcement_table SET announcement_title='$announcement_title' WHERE announcement_id='$X'";
                                        mysqli_query ($conn,$sqla);
                                    }
                                    ?>

                                   

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
