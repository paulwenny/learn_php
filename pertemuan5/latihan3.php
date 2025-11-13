<?php
    // Array 1 Dimensi
    $mahasiswa = ["Paulinus Wenehenubun", "20210090", "Teknik Informatika", "20210090@unima.ac.id"];

    // Array Multi Dimensi
    $mahasiswa2 = [
        ["Paulinus Wenehenubun", "20210090", "Teknik Informatika", "20210090@unima.ac.id"],
        ["Ericha Irene Wenehenubun", "24210090", "Ekonomi", "24210090@unpati.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <h5>Array 1 Dimensi</h5>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <br>

    <h5>Array 2 Dimensi</h5>
    <ul>
        <?php foreach($mahasiswa2 as $mhs2) : ?>
            <li>Nama : <?= $mhs2[0]; ?></li>
            <li>NIM : <?= $mhs2[1]; ?></li>
            <li>Jurusan :<?= $mhs2[2]; ?></li>
            <li>Email : <?= $mhs2[3]; ?></li>
            <br>
            <?php endforeach; ?>
    </ul>
</body>
</html>