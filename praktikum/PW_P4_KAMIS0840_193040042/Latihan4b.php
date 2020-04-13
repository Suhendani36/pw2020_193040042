<?php
    $npb = [
                "Mohammad Salah",
                "Cristiano Ronaldo",
                "Lionel Messi",
                "Zlatan Ibrahimovic",
                "Neymar Jr",
                "Hariono"
    ]
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .container{
                width: 500px;
                height: 420px;
                border: 1px solid black;
                padding-left: 10px;
            }
        
        </style>



    </head>
    <body>
    <div class="container">
        <h1>Daftar Pemain Bola Terkenal</h1>
        <ol>
        <?php foreach($npb as $p) :?>
                <li><?php echo "$p"?></li>           
        <?php endforeach ?>
        </ol>

        <h2>Daftar pemain bola terkenal baru</h2>


        <?php
            $npb[] = "Luca Modric";
            $npb[] = "Sadio Mane";
            sort($npb);
        
        ?>
            <ol>
                <?php foreach($npb as $p) :?>               
                    <li><?php echo "$p"?></li>
                <?php endforeach ?>
            </ol>
    </div>
    </body>
    </html>

