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
      background: linear-gradient(90deg, #ffa7ab 50%, #1c5c5b 50%);
      margin: 0;
      padding: 0;
    }
  </style>
  <title>Halaman Register</title>
</head>

<body>
  <div class="container">
    <div class="row" style="margin-top: 15%;">
      <div class="col-12">
        <div class="card" style="background: linear-gradient(90deg, #1c5c5b 50%, #ffa7ab 50%);">
          <div class="card-body">
            <h3 class="card-title text-white font-weight-bold">
              Register
            </h3>
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="config/register.php" method="POST">
                  <div class="form-group">
                    <label for="nama" style="color: #ffa7ab;" class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control font-weight-bold" id="nama" name="nama" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="username" style="color: #ffa7ab;" class="font-weight-bold">Username</label>
                    <input type="text" class="form-control font-weight-bold" id="username" name="username" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat" style="color: #ffa7ab;" class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control font-weight-bold" id="alamat" name="alamat" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="kota_lahir" style="color: #ffa7ab;" class="font-weight-bold">Kota Lahir</label>
                    <input type="text" class="form-control font-weight-bold" id="kota_lahir" name="kota_lahir" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Kota Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="email" style="color: #ffa7ab;" class="font-weight-bold">Email Address</label>
                    <input type="email" class="form-control font-weight-bold" id="email" name="email" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Email address" required>
                  </div>
                  <div class="form-group">
                    <label for="password" style="color: #ffa7ab;" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control font-weight-bold" id="password" name="password" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="**********" required>
                  </div>

                  <p style="color: white;">Punya akun ? <a href="login.php" style="color: #ffa7ab;" class="font-weight-bold">Login</a></p>

                  <button type="submit" class="btn font-weight-bold" style="background-color: #ffa7ab; color: #1c5c5b;">Register</button>
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