<?php include "dbConnection.php" ?>
<!DOCTYPE html >
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="740030373267-95fegib4f55se03ltc1tenl7vlqp21ve.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>Student Dashboard - HMS</title>
  <style>
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  .isa_info, .isa_success, .isa_warning, .isa_error {
  margin: 10px 0px;
  padding:12px;

  }
  .isa_info {
    color: #00529B;
    background-color: #BDE5F8;
  }
  .isa_success {
    color: #4F8A10;
    background-color: #DFF2BF;
  }
  .isa_warning {
    color: #9F6000;
    background-color: #FEEFB3;
  }
  .isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
  }
  .isa_info i, .isa_success i, .isa_warning i, .isa_error i {
    margin:10px 22px;
    font-size:2em;
    vertical-align:middle;
  }
    </style>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body>
	<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

	<?php include "header_student.php" ?>
	<div class="container-fluid ">

	          <!-- Page Heading -->
	          <div class="d-sm-flex align-items-center justify-content-between mb-4">
	            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	          </div>

	          <!-- Content Row -->
	          <div class="row">

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
                      <a href="room-details.php">
                      <div class="col mr-2">
	                      <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Rooms Details</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
	                    </div>
                    </a>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-success shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
                      <a href="book-hostel.php">
                      <div class="col mr-2">
	                      <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Book Hostel</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
	                    </div>
                    </a>
	                  </div>
	                </div>
	              </div>
	            </div>

	            	            <!-- Pending Requests Card Example -->

	          <!-- Content Row -->

	          <!-- Content Row -->
	          <div class="row">

	            <!-- Content Column -->



	          </div>

	        </div>

	<!-- /.container-fluid -->
</div>
<?php include "footer.php" ?>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure you want to log out ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
	<script>
function Nav() {
	document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("accordionSidebar").style.width = "0";
  document.getElementById("wrapper").style.marginLeft= "0";
}
</script>

</body>
</html>
