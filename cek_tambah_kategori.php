<?php

include("koneksi.php");

global $koneksi;

$tipe_kamar = $_POST["tipe_kamar"];
$fasilitas = $_POST["fasilitas"];
$harga = $_POST["harga"];
$tgl = $_POST["tanggal"];
$gambar = upload('kamar');
if (!$gambar) {
    return false;
}

mysqli_query($koneksi, "INSERT INTO kategori VALUES('', '$tipe_kamar', '$fasilitas', '$gambar', '$tgl', '$harga')");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
			<script>
				alert('Kategori Berhasil Disimpan!');
                document.location.href = 'kategori.php';
			</script>
		";
} else {
    echo "
			<script>
				alert('Kategori Gagal Disimpan!');
                document.location.href = 'tambah_kategori.php';
			</script>
		";
}


?>