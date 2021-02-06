<?php
require_once 'koneksi.php';
$editWeddingId = $_POST['edit_wedding_id'];
try {
    $qHapus = $koneksi->prepare("DELETE FROM `wedding` WHERE `wedding`.`wedding_id` = ?;");
    $qHapus->execute([$editWeddingId]);
    if ($qHapus->rowCount() > 0) {
        echo "<script>
        alert('Berhasil Hapus');
        window.location.replace('../main.php');
        </script>";
    } else {
        echo "<script>
        alert('Gagal Hapus');
        window.location.replace('../main.php');
        </script>";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
