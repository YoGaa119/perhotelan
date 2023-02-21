<?php

include("koneksi.php");

global $koneksi;

$nomor = $_POST["nama_kamar"];
$tipe_kamar = $_POST["tipe_kamar"];
$tgl = $_POST["tanggal"];
$status = $_POST["status"];

mysqli_query($koneksi, "INSERT INTO kamar VALUES('','$tipe_kamar', '$nomor', '$tgl',
'$status')");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
			<script>
				alert('Kamar Berhasil Disimpan!');
                document.location.href = 'kamar.php';
			</script>
		";
} else {
    echo "
			<script>
				alert('Kamar Gagal Disimpan!');
                document.location.href = 'tambah_kamar.php';
			</script>
		";
}


?>