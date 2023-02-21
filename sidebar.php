<!-- SIDEBAR -->
<?php

$level = $_SESSION["level"];

$arr = explode('/',$_SERVER["REQUEST_URI"]);
$page = explode('.',end($arr))[0];

?>
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">HOTEL NEVADA</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="dashboard_admin.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Beranda</span>
            </a>
        </li>
        <?php if ($level == 'admin') : ?>
            <?php if($page == 'kamar' || $page == 'tambah_kamar') : ?>
                <li class="active">
                    <a href="kamar.php">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Kamar</span>
                    </a>
                </li>
            <?php else : ?>
                <li>
                    <a href="kamar.php">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Kamar</span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                    <a href="kategori.php">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Kategori</span>
                    </a>
                </li>
            <li>
                <a href="fasilitas_umum.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Fasilitas Umum</span>
                </a>
            </li>
            <?php if($page == 'tambah_pegawai' || $page == 'pegawai') : ?>
            <li class='active'>
                <a href="pegawai.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Pegawai</span>
                </a>
            </li>
            <?php else : ?>
                <li>
                    <a href="pegawai.php">
                        <i class='bx bxs-group'></i>
                        <span class="text">Pegawai</span>
                    </a>
                </li>
            <?php endif; ?>
        <?php elseif ($level == 'resepsionis') : ?>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
        <?php else : ?>
        <?php endif; ?>
    </ul>
    <ul class="side-menu">
        <!-- <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li> -->
        <li>
            <a href="logout.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->