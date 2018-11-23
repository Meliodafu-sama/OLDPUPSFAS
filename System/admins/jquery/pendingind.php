<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Individual Sponsors</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
   <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
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
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
              <h4>Pending Sponsors (Individual)</h4>
              <div class="row">
                <?php
                        if (isset($_GET ['delete'])){
                            $delete_id = $_GET['delete'];
                            $deletequery = "DELETE FROM announcement_table WHERE announcement_id='$delete_id'";
                            mysqli_query ($conn,$deletequery);
                        }
                        ?>
                        <?php
                        $sql = "SELECT * FROM sponsor_t WHERE sponsortype='I'";
                        $result = mysqli_query ($conn,$sql);

                        ?>

                <div class="col-12">
                  <table id="order-listing" class="table" cellspacing="0">

                    <thead>
                                 <?php
                                 
                                 echo " <tr>
                                 <th>Name</th>
                                 <th>Status</th>
                                 <th>Phone Number</th>
                                 <th>Email</th>
                                 <th>Date Applied </th>
                                 <th>Action</th>
                                 
                                 
                                 </tr> ";
                                 ?>
                    </thead>

                    <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                  echo  " <tr>
                                  <td> {$row['fname']} {$row['lname']} </td>
                                  <td> <small class='badge badge-secondary'>Step {$row['status']}</small> </td>
                                  <td> {$row['phone']} </td>
                                  <td> {$row['email']} </td>
                                  <td> {$row['date']} </td>
                                  
                                  <td>
                                                                    <a onclick='return confirm('Are you sure?');' class='btn btn-info btn-fw' href='reviewindiv.php?sponsorid={$row['sponsorid']}'>Review Application</a> 
                                  
                                  </td>
                                  
                                  </tr> ";
                              }
                              ?>
                      </tbody>
                  </table>
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
 <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="js/data-table.js"></script>
<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 15:31:02 GMT -->
</html>
