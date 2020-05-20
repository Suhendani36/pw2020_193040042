<?php
require 'php/function.php';
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin-top: 30px;
            border: 1px solid gray;
            padding: 20px 20px 20px 20px;
        }

        h5 {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">List Makanan</a>
            <form class="form-inline" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Search</button>
            </form>
        </nav>
        <?php foreach ($makanan as $mkn) : ?>
            <div class="list-group">

                <a href="php/detail.php?id=<?= $mkn['id'] ?>" class="list-group-item list-group-item-action">
                    <?= $mkn["nama"] ?>
                </a>

            </div>
        <?php endforeach; ?>
        <br>
        <a href="php/admin.php">
            <button type="button" class="btn btn-primary btn-sm">Page Admin</button>
        </a>
    </div>

</body>

</html>