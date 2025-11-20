<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
    // Memanggil file function.php
    require 'functions.php';

    $mahasiswa = query("SELECT * FROM mahasiswa");

    // tombol cari ditekan
    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>

    <style>
        .gif{
            width: 25px;
            position: absolute;
            top: 140px;
            left: 325px;
            z-index: -1;
            display: none;
        }
    </style>

    
</head>
<body>
    <a href="logout.php">logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br></br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/loading.gif" name="gif" class="gif">
    </form>

    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th> 
            </tr>
            <?php $i = 1; ?>
            <?php foreach($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <a href="ubah.php?id=<?=$row["id"];?>">Ubah</a> | 
                        <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('yakin?');">Hapus</a>
                    </td>
                    <td>
                        <img src="img/<?=$row["gambar"]?>" width="50px">
                    </td>
                    <td><?=$row["nim"]?></td>
                    <td><?=$row["nama"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["jurusan"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>