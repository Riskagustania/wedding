<?php
include 'session.php';
include 'config/read_user.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <title>Biodata</title>
</head>

<body>
  <div class="row m-0" style="width: 100%;">
    <div class="col-10" style="background-color: #1c5c5b;">
      <nav class="navbar navbar-expand navbar-dark justify-content-between ">
        <a class="navbar-brand" href="main.php" style="color: #ffa7ab;">Wedding</a>
        <div class="navbar-nav text-white">
          <a class="nav-link text-white mx-1" href="main.php">Home </a>
          <a class="nav-link text-white mx-1" href="#">Project</a>
          <a class="nav-link text-white mx-1" href="#">Customized</a>
          <a class="nav-link text-white mx-1" href="#">Join</a>
          <div class="d-flex mx-5">
            <p style="color: #ffa7ab;" class="font-weight-bold my-2 mx-5">Hi, <?= $username ?></p>
            <?php if ($foto == null || $foto == '') : ?>
              <a href="biodata.php">
                <img src="images/s.jpg" alt="<?= $username ?>" width="40" height="40" class="rounded-circle">
              </a>
            <?php else : ?>
              <a href="biodata.php">
                <img src="<?= $foto ?>" alt="<?= $username ?>" width="40" height="40" class="rounded-circle">
              </a>
            <?php endif; ?>
          </div>
          <a href="config/logout.php" class="btn btn-outline-dark " style="color: #ffa7ab; border-color: #ffa7ab; border-radius: 0; width: 110px;">Logout</a>
        </div>
      </nav>
      <div class="row ">
        <div class="col-12 text-center">
          <h1 style="position: absolute; top: 20%; right: 0; left: 0; font-size: 7rem;" class="text-white">
            Wedding
            <br>Carnival
          </h1>
          <img src="images/weeding.png" alt="weeding" style="position: relative;
                    top: 15%;">
        </div>
      </div>
    </div>
    <div class="col-2 d-flex justify-content-around align-items-center" style="background-color: #ffa7ab; writing-mode: vertical-lr;">
      <p class="h4 mt-5" style="color: #1c5c5b;font-style: italic;">Contact Hunxiaoer</p>
      <button class="btn btn-outline-light" style="color: #1c5c5b;border-color: #1c5c5b; border-radius: 100px;">
        <i class="fas fa-comments"></i>
      </button>
      <button class="btn btn-outline-light" style="color: #1c5c5b;border-color: #1c5c5b; border-radius: 100px;">
        <i class="fas fa-tree"></i>
      </button>
      <button class="btn btn-outline-light" style="color: #1c5c5b;border-color: #1c5c5b; border-radius: 100px;">
        <i class="fas fa-phone-volume"></i>
      </button>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center" style="margin-top: 5%;">
      <div class="col-6">
        <div class="card" style="background: linear-gradient(90deg, #1c5c5b 50%, #ffa7ab 50%);">
          <div class="card-body">
            <h3 class="card-title text-white font-weight-bold">
              Biodata
            </h3>
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="config/edit_biodata.php" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_id" value="<?= $userID ?>">
                  <div class="form-group">
                    <label for="nama_user" style="color: #ffa7ab;" class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control font-weight-bold" id="nama_user" name="nama_user" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Peter" required value="<?= $nama ?>">

                    <label for="username_user" style="color: #ffa7ab;" class="font-weight-bold">Username</label>
                    <input type="text" class="form-control font-weight-bold" id="username_user" name="username_user" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Peter" required value="<?= $username ?>">

                    <label for="email_user" style="color: #ffa7ab;" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control font-weight-bold" id="email_user" name="email_user" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Peter" required value="<?= $email ?>">


                    <label for="alamat_user" style="color: #ffa7ab;" class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control font-weight-bold" id="alamat_user" name="alamat_user" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Bandung" required value="<?= $alamat ?>">

                    <label for="kota_lahir_user" style="color: #ffa7ab;" class="font-weight-bold">Kota Lahir</label>
                    <input type="text" class="form-control font-weight-bold" id="kota_lahir_user" name="kota_lahir_user" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Bandung" required value="<?= $kotaLahir ?>">

                    <input type="hidden" name="password" value="<?= $currentPassword ?>">
                    <label for="password1" style="color: #ffa7ab;" class="font-weight-bold">Password Sekarang</label>
                    <input type="password" class="form-control font-weight-bold" id="password1" name="password1" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="******">

                    <label for="password2" style="color: #ffa7ab;" class="font-weight-bold">Password Baru</label>
                    <input type="password" class="form-control font-weight-bold" id="password2" name="password2" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="*******">


                    <label for="gambar_user" style="color: #ffa7ab;" class="font-weight-bold">Gambar</label>
                    <input type="file" class="form-control font-weight-bold" id="gambar_user" name="gambar_user" style="background-color: #ffa7ab; border-color: #1c5c5b;">

                    <button type="submit" name="edit_biodata" class="btn font-weight-bold mt-4" style="background-color: #ffa7ab; color: #1c5c5b;">
                      Edit Now
                    </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3" style="background-color: #336e6cca;">
    <div class="col-12 text-center text-white font-weight-bold">
      <p class="my-3">@Copyright by 18111142_Riska Gustania_TIFRP18CIDA_UASWEB1</p>
    </div>
  </div>
</body>
<script language="javascript" src="js/all.js"></script>


</html>