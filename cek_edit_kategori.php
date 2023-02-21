<?php 

include("koneksi.php");
global $koneksi;

$tipe = $_POST["tipe_kamar"];
$fasilitas = $_POST["fasilitas"];
$harga = $_POST["harga"];
$tgl = $_POST["tgl"];
$id = $_POST["id_kategori"];
$gambar_lama = $_POST["gambar_lama"];
$gambar = upload('kamar');
if (!$gambar) {
    $gambar = $gambar_lama;
}

mysqli_query($koneksi, "UPDATE kategori SET tipe_kamar='$tipe', fasilitas='$fasilitas', gambar='$gambar', tanggal='$tgl',
harga='$harga' WHERE id_kategori=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('edit Kategori berhasil!');
            document.location.href = 'kategori.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('edit Kategori gagal!');
            document.location.href = 'edit_kategori.php?id=$id';
        </script>
    ";
}

?>