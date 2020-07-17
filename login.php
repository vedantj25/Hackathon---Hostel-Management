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
  <title>Login - HMS</title>
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
      if(isset($_POST["uid"])){
      $uid = $_POST["uid"];
      $pwd = $_POST["pwd"];
      $SQL = "SELECT *, count('uid') FROM login WHERE uid='$uid' and psw='$pwd'";
      $rs = $conn->query($SQL);
      if($rs)
      {
        while($result = $rs->fetch_assoc())
        {
        if($result['role'] == 'admin')
        {
          $_SESSION['MSG'] = " Success! Logged in Successfully.";

          header("Location: dashboard.php");
        }
        else{

        }


    }

  }
  else
  {
    $_SESSION['MSG'] = " Error! Incorrect Username or Password!";

  }
}
?>
<body class="bg-login">
  <div class="container">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center animated--grow-in">


        <div class="card o-hidden shadow-lg my-5 animated--grow-in">
          <div class="card-body border-success p-3">
            <!-- Nested Row within Card Body -->
            <div class="container">
                <div id="msgDsp">
                  <?php

                  if(isset($_SESSION['MSG']))
                  {
                    $SESSION_MSG = $_SESSION['MSG'];
                    if(strpos($SESSION_MSG,"Error!") > 0){
                    echo "<div class='isa_error'><i class='fa fa-info-check'></i>".$SESSION_MSG."</div>";
                    }
                    elseif(strpos($SESSION_MSG,"Success!") > 0) {
                    echo "<div class='isa_success'><i class='fa fa-info-circle'></i>".$SESSION_MSG."</div>";
                  }

                  $_SESSION['MSG'] = "";
                }
                  ?>
                </div>
                <div class="p-5 ">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style=font-size:30px >Welcome To Hostel Management System!</h1>
                  </div>

                  <form method="post" action="login.php">
                    <div class="form-group">
                      <label class="control-label" for="uid">Username:</label>
                      <input type="text" class="form-control form-control-user" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="pwd">Password:</label>
                      <input type="password" name="pwd" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" text="Login">
                   </form>




          </div>
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

</body>

</html>
