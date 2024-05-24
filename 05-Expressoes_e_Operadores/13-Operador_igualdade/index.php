<?php 
    /*
        * * * Operador de igualdade * * *
        
        Verifica se um valor é igual ao outro;
        O simbolo é: ==
        Ex: 5 == 4 (false)
        Ex: 3 == 3 (true)
    */

    if (5 == 5) { // true
        echo "5 é igual a 5! <br>";
        echo "Comparação verdadeira";
    }

    if (3 == 4) { // false
        echo "3 é igual a 4 <br>";
        echo "Comparação verdadeira";
    }

    echo "<br>";

    $a = 12;
    $b = 12;
    $c = 100;

    if ($a == $b) { // true
        echo "Comparação verdadeira! <br>";
    }

    if ($a == $c) { // false
        echo "Compração verdadeira! <br>";
    }

    $nome = "Américo";
    $nomeSistema = "Américo";

    if ($nome == $nomeSistema) { // true
        echo "O nome coincide!  <br>";
    }

?>