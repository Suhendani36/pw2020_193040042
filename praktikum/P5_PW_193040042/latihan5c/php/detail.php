<?php

if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'function.php';

$id = $_GET['id'];
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .container{
        width:20rem;
        height:42rem;
        padding-top:15px;
        border:7px dashed gray;
        margin-top:20px;
    }
    .card{
       margin:auto;

    }
    </style>
</head>
<body>

    <div class="container">
    <div class="card" style="width: 16rem;">
  <img class="card-img-top" src="../assets/img/<?= $makanan["gambar"];?> " alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title"><?= $makanan['nama'];?></h3>
    <h5>Bahan:</h5>
    <p class="card-text"><?= $makanan['bahan'];?></p>
    <h5>Daerah:</h5>
    <p class="card-text"><?= $makanan['daerah_asal'];?></p>
    <h5>Manfaat:</h5>
    <p class="card-text"><?= $makanan['manfaat'];?></p>
    <a href="../index.php" class="btn btn-primary" class="tombol-back">Go Back</a>
  </div>
</div>

</body>
</html>



