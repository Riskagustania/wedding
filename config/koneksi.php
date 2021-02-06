<?php
$database_hostname = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name     = 'wedding';

try {
    $koneksi = new PDO(
        "mysql:host=$database_hostname;dbname=$database_name",
        $database_username,
        $database_password
    );
} catch (PDOException $err) {
    die($err->getMessage());
}
