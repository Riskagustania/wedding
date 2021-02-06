<?php
include 'session.php';
$editWeddingId = $_POST['edit_wedding_id'];
$editNamaPria = $_POST['edit_nama_pria'];
$editNamaWanita = $_POST['edit_nama_wanita'];
$editUsiaPria = $_POST['edit_usia_pria'];
$editUsiaWanita = $_POST['edit_usia_wanita'];
$editTglPesta = $_POST['edit_tgl_pesta'];
$editAlamatPesta = $_POST['edit_alamat_pesta'];
$editBudgetPesta = $_POST['edit_budget_pesta'];
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
  <title>Halaman Edit Wedding</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center" style="margin-top: 5%;">
      <div class="col-6">
        <div class="card" style="background: linear-gradient(90deg, #1c5c5b 50%, #ffa7ab 50%);">
          <div class="card-body">
            <h3 class="card-title text-white font-weight-bold">
              Edit Data
            </h3>
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="config/edit_wedding.php" method="POST">
                  <input type="hidden" name="wedding_id_edit" value="<?= $editWeddingId ?>">
                  <div class="form-group">
                    <label for="nama_pria_edit" style="color: #ffa7ab;" class="font-weight-bold">Nama Mempelai Pria</label>
                    <input type="text" class="form-control font-weight-bold" id="nama_pria_edit" name="nama_pria_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Peter" required value="<?= $editNamaPria ?>">
                  </div>
                  <div class="form-group">
                    <label for="usia_pria_edit" style="color: #ffa7ab;" class="font-weight-bold">Usia Mempelai Pria</label>
                    <input type="number" class="form-control font-weight-bold" id="usia_pria_edit" name="usia_pria_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="25" required value="<?= $editUsiaPria ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama_wanita_edit" style="color: #ffa7ab;" class="font-weight-bold">Nama Mempelai Wanita</label>
                    <input type="text" class="form-control font-weight-bold" id="nama_wanita_edit" name="nama_wanita_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Alice" required value="<?= $editNamaWanita ?>">
                  </div>
                  <div class="form-group">
                    <label for="usia_wanita_edit" style="color: #ffa7ab;" class="font-weight-bold">Usia Mempelai Wanita</label>
                    <input type="number" class="form-control font-weight-bold" id="usia_wanita_edit" name="usia_wanita_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="24" required value="<?= $editUsiaWanita ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pesta_edit" style="color: #ffa7ab;" class="font-weight-bold">Tanggal Pesta</label>
                    <input type="date" class="form-control font-weight-bold" id="tanggal_pesta_edit" name="tanggal_pesta_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="24" required value="<?= $editTglPesta ?>">
                  </div>
                  <div class="form-group">
                    <label for="alamat_edit" style="color: #ffa7ab;" class="font-weight-bold">Alamat Pesta</label>
                    <input type="text" class="form-control font-weight-bold" id="alamat_edit" name="alamat_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="jl. Sukamaju no 1 RT06/02 40983" required value="<?= $editAlamatPesta ?>">
                  </div>
                  <div class="form-group">
                    <label for="budget_edit" style="color: #ffa7ab;" class="font-weight-bold">Budget (Rp)</label>
                    <input type="number" class="form-control font-weight-bold" id="budget_edit" name="budget_edit" style="background-color: #ffa7ab; border-color: #1c5c5b;" placeholder="Rp. 50000000" required value="<?= $editBudgetPesta ?>">
                  </div>
                  <button type="submit" name="edit_now" class="btn font-weight-bold" style="background-color: #ffa7ab; color: #1c5c5b;">Edit Now</button>
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