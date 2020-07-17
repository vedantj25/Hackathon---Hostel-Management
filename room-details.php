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
	            <h1 class="h3 mb-0 text-gray-800">Room Details</h1>
	          </div>

            <table id="zctb" class="table table-bordered " cellspacing="0" width="100%">


									<tbody>
<?php
$aid=$_SESSION['login'];
	$ret="select * from registration where emailid='vedant@gmail.com'";
$stmt= $conn->query($ret) ;
$cnt=1;
while($row=$stmt->fetch_object())
	  {
	  	?>

<tr>
<td colspan="4"><h4>Room Realted Info</h4></td>
<td><a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/full-profile.php?id=<?php echo $row->emailid;?>');" title="View Full Details">Print Data</a></td>
</tr>
<tr>
<td colspan="6"><b>Reg no. :<?php echo $row->postingDate;?></b></td>
</tr>



<tr>
<td><b>Room no :</b></td>
<td><?php echo $row->roomno;?></td>
<td><b>Seater :</b></td>
<td><?php echo $row->seater;?></td>
<td><b>Fees PM :</b></td>
<td><?php echo $fpm=$row->feespm;?></td>
</tr>

<tr>
<td><b>Food Status:</b></td>
<td>
<?php if($row->foodstatus==0)
{
echo "Without Food";
}
else
{
echo "With Food";
}
;?></td>
<td><b>Stay From :</b></td>
<td><?php echo $row->stayfrom;?></td>
<td><b>Duration:</b></td>
<td><?php echo $dr=$row->duration;?> Months</td>
</tr>

<tr>
<td colspan="6"><b>Total Fee :
<?php if($row->foodstatus==1)
{
$fd=2000;
echo (($dr*$fpm)+$fd);
}
else
{
echo $dr*$fpm;
}
?></b></td>
</tr>
<tr>
<td colspan="6"><h4>Personal Info Info</h4></td>
</tr>

<tr>
<td><b>Reg No. :</b></td>
<td><?php echo $row->regno;?></td>
<td><b>Full Name :</b></td>
<td><?php echo $row->firstName;?><?php echo $row->middleName;?><?php echo $row->lastName;?></td>
<td><b>Email :</b></td>
<td><?php echo $row->emailid;?></td>
</tr>


<tr>
<td><b>Contact No. :</b></td>
<td><?php echo $row->contactno;?></td>
<td><b>Gender :</b></td>
<td><?php echo $row->gender;?></td>
<td><b>Course :</b></td>
<td><?php echo $row->course;?></td>
</tr>


<tr>
<td><b>Emergency Contact No. :</b></td>
<td><?php echo $row->egycontactno;?></td>
<td><b>Guardian Name :</b></td>
<td><?php echo $row->guardianName;?></td>
<td><b>Guardian Relation :</b></td>
<td><?php echo $row->guardianRelation;?></td>
</tr>

<tr>
<td><b>Guardian Contact No. :</b></td>
<td colspan="6"><?php echo $row->guardianContactno;?></td>
</tr>

<tr>
<td colspan="6"><h4>Addresses</h4></td>
</tr>
<tr>
<td><b>Correspondense Address</b></td>
<td colspan="2">
<?php echo $row->corresAddress;?><br />
<?php echo $row->corresCIty;?>, <?php echo $row->corresPincode;?><br />
<?php echo $row->corresState;?>


</td>
<td><b>Permanent Address</b></td>
<td colspan="2">
<?php echo $row->pmntAddress;?><br />
<?php echo $row->pmntCity;?>, <?php echo $row->pmntPincode;?><br />
<?php echo $row->pmnatetState;?>

</td>
</tr>


<?php
$cnt=$cnt+1;
} ?>
</tbody>
</table>

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
