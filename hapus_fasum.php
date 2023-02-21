<?php

include("koneksi.php");
global $koneksi;

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM fasum WHERE id_fasum=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus fasum berhasil!');
            document.location.href = 'fasilitas_umum.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus fasum gagal!');
            document.location.href = 'hapus_fasum.php?id=$id';
        </script>
    ";
}

?>