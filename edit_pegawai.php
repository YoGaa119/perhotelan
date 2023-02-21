<?php

include 'koneksi.php';
session_start();

if (!$_SESSION['level']) {
    header("location:login.php");
}

$id = $_GET["id"];
$user = mysqli_query($koneksi,"SELECT * FROM users WHERE id_user=$id");



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
                    <h1>Pegawai</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Pegawai</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Tambah Pegawai</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- disini isi nya -->
            <form action="cek_edit_pegawai.php" method="POST" class="form">
                <?php foreach($user as $key): ?>
                    <input type="hidden" name="id_pegawai"value="<?= $id ?>">
                    <div class="input-box">
                        <label>Username</label>
                        <input type="text" placeholder="Username" name="username" value="<?= $key["username"]; ?>" required />
                    </div>
    
                    <div class="input-box">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Nama lengkap" name="nama_lengkap" value="<?= $key["nama_lengkap"]; ?>" required />
                    </div>
    
                    <div class="input-box">
                        <label>Password</label>
                        <input type="text" placeholder="Password" name="password" value="<?= $key["password"]; ?>" required />
                    </div>
    
                    <div class="input-box">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter email address" name="email_address" value="<?= $key["email"]; ?>" required />
                    </div>
    
                    <div class="input-box address">
                        <label>Level</label>
    
                        <div class="select-box">
                            <select name="level" required>
                                <option hidden disabled>Pilih level</option>
                                <?php if($key["level"] == 'admin'): ?>
                                    <option value="admin" selected>Admin</option>
                                    <option value="resepsionis">Resepsionis</option>
                                <?php else: ?>
                                        <option value="admin">Admin</option>
                                    <option value="resepsionis" selected>Resepsionis</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                <?php endforeach; ?>
                <button>Submit</button>
            </form>
        </main>

        <!-- MAIN -->

    </section>

    <!-- CONTENT -->

    <script src="dashboard/script.js"></script>
</body>

</html>