<?php

include 'koneksi.php';

$id_user = $_POST["id_user"];
$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$email_address = $_POST["email_address"];
$level = $_POST["level"];

mysqli_query($koneksi, "UPDATE users SET username='$username', nama_lengkap='$nama_lengkap', email='$email_address', password='$password', level='$level' WHERE id_user=$id_user");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('edit pegawai berhasil!');
            document.location.href = 'pegawai.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('edit pegawai gagal!');
            document.location.href = 'edit_pegawai.php?id=$id_user';
        </script>
    ";
}

?>