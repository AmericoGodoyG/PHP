<?php 
    $a = 12.03; 
    $b = 15.04;
    $c = -01.01;

    echo "$a <br>";
    echo "$b <br>";
    echo "$c <br>";

    //Verificando um float negativo.
    if (is_float($c)) {
        echo "Sim, podemos ter floats negativos!";
    }
?>