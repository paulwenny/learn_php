<?php
    // Standar Output
    echo "ini echo <br>";
    print "ini print <br>";
    print_r ("ini print_r <br>");
    var_dump ("ini var_dump <br>");

    echo "<br>";

    // Variabel 
    $variabel = "ini variabel <br>";
    echo $variabel;

    echo "<br>";

    // Operator
    // Aritmatika
    $x = 10;
    $y = 5;
    echo $x + $y;

    echo "<br>";

    // Concat
    $nama_depan = "Paul";
    $nama_belakang = "Wenny";
    echo $nama_depan. " " .$nama_belakang;

    echo "<br>";

    // Assignment
    $a = 5;
    $a += 5;
    echo $a;

    echo "<br>";

    // Perbandingan
    var_dump(1 == "1");

    echo "<br>";

    // identitas
    var_dump(1 === "1");

    echo "<br>";

    // Logika
    $o = 30;
    var_dump($o < 20 && $o % 2 === 0);

?>