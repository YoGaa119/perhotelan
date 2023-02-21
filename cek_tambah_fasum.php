<?php 

include("koneksi.php");

global $koneksi;

$nama = $_POST["nama_fasum"];
$keterangan = $_POST["keterangan"];
$tgl = $_POST["tanggal"];
$gambar = upload('fasum');
if (!$gambar) {
    return false;
}

mysqli_query($koneksi, "INSERT INTO fasum VALUES('', '$nama', '$gambar', '$keterangan', '$tgl')");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
			<script>
				alert('Fasum Berhasil Disimpan!');
                document.location.href = 'fasilitas_umum.php';
			</script>
		";
} else {
    echo "
			<script>
				alert('Fasum Gagal Disimpan!');
                document.location.href = 'tambah_fasum.php';
			</script>
		";
}


?>