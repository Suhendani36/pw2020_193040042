<?php
    $nama = [
        "Cristiano Ronaldo" => "Juve",
        "Lionel Messi" => "Barca",
        "Luca Modric" => "Ipul",
        "Mohammad Salah" => "emyu",
        "Sadio Mane" => "Bayangkara",
        "Neymar Jr" => "Paris Saint Gremain",
        "Zlatan IBrahimovic" => "AC Milan"
    ];
    ksort($nama);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bungkus{
            width: 550px;
            height: 230px;
            border: 1px solid black;
            padding-left:7px;
        }
    </style>

</head>
<body>
    <div class="bungkus">  
    <h2>Daftar Pemain bola Terkenal dan Clubnya</h2>
<table>
<?php foreach ($nama as $name => $club) : ?>
    <tr>
        <td><?php echo "<b>$name</b>"?></td>
        <td><?php echo ":"?></td>
        <td><?php echo "$club"?></td>
    </tr>
<?php endforeach ?>
</table>
</div>



</body>
</html>