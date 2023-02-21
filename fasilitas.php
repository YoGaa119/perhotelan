<?php 

include("koneksi.php");
global $koneksi; 


$result = mysqli_query($koneksi, "SELECT gambar FROM fasum");


?>



<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fasilitas | HOTEL NEVADA</title>
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
            <a class="nav-link text-white" href="login.php"><b>Log-in</b></a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Navbar tutup -->

    <!-- content buka -->

    <div class="container">

        <div class="row" style="margin-top: 5rem;">
            <div class="col text-center">
                <h2><b>KAMI MENYEDIAKAN FASILITAS HOTEL <br>SEPERTI YANG ADA DI BAWAH</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mt-3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt voluptates, quis atque dolores ipsum ad amet dolore sed quae eos aliquam earum itaque cum laborum iure voluptatem nemo impedit ex?</p>
            </div>
        </div>

        <div class="row">
            <?php foreach($result as $key) : ?>
            <div class="col my-3">
                <img src="dashboard/img/fasum/<?= $key["gambar"]; ?>" class="rounded float-start" alt="..." weight="500" width="500">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

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

    <script src="componen/js/bootstrap.bundle.min.js"></script>
  </body>
</html>





    

