<?php
function salam($jam,$nama){
    if($jam < 12){
        $text = "Pagi";
    }elseif($jam > 12 && $jam < 14){
        $text = "Siang";
    }elseif($jam > 14 && $jam < 17){
        $text = "Sore";
    }elseif($jam > 17){
        $text = "Malam";
    }
    return "Selamat $text, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Fungsi built in dan user defined</title>
</head>
<body>
    <?php 
    $time = date("Y-m-d H:i:s", strtotime('+6 hours'));
    $jam = substr($time, 11, 2);
    ?>
    <h1><?php echo salam($jam,"Rian") ?></h1>
</body>
</html>