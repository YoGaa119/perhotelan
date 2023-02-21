<?php

include("koneksi.php");
global $koneksi;

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM users WHERE id_user=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus pegawai berhasil!');
            document.location.href = 'pegawai.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus pegawai gagal!');
            document.location.href = 'hapus_pegawai.php?id=$id';
        </script>
    ";
}

?>