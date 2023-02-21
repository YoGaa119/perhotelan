<?php 
$koneksi = mysqli_connect("localhost","root","","hotel");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function upload($gambar) {
	$namaFile = $_FILES["gambar"]['name'];
	$ukuranFile = $_FILES["gambar"]['size'];
	$tmpName = $_FILES["gambar"]['tmp_name'];
	$error = $_FILES["gambar"]['error'];

	if ($error == 4 || $tmpName == null ) {
		return 0;
		die;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'webp', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
			<script>
				alert('yang anda upload bukan gambar!');
			</script>
		";
		return false;
	}

	if ($ukuranFile > 10000000) {
		echo "
			<script>
				alert('ukuran gambar terlalu besar!');
			</script>
		";
		return false;
	}

	if ($gambar == 'kamar') {
		move_uploaded_file($tmpName, 'dashboard/img/kamar/' . $namaFile);
	}elseif ($gambar == 'fasum') {
		move_uploaded_file($tmpName, 'dashboard/img/fasum/' . $namaFile);
	}

	return $namaFile;

}
 
?>