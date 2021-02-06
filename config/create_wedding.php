<?php
session_start();
require_once 'koneksi.php';
$id = $_SESSION['id'];
$nama_pria = $_POST['nama_pria'];
$usia_pria = $_POST['usia_pria'];
$nama_wanita = $_POST['nama_wanita'];
$usia_wanita = $_POST['usia_wanita'];
$alamat = $_POST['alamat'];
$tanggal_pesta = $_POST['tanggal_pesta'];
$budget = $_POST['budget'];

if (isset($_POST['order'])) {
    try {
        $queryAddWedding = $koneksi->prepare("INSERT INTO `wedding` (`wedding_id`, `user_id`, `nama_pria`, `usia_pria`, `nama_wanita`, `usia_wanita`, `tanggal_pesta`, `alamat_pesta`, `budget`) VALUES (NULL, ?, ?, ?,?,?,?,?,?)");
        $queryAddWedding->execute([$id, $nama_pria, $usia_pria, $nama_wanita, $usia_wanita, $tanggal_pesta, $alamat, $budget]);
        if ($queryAddWedding->rowCount() > 0) {
            echo "<script>
            alert('Berhasil Order');
            window.location.replace('../main.php');
            </script>";
        } else {
            echo "<script>
            alert('Gagal Order');
            window.location.replace('../main.php');
            </script>";
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
