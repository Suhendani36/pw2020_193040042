<?php
    $GLOBALS['isset'] = "Panggil variabel yang sudah disediakan ke dalam function dengan memanfaatkan
    variabel global.";
    $GLOBALS['empty']= "Buat variabel kelas(style css) yang akan menjadi parameter yang kemudian akan
    dipanggil di dalam statement function";

    function soal($style){
        echo "<div class='$style'>
            <p>Isset adalah = " .$GLOBALS['isset']."</p>
            <p>Empty adalah = " .$GLOBALS['empty']."</p>

        </div>";
        // echo  $GLOBALS['isset'];
        // echo"<br><br>";
        // echo  $GLOBALS['empty'];
    }
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php echo soal('container') ?>
</body>
</html>