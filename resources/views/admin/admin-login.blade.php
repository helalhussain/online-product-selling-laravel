<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
       <link rel="stylesheet" href="assets/css/ok-admin.css" rel="stylesheet">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1></h1>
      </div>
      <h1 class="text-center text-light"></h1>
      <div class="login-box">
        <form class="login-form" method="POST">
            @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOG IN</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="email" class="form-control" name="admin_email"  placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" class="form-control" name="admin_password"  placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!-- <label>
                  <input type="checkbox"><span class="label-text"> </span>
                </label> -->
              </div>
              <!-- <p class="semibold-text mb-2"><a href="ok-reset.php" data-toggle="flip">Forgot Password ?</a></p> -->
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOG IN</button>
          </div>
      </form>
      </div>
    </section>


  </body>
</html>