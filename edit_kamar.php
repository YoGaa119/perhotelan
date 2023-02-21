<?php

include('koneksi.php');
global $koneksi;

session_start();

if (!$_SESSION['level']) {
    header("location:login.php");
}

$id = $_GET["id"];
// $tgl = mysqli_query($koneksi, "SELECT tanggal FROM kamar WHERE id_kamar=$id");
$kamar = mysqli_query($koneksi, "SELECT * FROM kamar INNER JOIN kategori ON kamar.kategori_id = kategori.id_kategori WHERE id_kamar=$id");
$tipe = mysqli_query($koneksi, "SELECT * FROM kategori");





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
                    <h1>Kamar</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Kamar</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Tambah Kamar</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- form tambah kamar  -->
            <form action="cek_edit_kamar.php" method="POST" class="form" enctype="multipart/form-data">
                <?php foreach($kamar as $key) : ?>
                <input type="hidden" name="id_kamar"value="<?= $id; ?>">
                <input type="hidden" name="tgl" value="<?= $key["tgl_kamar"]; ?>">
                <div class="input-box">
                    <label for="nomor">Nama Kamar</label>
                    <input type="text" placeholder="Nama Kamar" name="nama_kamar" id="nomor" value="<?= $key["nama_kamar"]?>" required />
                </div>

                
                <div class="input-box address">
                    <label for="tipe">Tipe Kamar</label>
                    <div class="select-box">
                        <select name="tipe_kamar" placeholder="Tipe Kamar" id="tipe" required>
                            <option selected><?= $key["tipe_kamar"]; ?></option>
                            <?php foreach($tipe as $tip) : ?>
                                <option value="<?= $tip["id_kategori"]?>"><?= $tip["tipe_kamar"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="input-box address">
                    <label for="status">Status</label>
                    <div class="select-box">
                        <select name="status" placeholder="Tipe Kamar" id="status" required>
                            <?php if($key["status"] === 'isi') : ?>
                            <option value="isi" selected>Isi</option>
                            <option value="tidak-isi">Tidak Isi</option>
                            <?php elseif($key["status"] === 'tidak-isi') : ?>
                            <option value="tidak-isi" selected>Tidak Isi</option>
                            <option value="isi">isi</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <button>Submit</button>
                <?php endforeach; ?>
            </form>
            
        </main>

    </section>
    <script src="dashboard/script.js"></script>
</body>

</html>

