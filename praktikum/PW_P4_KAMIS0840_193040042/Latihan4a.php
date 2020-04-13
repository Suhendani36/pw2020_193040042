<?php

$var = ["ada", "abel", "men", "pung", "nilai"]


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
            height: 60px;
            line-height: 40px;
            border: 1px solid black;
            padding: 5px; 
        }
    </style>
</head>
<body>
    <div class="bungkus">
    <?php
        echo "Array $var[0]lah suatu var$var[1] yang dapat $var[2]m$var[3] banyak $var[4]"
    
    ?>
    
    </div>
</body>
</html>