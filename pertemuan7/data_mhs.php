<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <?php
    // Array Associative
    $mahasiswa = [
        [
            "nama" => "Ericha Rikardo", 
            "nim" => "000001", 
            "email" => "0000001@gmail.com", 
            "fakultas" => "Seni",
            "gambar" => "ericha.png"
        ],
        [
            "nama" => "Jennie BlackPink", 
            "nim" => "000002", 
            "email" => "000002@gmail.com", 
            "fakultas" => "Seni Musik",
            "gambar" => "jennie.png"
        ],
        [
            "nama" => "Jessica Janne", 
            "nim" => "000003", 
            "email" => "000003@gmail.com", 
            "fakultas" => "Ilmu Sosial",
            "gambar" => "jessica.png"
        ],
        [
            "nama" => "lisa Blackpink", 
            "nim" => "000004", 
            "email" => "000004@gmail.com", 
            "fakultas" => "Seni Tari",
            "gambar" => "lisa.png"
        ],
        [
            "nama" => "Rafael Leao", 
            "nim" => "000005", 
            "email" => "000005@gmail.com", 
            "fakultas" => "Pendidikan Olahraga",
            "gambar" => "leao.png"
        ]
    ];
    ?>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="profil_mhs.php?nama=<?= $mhs["nama"];?>&nim=<?=$mhs["nim"];?>&email=<?=$mhs["email"];?>&fakultas=<?=$mhs["fakultas"];?>&gambar=<?=$mhs["gambar"];?>">
                    <?= $mhs["nama"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>