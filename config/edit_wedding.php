<?php
require_once 'koneksi.php';

$editWeddingId = $_POST['wedding_id_edit'];
$editNamaPria = $_POST['nama_pria_edit'];
$editUsiaPria = $_POST['usia_pria_edit'];
$editNamaWanita = $_POST['nama_wanita_edit'];
$editUsiaWanita = $_POST['usia_wanita_edit'];
$editTglPesta = $_POST['tanggal_pesta_edit'];
$editAlamatPesta = $_POST['alamat_edit'];
$editBudgetPesta = $_POST['budget_edit'];

try {
    $qEdit = $koneksi->prepare("UPDATE `wedding` SET `nama_pria`=?,`usia_pria`=?,`nama_wanita`=?,`usia_wanita`=?,`tanggal_pesta`=?,`alamat_pesta`=?,`budget`=? WHERE `wedding_id` = ?");
    $qEdit->execute([$editNamaPria, $editUsiaPria, $editNamaWanita, $editUsiaWanita, $editTglPesta, $editAlamatPesta, $editBudgetPesta, $editWeddingId]);
    if ($qEdit->rowCount() > 0) {
        echo "<script>
        alert('Berhasil Edit');
        window.location.replace('../main.php');
        </script>";
    } else {
        echo "<script>
        alert('Gagal Edit');
        window.location.replace('../main.php');
        </script>";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
