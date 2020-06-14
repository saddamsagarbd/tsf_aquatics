<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TSF Aquatics - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin_css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin_css/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin_css/css/sb-admin.css')}}" rel="stylesheet">

    <!-- favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin_css/images/favico/favicon.ico')}}" />

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
          <div class="text-center">
            <?php 
              $message = Session::get('message');
              $msg = Session::get('msg');
              if($message)
              {
                echo '<p class="alert alert-danger">'.$message."</p>";
                Session::put('message',null);
              }
              if($msg)
              {
                echo '<p class="alert alert-success">'.$msg."</p>";
                Session::put('msg',null);
              }
            ?>
          </div>
        <div class="card-body">
          <form method="POST" action="{{url('/admin-login-check')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="admin_email" id="inputEmail" class="form-control" placeholder="Email address" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="admin_password" id="inputPassword" class="form-control" placeholder="Password">
                <label for="inputPassword">Password</label>
              </div>
            </div>            
            <input type="submit" name="submit" value="Login" class="btn btn-success btn-sm">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_css/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>
