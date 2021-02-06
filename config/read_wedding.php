<?php
require_once 'koneksi.php';
$id = $_SESSION['id'];
try {

    $queryGetAllData = $koneksi->prepare("SELECT * FROM `wedding` WHERE `user_id` = ?");
    $queryGetAllData->execute([$id]);
} catch (PDOException $e) {
    echo $e->getMessage();
}
