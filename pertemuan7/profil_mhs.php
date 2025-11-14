<?php
    // cek apakah tidak ada data di $_GET
    if(!isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["fakultas"]) ||
    !isset($_GET["gambar"]))
    {
        // Redirect
        header("Location: data_mhs.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"];?> ">
        </li>
        <li><?= $_GET["nama"];?> </li>
        <li><?= $_GET["nim"];?> </li>
        <li><?= $_GET["email"];?> </li>
        <li><?= $_GET["fakultas"];?> </li>
    </ul>
    <a href="data_mhs.php">BACK</a>
</body>
</html>