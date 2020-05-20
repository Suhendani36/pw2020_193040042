<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login2.php");
  exit;
}

require 'function.php';
$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
              alert('Data gagal diubah!');
              document.location.href = 'admin.php';
             </script>";
  }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- cssme -->
  <link rel="stylesheet" href="../css/newcss.css">
  <title>Hello, world!</title>
</head>

<body>
  <h2>Form Ubah Data Makanan</h2>
  <a href="admin.php"><button type="submit" name="tambah" class="btn btn-warning tombol" style="margin-left: 736px;">Back</button></a>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container" style="text-align: center; margin-top: 20px;">
      <div class="row">
        <div class="col">
          <button type="submit" name="ubah" class="btn btn-info tombol">Ubah Data</button>
        </div>
      </div>
    </div>

    <div class="container">
      <input type="hidden" name="id" value="<?= $mkn['id']; ?>">
      <div class="row add">
        <div class="col-sm coll">
          <input type="hidden" name="gambar_lama" value="<?= $mkn['gambar']; ?>">
          <div class="img">
            <label class="ml-4 mt-2">
              <b>Gambar</b>
              <img src="../assets/img/<?= $mkn['gambar']; ?>" width="120" style="display: block;" class="img-preview">
              <input type="file" name="gambar" class="gambar " onchange="previewImage()">
            </label>

          </div>
        </div>
        <div class="col-lg">
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label "><b>Nama</b></label>
            <div class="col-lg-9">
              <input type="text" name="nama" class="form-control" id="nama" required value="<?= $mkn['nama']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="bahan" class="col-sm-2 col-form-label"><b>Bahan Makanan</b></label>
            <div class="col-sm-9">
              <textarea class="form-control" id="bahan" rows="4" name="bahan"><?= $mkn['bahan']; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="daerah_asal" class="col-sm-2 col-form-label "><b>Daerah Asal</b></label>
            <div class="col-sm-9">
              <input type="text" name="daerah_asal" class="form-control" id="daerah_asal" required value="<?= $mkn['daerah_asal']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="manfaat" class="col-sm-2 col-form-label "><b>Manfaat Makanan</b></label>
            <div class="col-sm-9">
              <textarea class="form-control" id="manfaat" rows="4" name="manfaat"><?= $mkn['manfaat']; ?></textarea>
            </div>
          </div>
        </div>
      </div>
  </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/sript.js"></script>
</body>

</html>