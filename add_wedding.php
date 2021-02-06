<?php
include 'session.php';
include 'config/read_wedding.php';
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
  <title>Add Wedding</title>
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


  <div class="row justify-content-center" style="margin-top: 5%;">
    <div class="col-6">
      <div class="card" style="background: linear-gradient(90deg, #1c5c5b 50%, #ffa7ab 50%);">
        <div class="card-body">
          <h3 class="card-title text-white font-weight-bold">
            Insert Data
          </h3>
          <div class="row justify-content-center">
            <div class="col-8">
              <form action="config/create_wedding.php" method="POST">
                <div class="form-group">
                  <label for="nama_pria" style="color: #ffa7ab;" class="font-weight-bold">Nama Mempelai Pria</label>
                  <input type="text" class="form-control font-weight-bold" id="nama_pria" name="nama_pria" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Peter" required>
                </div>
                <div class="form-group">
                  <label for="usia_pria" style="color: #ffa7ab;" class="font-weight-bold">Usia Mempelai Pria</label>
                  <input type="number" class="form-control font-weight-bold" id="usia_pria" name="usia_pria" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="25" required>
                </div>
                <div class="form-group">
                  <label for="nama_wanita" style="color: #ffa7ab;" class="font-weight-bold">Nama Mempelai Wanita</label>
                  <input type="text" class="form-control font-weight-bold" id="nama_wanita" name="nama_wanita" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Alice" required>
                </div>
                <div class="form-group">
                  <label for="usia_wanita" style="color: #ffa7ab;" class="font-weight-bold">Usia Mempelai Wanita</label>
                  <input type="number" class="form-control font-weight-bold" id="usia_wanita" name="usia_wanita" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="24" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_pesta" style="color: #ffa7ab;" class="font-weight-bold">Tanggal Pesta</label>
                  <input type="date" class="form-control font-weight-bold" id="tanggal_pesta" name="tanggal_pesta" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="24" required>
                </div>
                <div class="form-group">
                  <label for="alamat" style="color: #ffa7ab;" class="font-weight-bold">Alamat Pesta</label>
                  <input type="text" class="form-control font-weight-bold" id="alamat" name="alamat" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="jl. Sukamaju no 1 RT06/02 40983" required>
                </div>
                <div class="form-group">
                  <label for="budget" style="color: #ffa7ab;" class="font-weight-bold">Budget (Rp)</label>
                  <input type="number" class="form-control font-weight-bold" id="budget" name="budget" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Rp. 50000000" required>
                </div>
                <button type="submit" name="order" class="btn font-weight-bold" style="background-color: #ffa7ab; color: #1c5c5b;">ORDER</button>
              </form>
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