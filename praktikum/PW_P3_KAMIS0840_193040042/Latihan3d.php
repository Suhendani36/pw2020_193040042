<?php

$a = 1;
$b = 2;
$c = 3;
$d = 4;

function hitungDeterminan($a,$b,$c,$d){

            $deter = (($a * $d)-($b * $c));




    echo "<table style='border-left:2px solid black; border-right:2px solid black;' cellspacing='10' cellpadding='7'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td
            </tr>
        
    </table>";
    echo "</br>";
    echo "Determinan dari matriks tersebut adalah " .$deter. "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php hitungDeterminan($a,$b,$c,$d)?>
</body>
</html>