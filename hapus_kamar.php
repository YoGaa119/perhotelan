<?php

include("koneksi.php");
global $koneksi;

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus kamar berhasil!');
            document.location.href = 'kamar.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus kamar gagal!');
            document.location.href = 'hapus_pegawai.php?id=$id';
        </script>
    ";
}

?>