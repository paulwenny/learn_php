<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Mengambil data dari tabel mahasiswa/query data mahasiswa
    $result = mysqli_query( $conn, "SELECT * FROM mahasiswa" );

    // Ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row()       << Mengembalikan Array Numerik
    // mysqli_fetch_assoc()     << Mengembalikan Array Assosiative
    // mysqli_fetch_array()     << Mengembalikan Array Numerik dan Assosiative (data yang di tampilkan doble sehingga berat)
    // mysqli_fetch_object()    << Mengembalikan Object

    // while($tampilmhs = mysqli_fetch_assoc($result)){
    //     var_dump($tampilmhs);
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img/<?=$row["gambar"]?>" width="50px">
                </td>
                <td><?=$row["nim"]?></td>
                <td><?=$row["nama"]?></td>
                <td><?=$row["email"]?></td>
                <td><?=$row["jurusan"]?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>