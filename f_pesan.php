<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pesan | HOTEL NEVADA</title>
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
            <a class="nav-link text-white" href="kamar.php"><b>Kamar</b></a>
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

    <div class="row">
        <div class="col text-center" style="margin-top: 6rem;">
            <h2>Form Pemesanan <br> Kamar Hotel Nevada</h2>
        </div>
    </div>

    <div class="row">
        <div class="col rounded mx-auto d-block">
            <img src="img/login-2.jpg" alt="" width="500">
        </div>
        <div class="col my-3">

        <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Chek in</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Chek out</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tambah Fasilitas</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
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
