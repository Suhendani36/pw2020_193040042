<?php
session_start();
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}
require 'function.php';

$id = $_GET['id'];
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- cssme -->
  <link rel="stylesheet" href="../css/newcss.css">
  <style>
    .container {
      width: 20rem;
      height: 42rem;
      padding-top: 15px;
      border: 7px dashed gray;
      margin-top: 20px;
    }

    .card {
      margin: auto;

    }
  </style>

  <title>HiddenFood</title>
</head>

<body>
  <div class="container">
    <div class="card" style="width: 16rem;">
      <img class="card-img-top" src="../assets/img/<?= $makanan['gambar']; ?> " alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title"><?= $makanan['nama']; ?></h3>
        <h5>Bahan:</h5>
        <p class="card-text"><?= $makanan['bahan']; ?></p>
        <h5>Daerah:</h5>
        <p class="card-text"><?= $makanan['daerah_asal']; ?></p>
        <h5>Manfaat:</h5>
        <p class="card-text"><?= $makanan['manfaat']; ?></p>
        <a href="isi.php" class="btn btn-primary" class="tombol-back">Go Back</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>