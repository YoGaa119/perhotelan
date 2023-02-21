<?php

include('koneksi.php');
global $koneksi;

session_start();

if (!$_SESSION['level']) {
    header("location:login.php");
}

$kamar = mysqli_query($koneksi, "SELECT * FROM kamar INNER JOIN kategori ON kamar.kategori_id = kategori.id_kategori");

$no = 1;  

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
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Kamar</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Kamar</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Daftar Kamar</a>
                        </li>
                    </ul>
                </div>
                <a href="tambah_kamar.php" class="btn-download">
                    <i class='bx bxs-plus-circle bx-rotate-90'></i>
                    <span class="text">tambah Kamar</span>
                </a>
            </div>
            <div class="data-pengajuan">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Fasilitas Kamar</th>
                        <th>Gambar</th>
                        <th>Tgl Dibuat</th>
                        <th>Status</th>
                        <th style="width: 50px;">Aksi</th>
                    </tr>
                    <?php foreach ($kamar as $key) : ?>
                    <tr>
                          
                        <td><?= $no++ ?></td>
                        <td><?= $key["nama_kamar"]; ?></td>
                        <td><?= $key["tipe_kamar"]; ?></td>
                        <td><?= $key["fasilitas"]; ?></td>
                        <td><img src="dashboard/img/kamar/<?= $key["gambar"]; ?>" width="250" alt="" srcset=""></td>
                        <td><?= $key["tgl_kamar"]; ?></td>
                        <td><?= $key["status"]; ?></td>
                        <td >
                            <a href="edit_kamar.php?id=<?= $key["id_kamar"]; ?>" id="edit">Edit</a>
                            <a href="hapus_kamar.php?id=<?= $key["id_kamar"]; ?>" id="hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
    </section>
    <!-- CONTENT -->

    <script src="dashboard/script.js"></script>
</body>

</html>