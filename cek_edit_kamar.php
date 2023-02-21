<?php 

include("koneksi.php");

global $koneksi;

$nama_kamar = $_POST["nama_kamar"];
$tipe_kamar = $_POST["tipe_kamar"];
$id_kamar = $_POST["id_kamar"];
$tgl = $_POST["tgl"];
$status = $_POST["status"];


mysqli_query($koneksi, "UPDATE kamar SET nama_kamar='$nama_kamar', kategori_id=$tipe_kamar, tgl_kamar='$tgl', status='$status' WHERE id_kamar=$id_kamar");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('edit kamar berhasil!');
            document.location.href = 'kamar.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('edit kamar gagal!');
            document.location.href = 'edit_kamar.php?id=$id_kamar';
        </script>
    ";
}

?>