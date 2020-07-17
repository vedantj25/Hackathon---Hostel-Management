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
  <title>Add Room - HMS</title>
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
<?php
if(isset($_POST['submit']))
{
$seater=$_POST['seater'];
$roomno=$_POST['rmno'];
$fees=$_POST['fee'];
$sql="SELECT room_no FROM rooms where room_no=?";
$stmt1 = $conn->prepare($sql);
$stmt1->bind_param('i',$roomno);
$stmt1->execute();
$stmt1->store_result();
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert('Room alreadt exist');</script>";
}
else
{
$query="insert into  rooms (seater,room_no,fees) values(?,?,?)";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('iii',$seater,$roomno,$fees);
$stmt->execute();
echo"<script>alert('Room has been added successfully');</script>";
}
}
?>

<body>
	<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

	<?php include "header.php" ?>
	<div class="container-fluid ">

	          <!-- Page Heading -->
	          <div class="d-sm-flex align-items-center justify-content-between mb-4">
	            <h1 class="h3 mb-0 text-gray-800">Add room</h1>
	          </div>

	          <!-- Content Row -->
            <form method="post" class="form-horizontal">

              <div class="hr-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Select Seater  </label>
                <div class="col-sm-8">
                <Select name="seater" class="form-control" required>
  <option value="">Select Seater</option>
  <option value="1">Single Seater</option>
  <option value="2">Two Seater</option>
  <option value="3">Three Seater</option>
  <option value="4">Four Seater</option>
  <option value="5">Five Seater</option>
  </Select>
  </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label">Room No.</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="rmno" id="rmno" value="" required="required">
  </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label">Fee(Per Student)</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="fee" id="fee" value="" required="required">
  </div>
  </div>

  <div class="col-sm-8 col-sm-offset-2">
  <input class="btn btn-primary" type="submit" name="submit" value="Create Room ">
                </div>
              </div>

            </form>

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
