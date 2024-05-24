<?php 
    /*
        * * * Operador não identico a * * *
        
        Verificamos se um valor é diferente de outro e avaliando seu tipo também
        
        Simbolo: !==

        Ex: 5 !== 4 (false)
        Ex: 3 !== "3" (true)
    */

    $a = 1;
    $b = "1";

    // Valores iguais.
    if ($a != $b) { // false
        echo "A é diferente de B 1 <br>";
    }

    // Valores não identicos ao outro
    if ($a !== $b) { // true
        echo "A é diferente de B 2 <br>";
    }  

    if (1 !== 2) { // true
        echo "Não é identico 1 <br>";
    }
   
    if (1 !== "1") { // true
        echo "Não é identico 2 <br>";
    }
   
    if ([] !== "abc") { // true
        echo "Não é identico 3 <br>";
    }
?>