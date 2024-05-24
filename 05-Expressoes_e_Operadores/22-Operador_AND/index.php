<?php
    /*
        * * * Operador AND* * * 

        Operadores lógicos em conjunto dos de comparação também retornam
        um boleano (true ou false)

        No caso de AND temos true apenas quando as duas comparações são 
        verdadeiras

        Simbolo: &&

        Ex: 5 > 2 && 10 < 100 (true)
    */

    if (5 > 10 && 10 > 5) { // false e true
        echo "Entrou no if 1 <br>";
    }
    
    if (50 > 10 && 10 > 5) { // true e true
        echo "Entrou no if 2 <br>";
    }
    
    if (50 > 100 && 10 > 500) { // false e false
        echo "Entrou no if 4 <br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if ($a > $b && $c == $d) { // true e true
        echo "Entrou no if 5 <br>";
    }
    
    if ($b <= $a && $c >= $d) { // true e true
        echo "Entrou no if 6 <br>";
    }
    
    if ($b === $a && $c > $d) { // false e false
        echo "Entrou no if 7 <br>";
    }
    
    //         1º (t)            2º (f)
    if (($b === $a && $c > $d) && $a > $b) { // false e false
        echo "Entrou no if 7 <br>";
    }

     //             1º               2º
    if (($b <= $a && $c >= $d) && $c === $a){ // true e false
        echo "Entrou no if 8 <br>";
    }