<?php 
    $mahasiswa_numeric = [
        ["Rian", 11043015, "riant57@gmail.com"],
        ["Nur", 11043016, "nur@gmail.com"],
        ["Adi", 11043017, "adi@gmail.com"],
    ];
    //print_r($mahasiswa);

    $mahasiswa = [
        [
            "nama"=>"Rian",
            "nik" =>11043015,
            "email"=>"riant57@gmail.com",
        ],
        [
            "nik" =>11043016,
            "email"=>"nur@gmail.com",
            "nama"=>"Nur",
        ],

    ];
    //print_r($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h4>Daftar Mahasiswa</h4>
    <h5> array numeric </h5>
    <?php foreach($mahasiswa_numeric as $mhs) : ?>
        <ul>
            <li><?php echo $mhs[0] ?></li>
            <li><?php echo $mhs[1] ?></li>
            <li><?php echo $mhs[2] ?></li>
        </ul>
    <?php endforeach; ?>
    <h5> array assosiatif </h5>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo $mhs["nama"] ?></li>
            <li><?php echo $mhs["nik"] ?></li>
            <li><?php echo $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>