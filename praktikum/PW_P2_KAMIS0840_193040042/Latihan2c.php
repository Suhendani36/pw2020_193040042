<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ling{
            height: 60px;
            width: 60px;
            background-color:salmon;
            border: 1px solid black;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            display: inline-block;
        }
    </style>
</head>
<body>
        <table>
            <?php for($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for($s = 1; $s <= $i; $s++): ?>
                <td>
                <?= "<div class='ling'>$i</div>";?>
                </td>
                <?php endfor; ?>
            </tr>
            <?php endfor ?>
        </table>
</body>
</html>