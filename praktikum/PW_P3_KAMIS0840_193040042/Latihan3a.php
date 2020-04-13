<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .div{
        border: 1px solid black;
        box-shadow: 2px 2px 6px 8px rgba(0,0,0,0.1);
        width: 600px;
        border-radius: 5px;
    }

    .tulisan{
        font-size: 28px;
        font-family: arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bold;
    }



    </style>
</head>
<body>
    <?php
    
    function gantiStyle($tulisan, $style1, $style2){
            echo "<div class='$style1'>
                    <p class='$style2'>$tulisan</p>
            </div>";

    }
    ?> 

    <?php gantiStyle("Selamat datang di praktikum PW 2020", 'div', 'tulisan')?>  



</body>
</html>