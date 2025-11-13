<?php
    // Pengulangan pada array
    $angka = [1,4,6,10,11,5,7];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both};
    </style>
</head>
<body>
    <!-- Menampilkan Array menggunakan looping For -->
    <?php for($i = 0; $i < count($angka); $i++){ ?>
        <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Menampilkan Array menggunakan looping khusus Array Foreach -->
    <?php foreach( $angka as $a ){ ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>
</body>
</html>