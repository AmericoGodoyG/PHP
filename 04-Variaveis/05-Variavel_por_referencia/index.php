<?php
    /*
        * * * Variável por referência * * *

        Podemos criar uma variável com referência a outra;
        
        O simbolo é =&;

        Se mudamos a variável de referência a referenciada
        muda o valor e ao contrário também gera mudança;
        
            $x = 2;    $x referência
            $y =& $x;  $y referenciada
    */

    $x = 10;
    $y =& $x;
    echo "X = $x <br>";
    echo "Y = $y <br>";

    echo "<br>";

    //mudança de valor para 15.
    $y = 15;
    echo "X = $x <br>";
    echo "Y = $y <br>";

?>