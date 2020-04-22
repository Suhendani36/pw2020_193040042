<?php
require 'function.php';

$makanan = query("SELECT * FROM makanan");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    table {
      width: 700px;
      margin: auto;
      background-color: #ffffe0;
      color: black;
      text-align: center;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">

    <tr>
      <th>NO.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Bahan</th>
      <th>Daerah Asal</th>
      <th>Manfaat</th>
      <th>Opsi</th>
    </tr>
    <?php $no = 1 ?>
    <?php foreach ($makanan as $mkn) : ?>
      <tr>
        <td><?= $no ?></td>
        <td><img src="../assets/img/<?= $mkn['gambar'] ?>"></td>
        <td><?= $mkn['nama'] ?></td>
        <td><?= $mkn['bahan'] ?></td>
        <td><?= $mkn['daerah_asal'] ?></td>
        <td><?= $mkn['manfaat'] ?></td>
        <td>
          <a href=""><button style="background-color: limegreen;">Ubah</button></a>
          <a href=""><button style="background-color: orangered;">Hapus</button></a>
        </td>
      </tr>
      <?php
      $no++;
      ?>
    <?php endforeach; ?>
  </table>
</body>

</html>