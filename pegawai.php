<?php
include 'koneksi.php';
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!$_SESSION['level']) {
    header("location:login.php");
}

$pegawai = mysqli_query($koneksi, "SELECT * FROM users WHERE level = 'admin' OR 'resepsionis' ORDER BY id_user DESC");
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

    <!-- SIDEBAR -->

    <?php include "sidebar.php" ?> 

    <!-- SIDEBAR -->



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
                    <h1>Pegawai</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Pegawai</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Daftar Pegawai</a>
                        </li>
                    </ul>
                </div>
                <a href="tambah_pegawai.php" class="btn-download">
                    <i class='bx bxs-plus-circle bx-rotate-90' ></i>
                    <span class="text">tambah pegawai</span>
                </a>
            </div>
            <div class="data-pengajuan">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th style="width: 50px;">Aksi</th>
                    </tr>
                    <?php foreach($pegawai as $key): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key["username"] ?></td>
                        <td><?= $key["nama_lengkap"] ?></td>
                        <td><?= $key["email"] ?></td>
                        <td><?= $key["level"] ?></td>
                        <td >
                            <a href="edit_pegawai.php?id=<?= $key["id_user"] ?>" id="edit">Edit</a>
                            <a href="hapus_pegawai.php?id=<?= $key["id_user"] ?>" onclick="rerturn confirm('anda yakin?')" id="hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="dashboard/script.js"></script>
</body>

</html>