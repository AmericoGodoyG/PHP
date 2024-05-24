<?php
    /*
        * * * Maior e Maior ou igual * * * 
        
        Operador maior que verificamos se um valor é maior que outro.

        Simbolo: > 
        
        Ex: 5 > 4 (true)

        Operador maior ou igual a verificamos se um valor é maior ou 
        igual a outro

        Simbolo: >= 

        Ex: 5 >= 5 (true)
    */

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;
    $e = 7;
    
    if ($a > $b) { // false
        echo "A é maior que B 1 <br>";
    }
    
    if ($b > $a) { // true
        echo "B é maior que A 2 <br>";
    }
    
    if ($d >= $c) { // true
        echo "D é maior ou igual a C 3 <br>";
    }
   
    if ($d >= $a) { // true
        echo "D é maior ou igual a A 4 <br>";
    }
    
    if ($d >= $e) { // false
        echo "D é maior ou igual a A 4 <br>";
    }