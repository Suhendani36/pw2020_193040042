<?php

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login2.php");
  exit;
}

require 'function.php';

$makanan = query("SELECT * FROM makanan");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- css me -->
  <link rel="stylesheet" href="../css/newcss.css">
  <title>Account</title>
</head>

<body id="body">
  <!-- Navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="#body">HiddenFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="../index.php">Home Page<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="isi.php">Back</a>
          <a class="nav-item  btn btn-success tombol mr-2" href="tambah2.php">Tambah Data</a>
          <a class="nav-item  btn btn-danger tombol" href="logout.php">Sign Out</a>
        </div>
      </div>
  </nav>
  <!-- Akhir Navbar -->
  <table class="table table-responsive-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Bahan</th>
        <th scope="col">Daerah Asal</th>
        <th scope="col">Manfaa</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $no = 1 ?>
        <?php foreach ($makanan as $mkn) : ?>
          <tr>
            <td><?= $no ?></td>
            <td><img src="../assets/img/<?= $mkn['gambar'] ?>" width="160"></td>
            <td><?= $mkn['nama'] ?></td>
            <td><?= $mkn['bahan'] ?></td>
            <td><?= $mkn['daerah_asal'] ?></td>
            <td><?= $mkn['manfaat'] ?></td>
            <td>
              <a href="ubah.php?id=<?= $mkn['id']; ?>"><button class="btn btn-warning tombol">Ubah</button></a><br><br>
              <a href="hapus.php?id=<?= $mkn['id']; ?>" onclick="return confirm('Yakin Akan Menghapus Data')"><button class="btn btn-danger tombol">Hapus</button></a>
            </td>
          </tr>
          <?php
          $no++;
          ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>

  <!-- footer -->

  <div class="card text-center mt-4" style="background-color: rgb(223, 218, 205)">
    <div class="card-footer text-muted " style="background-color: rgb(223, 218, 205)">
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