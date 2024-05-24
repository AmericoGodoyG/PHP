<?php 
    /* * * * Operador Lógico OR * * * 
        OR resulta em verdadeiro caso qualquer um dos lados 
        da operação seja verdadeiro;

        Resulta em falso caso os dois lados sejam falsos;

        Simbolo: ||

        Ex: 5 > 15 || "teste" == "teste" (true)
    */

    if (5 > 2 || 3 < 4) { // true || true
        echo "A operação 1 é verdadeira <br>";
    }
   
    if (5 > 2 || 30 < 4) { // true || false
        echo "A operação 2 é verdadeira <br>";
    }
    
    if (5 > 20 || 3 < 4) { // false || true
        echo "A operação 3 é verdadeira <br>";
    }
   
    if (5 > 20 || 30 < 4) { // false || false
        echo "A operação 4 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if ($a > $b || $d > $c) { // false e true
        echo "A operação 5 é verdadeira <br>";
    }
   
    if (($a > $b || $d > $c) && $c < $d){ // false e true
        echo "A operação 6 é verdadeira <br>";
    }
    
    if (($a > $b && $d < $c) || $c < $d){ // false e true
        echo "A operação 7 é verdadeira <br>";
    }



    ?>