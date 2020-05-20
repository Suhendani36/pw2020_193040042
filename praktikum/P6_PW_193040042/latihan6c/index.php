<?php
require 'php/function.php';

$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin-top: 40px;
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
        <h5 class="list-group-item active">
            List Makanan
        </h5>
        <?php foreach ($makanan as $mkn) : ?>
            <div class="list-group">

                <a href="php/detail.php?id=<?= $mkn['id'] ?>" class="list-group-item list-group-item-action">
                    <?= $mkn["nama"] ?>
                </a>

            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>