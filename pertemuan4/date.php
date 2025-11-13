<?php
    echo date("l,d-m-y");

echo "<br>";

    echo time();

echo "<br>";

    // menghitung 3 hari ke depan
    echo date("l, d M y", time() + 60 * 60 * 24 * 3);

echo "<br>";
    // menghitung detik yang sudah berlalu dari 1 januari 1970 sampai tgl lahir saya
    echo date("l", mktime(0,0,0,1,21,2002));

echo "<br>";

    echo date("l", strtotime("21 jan 2002"));
?>