<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url('asset/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url('asset/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url('asset/css/sb-admin.css');?>" rel="stylesheet">
</head><br/>
<CENTER><H1><b><u><font color="#33adff"><i class="fa fa-snowflake-o"></i> APLIKASI MEETING ROOM</font></b></u></H1></CENTER>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
<body class="bg-dark">
  
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><h3><b><u><center/><font color="red_sky">Login Admin</font></u></div>
      <div class="card-body">
        <form role="form" action="<?=site_url('backend/proseslogin');?>" method="post" >
          <div class="form-group">
            <label for="exampleInputEmail1"><font color="blue"><u>Username</u></font></label>
            <input class="form-control" id="exampleInputEmail1" name="user" type="text"  placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><font color="orange"><u>Password</u></font></label>
            <input class="form-control" id="exampleInputPassword1" name="pass" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" name="remember" type="checkbox"><font color="green"><u>Remember Password</u></font> </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('asset/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('asset/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
</body>

</html>
