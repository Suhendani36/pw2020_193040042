<?php
session_start();
require 'function.php';



if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE
               gambar LIKE '%$keyword%' OR 
               nama LIKE '%$keyword%' OR 
               bahan LIKE '%$keyword%' OR 
               daerah_asal LIKE '%$keyword%' OR 
               manfaat LIKE '%$keyword%' ");
} else {
  $makanan = query("SELECT * FROM makanan");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/newcss.css">
  <title>HiddenFood</title>
</head>

<body id="body">
  <!-- Navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="#body">HiddenFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="../index.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="admin.php">Add Food</a>
        </div>

        <form class="form-inline" action="" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
          <button class="btn btn-primary my-2 my-sm-0 mr-2 tombol" type="submit" name="cari">Search</button>
          <a class="nav-item  btn btn-primary tombol" href="logout.php">Sign Out</a>
        </form>
      </div>

    </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container">
    <div class="row pt-5">
      <?php foreach ($makanan as $mkn) : ?>
        <div class="col-sm-3 mb-3">
          <div class="card mt-3">
            <img src="../assets/img/<?= $mkn['gambar']; ?> " class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $mkn['nama']; ?></h5>
              <a href="detail2.php?id=<?= $mkn['id']; ?>" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php if (empty($makanan)) : ?>
    <h1>Makanan Tidak Tersedia</h1>
  <?php endif; ?>
  <!-- akhir card -->

  <!-- footer -->

  <div class="card text-center mt-4" style="background-color: rgb(223, 218, 205)">
    <div class="card-header" style="background-color: rgb(223, 218, 205)">
      HiddenFood
    </div>

    <div class="card-footer text-muted" style="background-color: rgb(223, 218, 205)">
      © 2020
    </div>
  </div>

  <!-- akhir footer -->









  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>