<?php 

include("koneksi.php");
global $koneksi;

session_start();

if(isset($_SESSION["id_user"])){
    $id = $_SESSION["id_user"];
    $user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT username FROM users WHERE id_user=$id"));
}


$kamar = mysqli_query($koneksi, "SELECT * FROM kategori");

?>


<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTEL NEVADA</title>
    <link rel="stylesheet" type="text/css" href="componen/css/bootstrap.min.css">
  </head>
  <body>
    
    <!-- Navbar buka -->

    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #b82ebb;">
    <div class="container">
        <a class="navbar-brand text-white" href="#"><b>HOTEL NEVADA</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="index.php"><b>Home</b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="list-kamar.php"><b>Kamar</b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="fasilitas.php"><b>Fasilitas</b></a>
            </li>
            <li class="nav-item">
            <?php if (!isset($id)) : ?>
                <a class="nav-link text-white" href="login.php"><b>Log-in</b></a>
            <?php else : ?>
                <p class="nav-link text-white fw-bold"><?= $user["username"]; ?></p>
            <?php endif; ?>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Navbar tutup -->

    <!-- content buka -->

    <img src="img/hotel.jpg" class="img-fluid" alt="...">
    <div class="container my-4">

        <div class="row">
            <div class="col my-s text-center" style="font-family: inter;">
                <h2>WELCOME TO NEVADA HOTEL CENTER</h2>
                <p class="mt-2">
                    Lorem ipsum, dolor sit amet  adipisicing elit. Ut voluptatibus, molestias suscipit assumenda
                    commodi ex nam odio qui illum similconsecteturique voluptates ipsa nostrum omnis, magnam dolores, amet saepe maxime vel.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptatibus, molestias suscipit assumenda
                    commodi ex nam odio qui illum similique voluptates ipsa nostrum omnis, magnam dolores, amet saepe maxime vel.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col mb-s text-center" style="font-family: inter;">
                <h2>KAMI BERADA DI</h2>
                <p class="mt-2">
                    Ut voluptatibus, molestias suscipit assumenda commodi ex nam odio qui illum similique voluptates ipsa nostrum omnis.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col mb-5 text-center" style="font-family: inter;">
                <h2>GALERI HOTEL</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach($kamar as $key) : ?>
            <div class="col">
                <div class="card mx-auto" style="width: 18rem;">
                <img src="dashboard/img/kamar/<?= $key["gambar"]; ?>" class="card-img-top" alt="..."> 
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </div>
    <script src="componen/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!-- content tutup -->

<!-- footer buka -->

    <footer class="" style="background-color: #b82ebb;">
        <div class="row">
            <div class="col text-center text-white my-3">
                <h5>
                    create akun the hotel nevada center
                </h5>
            </div>
        </div>
    </footer>

<!-- footer tutup -->