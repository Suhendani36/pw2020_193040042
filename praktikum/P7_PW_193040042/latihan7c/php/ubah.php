<?php

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Form Ubah Data Makanan</h2>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mkn['id']; ?>">
    <table>
      <tr>
        <td>
          <label for="gambar">Gambar</label>
        </td>
        <td>
          <input type="text" name="gambar" required value="<?= $mkn['gambar']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama">Nama</label>
        </td>
        <td>
          <input type="text" name="nama" required value="<?= $mkn['nama']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="bahan">Bahan</label>
        </td>
        <td>
          <input id="id" rows="4" cols="50" name="bahan" required value="<?= $mkn['bahan']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="daerah_asal">Daerah Asal</label>
        </td>
        <td>
          <input type="text" name="daerah_asal" required value="<?= $mkn['daerah_asal']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="manfaat">Manfaat</label>
        </td>
        <td>
          <input id="id" rows="4" cols="50" name="manfaat" required value="<?= $mkn['manfaat']; ?> ">
        </td>
      </tr>
    </table>
    <button type="submit" name="ubah">Ubah Data</button>
  </form>
</body>

</html>