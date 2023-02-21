<?php

include 'koneksi.php';
global $koneksi;
session_start();

$fasum = mysqli_query($koneksi, "SELECT * FROM fasum");

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
                    <h1>Fasilitas Umum</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Fasum</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Daftar Fasum</a>
                        </li>
                    </ul>
                </div>
                <a href="tambah_fasum.php" class="btn-download">
                    <i class='bx bxs-plus-circle bx-rotate-90'></i>
                    <span class="text">tambah Fasum</span>
                </a>
            </div>
            <div class="data-pengajuan">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>tanggal</th>
                        <th style="width: 50px;">Aksi</th>
                    </tr>
                    <?php foreach($fasum as $key) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $key["nama_fasum"];?></td>
                        <td><img src="dashboard/img/fasum/<?= $key["gambar"]; ?>" width="250" alt="" srcset=""></td>
                        <td><?= $key["keterangan"]; ?></td>
                        <td><?= $key["tanggal"]; ?></td>
                        <td >
                            <a href="edit_fasum.php?id=<?= $key["id_fasum"]; ?>" id="edit">Edit</a>
                            <a href="hapus_fasum.php?id=<?= $key["id_fasum"]; ?>" id="hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            </div>
            
        </main>
    </section>
    <!-- CONTENT -->

    <script src="dashboard/script.js"></script>
</body>

</html>