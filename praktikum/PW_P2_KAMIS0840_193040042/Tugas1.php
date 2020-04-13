<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .salmon{
            background-color: salmon;
        }

        .biru{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="15" cellspacing="2">
        <?php for($i = 1; $i <= 6; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 6; $j++) : ?>
                <?php if(($i+$j) % 2 == 1) : ?>
                <td class="salmon">
            <?php else: ?>
                <td class="biru">
            <?php endif; ?>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>