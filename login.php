<!DOCTYPE html>

<html>
<head >

  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <meta name="google-signin-scope" content="profile email"/>
  <meta name="google-signin-client_id" content="740030373267-95fegib4f55se03ltc1tenl7vlqp21ve.apps.googleusercontent.com"/>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>Login - HMS</title>
   <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-login">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center animated--grow-in">


        <div class="card o-hidden shadow-lg my-5 animated--grow-in">
          <div class="card-body border-success p-0">
            <!-- Nested Row within Card Body -->


                <div class="p-5 ">

                    <form id="form1" >
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><H1> Welcome to Hostel Management </H1>
                      </h1>
                  </div>

                    <div class="form-group">
                      <label for="username" class="control-label">Username:</label>
                      <input type="text" class="form-control form-control-user" name="username"  placeholder="Username" autocomplete="on" autofocus="autofocus" required="required">
                    </div>
                    <div class="form-group">
                      <label for="password" class="control-label">Password:</label>
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required="required">
                    </div>

                    <div class="form-group">
                      <div class="custom-checkbox">
                        <asp:CheckBox ID="RememberMe" class="custom-checkbox" />&nbsp;Remember Me.
                    </div>
                    </div>
                    <div class="form-group">
                      <input type="button" ID="Login_Btn"  Text="Login" CssClass="btn btn-primary btn-user btn-block">
                    </div>

                </form>




          </div>
        </div>



    </div>

  </div>
</div>
  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <!-- <script src="js/sb-admin-2.min.js"></script> -->
</body>
</html>
