<!DOCTYPE html>
<html lang="en">
<head>
    
<script src="../assets/js/color-modes.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

        

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!-- css -->
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
</head>
<body>
    <header data-bs-theme="light">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
        <img src="../image/logo smkn.png" alt="" width="40px">
      <a class="navbar-brand" href="#">SMKN 1 PROBOLINGGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data.php">Data</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

    <div class="container"><br><br><br><br><br>

    <form action="" method="post">
    <div class="form">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Maulana" name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama@gmail.com" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Umur</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="17" name="umur">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bisnis Digital" name="jurusan">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Sosial media instagram</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="@maulanaazkapratama" name="sosmed">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Alamat tinggal</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="jl Serayu Perum Griya Serayu Asri" name="alamat"></textarea>
    </div>
    <button href="data.php" name="submit" class="btn btn-primary">Tambah</button>
    </div>

    </form>
    
    </div>






<?php

include ('../config/config.php');

if (isset($_POST['submit'])) {
    // Mengambil data file
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];
    $jurusan = $_POST['jurusan'];
    $sosmed = $_POST['sosmed'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbsiswa (nama,email,umur,jurusan,sosmed,alamat) VALUES ('$nama','$email','$umur','$jurusan','$sosmed','$alamat')";
    $query = mysqli_query($conn,$sql);

    
}
?>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
