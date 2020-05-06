<?php

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
              alert('Data gagal ditambahkan!');
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
  <h2>Form Tambah Data Makanan</h2>
  <form action="" method="POST">
    <table>
      <tr>
        <td>
          <label for="gambar">Gambar</label>
        </td>
        <td>
          <input type="text" name="gambar" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama">Nama</label>
        </td>
        <td>
          <input type="text" name="nama" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="bahan">Bahan</label>
        </td>
        <td>
          <input id="bahan" rows="4" cols="50" name="bahan" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="daerah_asal">Daerah Asal</label>
        </td>
        <td>
          <input type="text" name="daerah_asal" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="manfaat">Manfaat</label>
        </td>
        <td>
          <input id="manfaat" rows="4" cols="50" name="manfaat" required>
        </td>
      </tr>
    </table>
    <button type="submit" name="tambah">Tambah Data</button>
  </form>
</body>

</html>