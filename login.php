<?php
session_start();
if (isset($_SESSION['id'])) {
  header('Location: main.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(90deg, #1c5c5b 50%, #ffa7ab 50%);
      margin: 0;
      padding: 0;
    }
  </style>
  <title>Halaman Login</title>
</head>

<body>
  <div class="container">
    <div class="row" style="margin-top: 15%;">
      <div class="col-12">
        <div class="card" style="background: linear-gradient(90deg, #ffa7ab 50%, #1c5c5b 50%);">
          <div class="card-body">
            <h3 class="card-title text-white font-weight-bold">
              Login
            </h3>
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="config/login.php" method="POST">
                  <div class="form-group">
                    <label for="email" style="color: #1c5c5b;" class="font-weight-bold">Email
                      address</label>
                    <input type="email" class="form-control font-weight-bold" id="email" name="email" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Email address" required>
                  </div>
                  <div class="form-group">
                    <label for="password" style="color: #1c5c5b;" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control font-weight-bold" id="password" name="password" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Password" required>
                  </div>
                  <p>Tidak punya akun ? <a href="register.php" style="color: #1c5c5b;" class="font-weight-bold">Register</a></p>
                  <button type="submit" name="login" class="btn font-weight-bold" style="background-color: #1c5c5b; color: white;">Login</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 text-center text-white font-weight-bold">
            <p class="my-3">@Copyright by 18111142_Riska Gustania_TIFRP18CIDA_UASWEB1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


</html>