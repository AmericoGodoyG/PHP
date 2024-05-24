<?php 
    /*
        * * * Operador de identico a * * * 

        Como o operador identico a verificamos se um valor é igual ao outro,
        avaliando o seu tipo também;

        O simbolo é ===
        Ex: 5 === 5 (true)
        Ex: 3 === "3" (false)
    */

    // Verificando apenas o valor.
    if (5 == "5") { // true
        echo "5 é igual a 5 <br>";
    }

    //Operador de identico.
    if (5 === "5") { // false
        echo "5 é igual a 5 <br>";
    }

    //Verificando o dado e o tipo.
    if (5 === 5) {
        echo "5 é igual a 5 <br>";
    }
   
    if (5 === "teste") {
        echo "É igual";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    //Variaveis identificadas por seus valores.
    if ($a === $b) { // true.
        echo "A é igual a B <br>";
    }

    if ($a === $c) { // false
        echo "A é igual a C <br>";
    } 

?>