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
  <title>Halaman Detail</title>
</head>

<body>
  <div class="row m-0" style="width: 100%;">
    <div class="col-10" style="background-color: #1c5c5b;">
      <nav class="navbar navbar-expand navbar-dark justify-content-between ">
        <a class="navbar-brand" href="index.php" style="color: #ffa7ab;">Wedding</a>
        <div class="navbar-nav text-white">
          <a class="nav-link text-white mx-1" href="index.php">Home</a>
          <a class="nav-link text-white mx-1" href="#">Project</a>
          <a class="nav-link text-white mx-1" href="#">Customized</a>
          <a class="nav-link text-white mx-1" href="#">Join</a>
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

      </div>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-center my-4">WEDDING SERVICE</h1>
      <div class="card-deck">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center" style="color: #1c5c5b;">Flower</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="images/2.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center" style="color: #1c5c5b;">Cake</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional
              content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="images/3.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center" style="color: #1c5c5b;">Decoration</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
              additional content. This card has even longer content than the first to show that equal
              height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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