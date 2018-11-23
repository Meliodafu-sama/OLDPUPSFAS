
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 15:22:47 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../../index-2.html"><img src="../../images/logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="../../index-2.html"><img src="../../images/logo_mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block align-self-center mr-2" type="button" data-toggle="minimize">
        <span class="icon-list icons"></span>
      </button>
        <p class="page-name d-none d-lg-block">Hi, Dave Mattew</p>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
              <div class="input-group">
                <span class="input-group-addon d-flex align-items-center"><i class="icon-magnifier icons"></i></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mail-dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                <i class="icon-envelope-letter icons"></i>
                <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face6.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">John Doe</p>
                  <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face2.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Leanne Jones</p>
                  <p class="Sender-message">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face3.jpg" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Stella</p>
                  <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face4.jpg" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">James Brown</p>
                  <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                </div>
              </a>
              <a href="#" class="dropdown-item view-all">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown notification-dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-speech icons"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject font-weight-medium">Application Error</p>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">Settings</p>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">New user registration</p>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item lang-dropdown d-none d-sm-block">
            <a class="nav-link" href="#">
              <p class="mb-0">English <i class="flag-icon flag-icon-gb"></i></p>
            </a>
          </li>
          <li class="nav-item d-none d-sm-block profile-img">
            <a class="nav-link profile-image" href="#">
              <img src="../../images/faces/face4.jpg" alt="profile-img">
              <span class="online-status online bg-success"></span>
            </a>
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
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table" cellspacing="0">
                    <thead>
                      <tr>
                          <th>Order #</th>
                          <th>Purchased On</th>
                          <th>Customer</th>
                          <th>Ship to</th>
                          <th>Base Price</th>
                          <th>Purchased Price</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td>2012/08/03</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>$3200</td>
                          <td>
                            <label class="badge badge-info">On hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>2015/04/01</td>
                          <td>Doe</td>
                          <td>Brazil</td>
                          <td>$4500</td>
                          <td>$7500</td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>2010/11/21</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>2016/01/12</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>2017/12/28</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>2000/10/30</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-info">On-hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>2011/03/11</td>
                          <td>Cris</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>2015/06/25</td>
                          <td>Tim</td>
                          <td>Italy</td>
                          <td>$6300</td>
                          <td>$2100</td>
                          <td>
                            <label class="badge badge-info">On-hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>2016/11/12</td>
                          <td>John</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>10</td>
                          <td>2003/12/26</td>
                          <td>Tom</td>
                          <td>Germany</td>
                          <td>$1100</td>
                          <td>$2300</td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
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
  <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 15:24:02 GMT -->
</html>
