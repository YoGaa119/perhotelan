<?php

include('koneksi.php');
global $koneksi;

session_start();

if (!$_SESSION['level']) {
    header("location:login.php");
}

$id = $_GET["id"];
// $tgl = mysqli_query($koneksi, "SELECT tanggal FROM kamar WHERE id_kamar=$id");
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$id");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="componen/css/style.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard/style.css">

    <title>ADMIN | HOTEL NEVADA</title>
</head>

<body>

    <?php include "sidebar.php" ?>

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="dashboard/img/people.png">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Kategori</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Kategori</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Edit Kategori</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- form tambah kamar  -->
            <form action="cek_edit_kategori.php" method="POST" class="form" enctype="multipart/form-data">
                <?php foreach($kategori as $key) : ?>
                <input type="hidden" name="id_kategori" value="<?= $id; ?>">
                <input type="hidden" name="tgl" value="<?= $key["tanggal"]; ?>">
                <div class="input-box">
                    <label for="nomor">Tipe Kamar</label>
                    <input type="text" placeholder="Tipe Kamar" name="tipe_kamar" id="nomor" value="<?= $key["tipe_kamar"]?>" required />
                </div>
                <div class="input-group">
                    <span class="input-group-text">Keterangan</span>
                    <textarea class="form-control" aria-label="With textarea" name="fasilitas"><?= $key["fasilitas"]?></textarea>
                </div>
                <div class="input-box">
                    <label for="nomor">Harga</label>
                    <input type="text" placeholder="Nama Kamar" name="harga" id="nomor" value="<?= $key["harga"]?>" required />
                </div>
                <div class="input-box">
                    <label for="gambar">Foto Kamar</label>
                    <input type="hidden" name="gambar_lama" value="<?= $key["gambar"]; ?>">>
                    <input type="file" name="gambar" id="gambar"/>
                </div>

                <button>Submit</button>
                <?php endforeach; ?>
            </form>
            
        </main>

    </section>
    <script src="dashboard/script.js"></script>
</body>

</html>

