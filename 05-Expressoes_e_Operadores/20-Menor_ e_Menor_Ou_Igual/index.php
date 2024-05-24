<?php
    /*
        * * * Operador de Menor ou Menor ou igual * * *

        Operador menor que verificamos se um valor é menor que outro;
        
        Simbolo: <

        Ex: 5 < 4 (false)
    
        Operador menor ou igual a verificamos se um valor é menor ou igual a outro

        Simbolo: <=

        Ex: 11 <= 12 (true)
    */

    if (4 < 12) { // true
        echo "4 é menor que 12 <br>";
    }
    
    if (24 < 12) { // false
        echo "24 é menor que 12 <br>";
    }

    if (12 <= 12) { // true
        echo "12 é menor ou igual a 12 <br>";
    }

    $a = 5;
    $b = 18;

    if ($a <= $b) { // true
        echo "A é menor ou igual a B <br>";
    }
    
    if ($b <= 42) { // true
        echo "B é menor ou igual a 42 <br>";
    }