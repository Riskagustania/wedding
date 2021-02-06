<?php
session_start();
require_once 'koneksi.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  try {
    $qGetUser = "SELECT `user_id` FROM `user` WHERE `email` = ? AND `password` = SHA1(?)";
    $q = $koneksi->prepare($qGetUser);
    $q->execute([$email, $password]);
    foreach ($q as $data) {
      $id = $data['user_id'];
    }
    if ($q->rowCount() == 1) {
      $_SESSION['id'] = $id;
      echo "<script>
      alert('Berhasil Login');
      window.location.replace('../main.php');
      </script>";
      return;
    } else {
      echo "<script>
      alert('Email atau password salah');
      window.location.replace('../login.php');
      </script>";
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
}
