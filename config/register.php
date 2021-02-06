<?php
require_once "koneksi.php";
$nama = $_POST["nama"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$alamat = $_POST["alamat"];
$kotaLahir = $_POST["kota_lahir"];


// echo $nama . '<br>';
// echo $username . '<br>';
// echo $email . '<br>';
// echo $password . '<br>';
// echo $alamat . '<br>';
// echo $kotaLahir . '<br>';
try {
    $qUser = $koneksi->prepare("INSERT INTO `user` (`username`, `email`, `password`) VALUES (?, ?, SHA1(?));
    INSERT INTO `biodata` (`user_id`, `nama`, `alamat`, `kota_lahir`) VALUES (LAST_INSERT_ID(), ?, ?, ?);");
    $qUser->execute([$username, $email, $password, $nama, $alamat, $kotaLahir]);
    echo "<script>
            alert('Sukses Register');
            window.location.replace('../login.php');
            </script>";
} catch (PDOException $err) {
    echo $err->getMessage();
}
