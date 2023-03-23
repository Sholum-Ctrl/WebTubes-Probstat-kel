
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="jsquery.js"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Login</title>
  </head>
  <body>

    @extends('layout.master')

    @section('content')

    <div class="wrapper-signlog">
      <a href="login">
        <span class="icon-close">
          <ion-icon name="close-outline"></ion-icon>
        </span>
      </a>

      <div class="form-box login">
        <h2>Login</h2>
        <form action="function.php" method="post">   <!--action="#"> -->
          <div class="input-box">
          <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input name="user_name" type="text" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input name="password" type="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input name="remember" type="checkbox" />Remember me</label>
          </div>
          <input type="submit" class="btn" name="login" value="Login"/>
          <div class="login-signup">
            <p>Don't have an account?<a href="signup" class="register-link">Signup</a></p>
            <p>forgot passwor?<a href="#" class="register-link">Forgot</a></p>
          </div>
        </form>
      </div>
    </div>
    @endsection
  </body>
</html>
