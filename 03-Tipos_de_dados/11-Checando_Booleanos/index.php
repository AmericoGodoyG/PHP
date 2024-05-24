<?php 
    //Verifica se um dado é booleano: 
    //is_bool()

    $a = true;
    if (is_bool($a)) {
        echo "É um boolano <br>";
    }
    

    if (is_bool(0)) { // Zero (0) é considerado um número.
        echo "É um boolano <br>";
    }

    if (is_bool(false)) { // false é booleano
        echo "É um boolano <br>";
    }

    if (0.0 == false) { // true
        echo "0 é considerado falso";
    }
?>