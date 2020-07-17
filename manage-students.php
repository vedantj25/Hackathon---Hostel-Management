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
  <title>Manage Students - HMS</title>
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-social.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/fileinput.min.css">
<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>





</head>

<body>
	<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

	<?php include "header.php" ?>
	<div class="container-fluid ">

	          <!-- Page Heading -->
	          <div class="d-sm-flex align-items-center justify-content-between mb-4">
	            <h1 class="h3 mb-0 text-gray-800">Manage Students</h1>
	          </div>
														<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th>Sno.</th>
																	<th>Student Name</th>
																	<th>Reg no</th>
																	<th>Contact no </th>
																	<th>room no  </th>
																	<th>Seater </th>
																	<th>Staying From </th>
																	<th>Action</th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Sno.</th>
																	<th>Student Name</th>
																	<th>Reg no</th>
																	<th>Contact no </th>
																	<th>Room no  </th>
																	<th>Seater </th>
																	<th>Staying From </th>
																	<th>Action</th>
																</tr>
															</tfoot>
															<tbody>
						<?php
						$ret="select * from registration";
						$stmt= $conn->prepare($ret) ;
						//$stmt->bind_param('i',$aid);
						$stmt->execute() ;//ok
						$res=$stmt->get_result();
						$cnt=1;
						while($row=$res->fetch_object())
							  {
							  	?>
						<tr><td><?php echo $cnt;;?></td>
						<td><?php echo $row->firstName;?><?php echo $row->middleName;?><?php echo $row->lastName;?></td>
						<td><?php echo $row->regno;?></td>
						<td><?php echo $row->contactno;?></td>
						<td><?php echo $row->roomno;?></td>
						<td><?php echo $row->seater;?></td>
						<td><?php echo $row->stayfrom;?></td>
						<td>
						<a href="manage-students.php?del=<?php echo $row->id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
																</tr>
															<?php
						$cnt=$cnt+1;
															 } ?>


															</tbody>
														</table>


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
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<script>
	$(document).ready( function () {
	    $('#zctb').DataTable();
	} );
</script>

</body>
</html>
