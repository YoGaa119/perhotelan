<?php 

include("koneksi.php");
global $koneksi;

$id = $_POST["id_fasum"];
$nama = $_POST["nama_fasum"];
$keterangan = $_POST["keterangan"];
$tgl = $_POST["tgl"];
$gambar_lama = $_POST["gambar_lama"];
$gambar = upload('fasum');
if (!$gambar) {
    $gambar = $gambar_lama;
}

mysqli_query($koneksi, "UPDATE fasum SET nama_fasum='$nama', gambar='$gambar', keterangan='$keterangan', tanggal='$tgl' WHERE id_fasum=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('edit fasum berhasil!');
            document.location.href = 'fasilitas_umum.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('edit fasum gagal!');
            document.location.href = 'edit_fasum.php?id=$id';
        </script>
    ";
}



?>