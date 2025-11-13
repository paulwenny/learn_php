<?php
    // Perulangan
    // -> for
    echo "Ini Perulangan for <br>";
    for($i = 0; $i < 5; $i++){
        echo $i . " " . "Hello Dunia <br>";
    };

echo "<br>";

    // -> while
    echo "ini perulangan while <br>";
    $i = 0;
    while($i < 5){
        echo $i . " " .  "Hello Dunia <br>";
    $i++;
    }

echo "<br>";

    // -> do.. while
    echo "ini perulangan do.. while <br>";
    $i = 0;
    do{
        echo $i . " " . "Hello Dunia <br>";
        $i++;
    } while ($i < 5);
?>