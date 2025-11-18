<?php
    require 'functions.php';

    // Ambil data di URL
    $id = $_GET["id"];

    // Queri data mahaiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    
    
    // Cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // CEk data berhasil ditambahkan
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Di Ubah!!!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal Di Ubah!!!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" require value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <img src="img/<?= $mhs['gambar'] ?>" width="40">
                <br>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>