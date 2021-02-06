<?php
require_once 'koneksi.php';
$id = $_SESSION['id'];
try {

    $queryGetUser = $koneksi->prepare("SELECT * FROM `user` WHERE `user_id` = ?");
    $queryGetUser->execute([$id]);
    foreach ($queryGetUser as $u) {
        $userID = $u['user_id'];
        $username = $u['username'];
        $email = $u['email'];
        $currentPassword = $u['password'];
    }
    $queryGetBiodata = $koneksi->prepare("SELECT * FROM `biodata` WHERE `user_id` = ?");
    $queryGetBiodata->execute([$id]);
    foreach ($queryGetBiodata as $u) {
        $userID = $u['user_id'];
        $nama = $u['nama'];
        $alamat = $u['alamat'];
        $kotaLahir = $u['kota_lahir'];
        $foto = $u['foto'];
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
