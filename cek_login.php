<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include ("koneksi.php");
global $koneksi;

 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' and password='$password'");
$id = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT id_user FROM users WHERE username='$username' and password='$password'"))["id_user"];

// $id = $login["id_user"];
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){

    $data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['id_user'] = $id;
		// alihkan ke halaman dashboard admin
		header("location:dashboard_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="resepsionis"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "resepsionis";
		$_SESSION['id_user'] = $id;
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard_resepsionis.php");
        
        // cek jika user login sebagai pengurus
	}else if($data['level']=="tamu"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tamu";
		$_SESSION['id_user'] = $id;
		// alihkan ke halaman dashboard pengurus
		header("location:index.php");
 
	}
}else{
	echo "
		<script>
			alert('login gagal!');
			document.location.href = 'login.php';
		</script>
	";
}
 
?>