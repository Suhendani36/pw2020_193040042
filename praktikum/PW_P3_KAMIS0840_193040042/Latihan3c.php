<?php
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "<div class='ling'>$i</div>";

            }
            echo"<br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ling{
            height: 50px;
            width: 50px;
            background-color:salmon;
            border: 1px solid black;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;

        }
    </style>
</head>
<body>
    <?php tumpukanBola(5)?>
</body>
</html>