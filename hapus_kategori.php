<?php

include("koneksi.php");
global $koneksi;

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus kategori berhasil!');
            document.location.href = 'kategori.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus kategori gagal!');
            document.location.href = 'hapus_kategori.php?id=$id';
        </script>
    ";
}

?>