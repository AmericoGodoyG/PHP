<?php 
    $s = "Nome";
    $i = 10;
    $b = true;


    // 1º Caso
    if (is_int($s)) { // false
        echo "Tipo inteiro <br>";
    } else {
        echo "Não é do tipo inteiro <br>";
    }

    // 2º Caso
    if (is_int($i)) { // true
        echo "Tipo inteiro <br>";
    } else {
        echo "Não é do tipo inteiro <br>";
    }

    // 3º Caso
    if (is_int($b)) { // false
        echo "Tipo inteiro <br>";
    } else {
        echo "Não é do tipo inteiro <br>";
    }
?>