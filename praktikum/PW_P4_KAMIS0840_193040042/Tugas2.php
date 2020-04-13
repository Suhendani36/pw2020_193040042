<?php

 $makanan = [
        [

            "view" => "kunefe.jpg",
            "nama" => "kunefe",
            "bahan" => "Keju, Kacang Pistachio, Krim, Ice cream",
            "daerah" => "Turki",
            "manfaat" => "menambah sumber protein, serat, dan antioksidan yang baik dan menjaga berat badan seimbang"

        ],
        [

            "view" => "sop.jpg",
            "nama" => "Sop Konro",
            "bahan" => "Iga Sapi atau Daging Sapi",
            "daerah" => "Sulawesi Selatan",
            "manfaat" => "Untuk pencegahan penyakit dan peningkatan kesehatan"
        
        ],
        [

            "view" => "mieaceh.jpg",
            "nama" => "Mie Aceh",
            "bahan" => "Daging sapi, Mie, udang dan Sayuran",
            "daerah" => "Aceh",
            "manfaat" => "Untuk pembentukan sel-sel tubuh karena terkandung udang"
        
        ],
        [

            "view" => "bika.jpg",
            "nama" => "Bika AMbon",
            "bahan" => "Telur, Gula dan Santan",
            "daerah" => "Sumatra utara",
            "manfaat" => "Memberikan tambahan energi dan karbohidrat"
        
        ],
        [

            "view" => "pendap.jpg",
            "nama" => "Pendap",
            "bahan" => "Ikan kembung,Kelapa,dll",
            "daerah" => "Bengkulu",
            "manfaat" => "Menurunkan kadar kolestrol"
        
        ],
        [

            "view" => "rendang.jpg",
            "nama" => "Rendang Sapi",
            "bahan" => "Daging sapi, Bumbu rendang dan Santan",
            "daerah" => "Padang, Sumatra Barat",
            "manfaat" => "Menyehatkan"
        
        ],
        [

            "view" => "gulai.jpg",
            "nama" => "Gulai Ikan Patin",
            "bahan" => "Ikan Patin, bumbu gulai",
            "daerah" => "Jambi",
            "manfaat" => "Mencerdaskan otak, Menyehatkan mata dan tulang"
        
        ],
        [

            "view" => "kebab.jpg",
            "nama" => "Kebab",
            "bahan" => "Tortila, daging, sayuran, dll",
            "daerah" => "Turki",
            "manfaat" => "Meningkatkan kecerdasan otak, Mencegah anemia, Sumber energi"
        
        ],
        [

            "view" => "TD.jpg",
            "nama" => "Lokum atau Turkish delight ",
            "bahan" => "tepung maizena, gula bubuk, air, perasa buah",
            "daerah" => "Turki",
            "manfaat" => "menambah energi, mengandung protein untuk mempercepat penyembuhan luka."
        
        ],
        [

            "view" => "sushi.jpg",
            "nama" => "Sushi",
            "bahan" => "Beras jepang, nori, crab stick,timun dll",
            "daerah" => "Jepang",
            "manfaat" => "Meningkatkan Sistem Kekebalan, Meningkatkan Metabolisme, Kaya Kandungan Omega-3"
        
        ]
];


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
            margin:auto;
            background-color:salmon;
            color:white;
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
    <?php
    $no = 1;
    ?>
    <?php foreach ($makanan as $mkn) : ?>
    <tr>
        <td><?= $no?></td>
        <td><img src="img/<?= $mkn['view']?>"></td>
        <td><?= $mkn['nama']?></td>
        <td><?= $mkn['bahan']?></td>
        <td><?= $mkn['daerah']?></td>
        <td><?= $mkn['manfaat']?></td>
    </tr>
    <?php 
        $no++;
    ?>
    <?php endforeach ?>
    </table>
</body>
</html>



