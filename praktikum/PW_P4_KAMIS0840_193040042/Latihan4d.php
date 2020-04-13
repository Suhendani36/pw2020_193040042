<?php

$players = [

    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" =>"30"

    ],

    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" =>"12"
    ],

    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" =>"48"
    ],

    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" =>"8"
    ],

    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" =>"15"
    ],
    
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" =>"70"
    ],

    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "AC Milan",
        "main" => "100",
        "gol" => "10",
        "assist" =>"12"
    ]


];

$totalMain;
$totalGol;
$totalAssist;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    
<tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Club</th>
        <th>Main</th>
        <th>Gol</th>
        <th>Assist</th>
</tr>
    <?php
        $no = 1;
        $totalMain = 0;
        $totalGol = 0;
        $totalAssist = 0;
    ?>
    <?php foreach($players as $player) : ?>
<tr>
    <td><?= $no ?></td>
    <td><?= $player['nama']?></td>
    <td><?= $player['club']?></td>
    <td><?= $player['main']?></td>
    <td><?= $player['gol']?></td>
    <td><?= $player['assist']?></td>
</tr>
    <?php
        $no++;
        $totalMain += $player["main"];
        $totalGol += $player["gol"];
        $totalAssist += $player["assist"];
    ?>
    <?php endforeach ?>
<tr>
    <td>#</td>
    <td colspan="2"><b>Jumlah</b></td>
    <td><?= $totalMain ?></td>
    <td><?= $totalGol ?></td>
    <td><?= $totalAssist ?></td>
</tr>
    </tr>
    
    </table>
</body>
</html>