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
  <link rel="stylesheet" href="css/all.css">
  <title>Halaman Utama</title>
</head>

<body>
  <div class="row m-0" style="width: 100%;">
    <div class="col-10" style="background-color: #1c5c5b;">
      <nav class="navbar navbar-expand navbar-dark justify-content-between ">
        <a class="navbar-brand" href="index.php" style="color: #ffa7ab;">Wedding</a>
        <div class="navbar-nav text-white">
          <a class="nav-link text-white mx-1" href="index.php">Home </a>
          <a class="nav-link text-white mx-1" href="#">Project</a>
          <a class="nav-link text-white mx-1" href="#">Customized</a>
          <a class="nav-link text-white mx-1" href="#">Join</a>
          <a href="register.php" class="btn btn-outline-dark " style="color: #ffa7ab; border-color: #ffa7ab; border-radius: 0; width: 110px;">Register</a>
          <a href="login.php" class="btn btn-outline-dark " style="color: #ffa7ab; border-color: #ffa7ab; border-radius: 0; width: 110px;">Login</a>
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
  <div class="container" style="margin-top: 10rem;">
    <div class="row">
      <div class="col-12">
        <a href="detail.php" style="text-transform: uppercase; color: #1c5c5b;" class="h1">Wedding
          service</a>
        <div class="d-flex justify-content-between mt-3">
          <img src="images/1.jpg" alt="wedding1" width="350px" height="300px" class="rounded">
          <img src="images/2.jpg" alt="wedding2" width="350px" height="300px" class="rounded">
          <img src="images/3.jpg" alt="wedding3" width="350px" height="300px" class="rounded">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center my-5" style="color: #1c5c5b; text-transform: capitalize; font-size: 1.5rem;">may
          your love be
          sweet
          <br>
          your need sweet, your life sweet, your career sweet <br>
          and you will never give up
        </p>
      </div>
    </div>
  </div>
  <div style=" background: linear-gradient(180deg, #e4e8e9 40%, white 60%);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="images/s.jpg" alt="ready" width="320px" height="400px">
        </div>
        <div class="col-6 d-flex flex-column">
          <a href="detail.php" class="h1 mt-5" style="color: #1c5c5b;">Getting Ready</a>
          <p style="color: #1c5c5b;">Free appointment wedding consultant</p>
          <p style="font-style: italic;color: #1c5c5b;">1. Lorem ipsum dolor sit amet consectetur adipisicing.
          </p>
          <p style="font-style: italic;color: #1c5c5b;">2. Lorem, ipsum dolor sit amet consectetur
            adipisicing.
          </p>
          <div class="d-flex justify-content-between" style="margin-top: 6rem;">
            <img src="images/s1.jpg" alt="ready1" width="250px" height="250px" class="rounded">
            <img src="images/s2.jpg" alt="ready2" width="250px" height="180px" style="margin-top: 7rem;" class="rounded">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-5 d-flex flex-column">
        <a href="detail.php" class="h1 mt-5" style="color: #1c5c5b;">Great camera</a>
        <p style="color: #1c5c5b;" class="mb-5">Microphones record good times</p>
        <p class="mt-5" style="color: #1c5c5b; font-style: italic;">
          May your life together be full of love and your love be full of life <br>Best wishes on this
          wonderful journey, as you build your new lives together. <br> Happy tie the knot! May your love be
          modern enough to survive the times, but old-fashioned enough to last forever.
        </p>
      </div>
      <div class="col-7">
        <img src="images/great-camera.jpg" alt="great-camera" class="rounded">
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