<?php

include('koneksi.php');

session_start();

if (!$_SESSION['level']) {
    header("location:login.php");
}

$tgl = date('Y-m-d');

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
                            <a class="active" href="#">Tambah Kategori</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- form tambah kamar  -->
            <form action="cek_tambah_kategori.php" method="POST" class="form" enctype="multipart/form-data">                
                <div class="input-box address">
                    <input type="hidden" name="tanggal" value="<?= $tgl; ?>">                  
                    <div class="input-box">
                        <label for="harga">Tipe Kamar</label>
                        <input type="text" placeholder="Tipe Kamar" name="tipe_kamar" id="harga" required />
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Fasilitas</span>
                    <textarea class="form-control" aria-label="With textarea" name="fasilitas"></textarea>
                </div>

                <div class="input-box">
                    <label for="harga">Harga</label>
                    <input type="number" placeholder="Harga" name="harga" id="harga" required />
                </div>
                <div class="input-box">
                    <label for="gambar">Foto Kamar</label>
                    <input type="file" name="gambar" igambard="gambar" required />
                </div>

                <button>Submit</button>
            </form>
            
        </main>

    </section>
    <script src="dashboard/script.js"></script>
</body>

</html>

