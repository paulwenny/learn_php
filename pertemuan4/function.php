<?php
    function salam($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Functin</title>
</head>
<body>
    <h1>
        <?php echo salam("pagi", "Paul"); ?>
    </h1>
</body>
</html>