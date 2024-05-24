<?php 
    // que checa se é inteiro
    //is_int()

    if (is_int(5)) { // true
        echo "Inteiro <br>";
    }
    
    if (is_int("Não é um inteiro")) { // false
        echo "Inteiro <br>";
    }

    $n = 10;
    if (is_int($n)) {
        echo "É um inteiro <br>";
    }

?>