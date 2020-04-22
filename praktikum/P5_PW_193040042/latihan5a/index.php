<?php
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

mysqli_select_db($conn, "tubes_193040042") or die("Database Salah");

$result = mysqli_query($conn, "SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 550px;
            margin: auto;
            background-color: #ffffe0;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="7" cellspacing="0">

        <tr>
            <th>NO.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Bahan</th>
            <th>Daerah Asal</th>
            <th>Manfaat</th>
        </tr>
        <?php $no = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><img src="assets/img/<?= $row['gambar'] ?>"></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['bahan'] ?></td>
                <td><?= $row['daerah_asal'] ?></td>
                <td><?= $row['manfaat'] ?></td>
            </tr>
            <?php
            $no++;
            ?>
        <?php endwhile; ?>
    </table>
</body>

</html>