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
  <title>Add Student - HMS</title>
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

	<?php include "header.php" ?>
	<div class="container-fluid ">

	          <!-- Page Heading -->
	          <div class="d-sm-flex align-items-center justify-content-between mb-4">
	            <h1 class="h3 mb-0 text-gray-800">Add Student</h1>
	          </div>

	          <!-- Content Row -->
	          <div class="row">

	            <!-- Earnings (Monthly) Card Example -->

	          <!-- Content Row -->

	          <!-- Content Row -->


              <form method="post" action="" class="form-horizontal">


    <div class="form-group">
    <label class="col-lg-12 control-label"><h4 style="color: green" align="left">Room Related info </h4> </label>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Room no. </label>
    <div class="col-lg-8">
    <select name="room" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required>
    <option value="">Select Room</option>

    </select>
    <span id="room-availability-status" style="font-size:12px;"></span>

    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Seater</label>
    <div class="col-lg-8">
    <input type="text" name="seater" id="seater"  class="form-control"  >
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Fees Per Month</label>
    <div class="col-lg-8">
    <input type="text" name="fpm" id="fpm"  class="form-control" >
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Food Status</label>
    <div class="col-lg-8">
    <input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
    <input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Stay From</label>
    <div class="col-lg-8">
    <input type="date" name="stayf" id="stayf"  class="form-control" >
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Duration</label>
    <div class="col-lg-8">
    <select name="duration" id="duration" class="form-control">
    <option value="">Select Duration in Month</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    </select>
    </div>
    </div>


    <div class="form-group">
    <label class="col-lg-4 control-label"><h4 style="color: green" align="left">Personal info </h4> </label>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">course </label>
    <div class="col-lg-8">
    <select name="course" id="course" class="form-control" required>
    <option value="">Select Course</option>

    </select> </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Registration No : </label>
    <div class="col-lg-8">
    <input type="text" name="regno" id="regno"  class="form-control" required="required" >
    </div>
    </div>


    <div class="form-group">
    <label class="col-lg-4 control-label">First Name : </label>
    <div class="col-lg-8">
    <input type="text" name="fname" id="fname"  class="form-control" required="required" >
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Middle Name : </label>
    <div class="col-lg-8">
    <input type="text" name="mname" id="mname"  class="form-control">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Last Name : </label>
    <div class="col-lg-8">
    <input type="text" name="lname" id="lname"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Gender : </label>
    <div class="col-lg-8">
    <select name="gender" class="form-control" required="required">
    <option value="">Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="others">Others</option>
    </select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Contact No : </label>
    <div class="col-lg-8">
    <input type="text" name="contact" id="contact"  class="form-control" required="required">
    </div>
    </div>


    <div class="form-group">
    <label class="col-lg-4 control-label">Email id : </label>
    <div class="col-lg-8">
    <input type="email" name="email" id="email"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Emergency Contact: </label>
    <div class="col-lg-8">
    <input type="text" name="econtact" id="econtact"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Guardian  Name : </label>
    <div class="col-lg-8">
    <input type="text" name="gname" id="gname"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Guardian  Relation : </label>
    <div class="col-lg-8">
    <input type="text" name="grelation" id="grelation"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Guardian Contact no : </label>
    <div class="col-lg-8">
    <input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label"><h4 style="color: green" align="left">Correspondense Address </h4> </label>
    </div>


    <div class="form-group">
    <label class="col-lg-4 control-label">Address : </label>
    <div class="col-lg-8">
    <textarea  rows="5" name="address"  id="address" class="form-control" required="required"></textarea>
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">City : </label>
    <div class="col-lg-8">
    <input type="text" name="city" id="city"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">State </label>
    <div class="col-lg-8">
    <select name="state" id="state"class="form-control" required>
    <option value="">Select State</option>

    </select> </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Pincode : </label>
    <div class="col-lg-8">
    <input type="text" name="pincode" id="pincode"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label"><h4 style="color: green" align="left">Permanent Address </h4> </label>
    </div>


    <div class="form-group">
    <label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
    <div class="col-sm-4">
    <input type="checkbox" name="adcheck" value="1"/>
    </div>
    </div>


    <div class="form-group">
    <label class="col-lg-2 control-label">Address : </label>
    <div class="col-lg-10">
    <textarea  rows="5" name="paddress"  id="paddress" class="form-control" required="required"></textarea>
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">City : </label>
    <div class="col-lg-8">
    <input type="text" name="pcity" id="pcity"  class="form-control" required="required">
    </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">State : </label>
    <div class="col-lg-8">
    <select name="pstate" id="pstate"class="form-control" required>
    <option value="">Select State</option>
    </select> </div>
    </div>

    <div class="form-group">
    <label class="col-lg-4 control-label">Pincode : </label>
    <div class="col-lg-8">
    <input type="text" name="ppincode" id="ppincode"  class="form-control" required="required">
    </div>
    </div>


    <div class="col-sm-6 col-sm-offset-4">
    <button class="btn btn-default" type="submit">Cancel</button>
    <input type="submit" name="submit" Value="Register" class="btn btn-primary">
    </div>
</form>





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
