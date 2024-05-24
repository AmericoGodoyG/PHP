<?php 
    /*
        * * * Operador lógico NOT * * *

        Apenas inverte o resultado booleano de uma operação.

        Se é true vira false, se é false vira true;

        Símbolo: !

        Ex: !true (false)
        Ex: !(5 > 2) (false)
    */

    if (5 > 2) { // true 
        echo "A operação 1 é verdadeira <br>";
    }

    if (!(5 > 2)) { // false
        echo "A operação 2 é verdadeira <br>";
    }
    
    if (!(50 < 2)) { // true
        echo "A operação 3 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;

    if (!($a <= $b)) { // false
        echo "A operação 4 é verdadeira <br>";
    }
   
    if (!($a >= $b)) { // true
        echo "A operação 5 é verdadeira <br>";
    }

?>