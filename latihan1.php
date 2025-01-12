<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($x=1; $x < 5; $x++) :?>
            <tr>
                <?php for($j=1; $j < 5; $j++): ?>
                    <td>1<?php echo $i.",".$j ?></td>
                <?php endfor; ?>
            </tr>
        <?php  endfor;?>
    </table>

</body>
</html>