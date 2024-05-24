<?php
    /*
        * * * Estrutura condicional IF * * *

        IF checa se uma expressão é verdadeira;

        Podemos incluir operadores lógicos nas expressções;
        
        Ex: if(expressão) {bloco executado caso a expressao seja verdadeira}
    */
    if (5 > 2) { // true
        echo "5 é maior que 2 <br>";
    }

    if (2 >= 5) { // false
        echo "2 é maior ou igual a 5 <br>";
    }

    if (10 === 10 && 9 > 3) {
        echo "Verdadeiro <br>";
    }

    // Variáveis
    $a = 10;
    $b = 5;
    $c = "A é maior ou igual a B <br>";

    if ($a >= $b) { // true
        echo $c;
    }

?>