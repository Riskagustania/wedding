<?php
require_once 'koneksi.php';

$_id = $_POST['_id'];
$_nama_user = $_POST['nama_user'];
$_username_user = $_POST['username_user'];
$_email_user = $_POST['email_user'];
$_alamat_user = $_POST['alamat_user'];
$_kota_lahir_user = $_POST['kota_lahir_user'];
$_password = $_POST['password'];
$_password1 = $_POST['password1'];
$_password2 = $_POST['password2'];
$_file_name = $_FILES['gambar_user']['name'];
$_tmp_name = $_FILES['gambar_user']['tmp_name'];

try {
    if ($_file_name != '') {
        $foto = $koneksi->prepare("SELECT `foto` FROM `biodata` WHERE `user_id` = ?");
        $foto->execute([$_id]);

        foreach ($foto as $i) {
            $gambar = $i['foto'];
        }
        if ($gambar != '' || $gambar != null) {
            unlink('../' . $gambar);
        }
        if (isset($_POST['password2']) && isset($_POST['password1'])) {
            if ($_password2 != '' || $_password2 != null) {
                if (sha1($_password1) == $_password) {
                    $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=?,`password`=SHA1(?) WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=?,`foto`=? WHERE `user_id` = ?");
                    $qBiodata->execute([$_username_user, $_email_user, $_password2, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, 'images/' . $_id . '-' . $_file_name, $_id]);
                    move_uploaded_file($_tmp_name, '../images/' . $_id . '-' . $_file_name);
                    echo "<script>
                    alert('Sukses Edit');
                    window.location.replace('../main.php');
                    </script>";
                } else {
                    echo "<script>
                  alert('Gagal, password salah');
                  window.location.replace('../biodata.php');
                  </script>";
                }
            } else {
                $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=? WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=?,`foto`=? WHERE `user_id` = ?");
                $qBiodata->execute([$_username_user, $_email_user, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, 'images/' . $_id . '-' . $_file_name, $_id]);
                move_uploaded_file($_tmp_name, '../images/' . $_id . '-' . $_file_name);
                echo "<script>
                alert('Sukses Edit');
                window.location.replace('../main.php');
                </script>";
            }
        } else {
            $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=? WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=?,`foto`=? WHERE `user_id` = ?");
            $qBiodata->execute([$_username_user, $_email_user, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, 'images/' . $_id . '-' . $_file_name, $_id]);
            move_uploaded_file($_tmp_name, '../images/' . $_id . '-' . $_file_name);
            echo "<script>
            alert('Sukses Edit');
            window.location.replace('../main.php');
            </script>";
        }
    } else {
        if (isset($_POST['password2']) && isset($_POST['password1'])) {
            if ($_password2 != '' || $_password2 != null) {
                if (sha1($_password1) == $_password) {
                    $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=?,`password`=SHA1(?) WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=? WHERE `user_id` = ?");
                    $qBiodata->execute([$_username_user, $_email_user, $_password2, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, $_id]);
                    echo "<script>
                    alert('Sukses Edit');
                    window.location.replace('../main.php');
                    </script>";
                } else {
                    echo "<script>
                  alert('Gagal, password salah');
                  window.location.replace('../biodata.php');
                  </script>";
                }
            } else {
                $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=? WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=? WHERE `user_id` = ?");
                $qBiodata->execute([$_username_user, $_email_user, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, $_id]);
                echo "<script>
                alert('Sukses Edit');
                window.location.replace('../main.php');
                </script>";
            }
        } else {
            $qBiodata = $koneksi->prepare("UPDATE `user` SET `username`=?,`email`=? WHERE `user_id` = ?;UPDATE `biodata` SET `nama`=?,`alamat`=?,`kota_lahir`=? WHERE `user_id` = ?");
            $qBiodata->execute([$_username_user, $_email_user, $_id, $_nama_user, $_alamat_user, $_kota_lahir_user, $_id]);
            echo "<script>
            alert('Sukses Edit');
            window.location.replace('../main.php');
            </script>";
        }
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
