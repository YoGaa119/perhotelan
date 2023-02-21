<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_lengkap = $_POST["nama_lengkap"];

mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$username', '$nama_lengkap', '$email', '$password','tamu')");

if(mysqli_affected_rows($koneksi) == 1) {
    echo "<script>
            alert('registrasi berhasil!');
            document.location.href = 'login.php';
        </script>";
}else {
    echo "<script>
            alert('registrasi gagal!');
            document.location.href = 'register.php';
        </script>";
}

?>