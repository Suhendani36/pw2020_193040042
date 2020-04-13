<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .ling{
        width: 50px;
        height: 50px;
        background-color: salmon;
        font-weight: bold;
        text-align: center;
        line-height: 50px;
        transition: 0.5s;
        float: left;
        margin: 2px;
        border-radius:50%;
        border: 2px solid black;
    }
    .clear{
        clear: both;
    } 
    </style>
</head>
<body>

<?php

$hrfa = "A";
$hrfb = "B";
$hrfc = "C";

echo "<div class='ling'>$hrfa</div>";
echo '<div class="clear"></div>';

echo "<div class='ling'>$hrfb</div>";
echo "<div class='ling'>$hrfb</div>";
echo '<div class="clear"></div>';

echo "<div class='ling'>$hrfc</div>";
echo "<div class='ling'>$hrfc</div>";
echo "<div class='ling'>$hrfc</div>";

?>
</body>
</html>