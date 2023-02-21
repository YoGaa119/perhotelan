<?php

include 'koneksi.php';

$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$email_address = $_POST["email_address"];
$level = $_POST["level"];

$cek_username = mysqli_num_rows(mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'"));


if ($cek_username >= 1) {
    echo "
        <script>
            alert('username sudah digunakan');
            document.location.href = 'tambah_pegawai.php';
        </script>
    ";
    return false;
} else {
    mysqli_query($koneksi, "INSERT INTO users VALUES('','$username','$nama_lengkap','$email_address','$password','$level')");
    if (mysqli_affected_rows($koneksi) >= 1) {
        echo "
        <script>
            alert('tambah pegawai berhasil!');
            document.location.href = 'pegawai.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('tambah pegawai gagal!');
            document.location.href = 'tambah_pegawai.php';
        </script>
    ";
    }
}
