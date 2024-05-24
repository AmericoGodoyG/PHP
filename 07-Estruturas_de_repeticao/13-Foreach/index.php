<?php 
    /*
        * * * Foreach * * *

        É uma das estruturas de repetição

        Foreach é orientado a um array devemos utilizar para que 
        a estrutura repita em todos os elementos do mesmo;

        Ex:

        foreach ($array as $item) {
            . . .
        }

    */

    $nomes = ["Matheus", "João", "Pedro", "Maria"];

    foreach ($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";

        if ($nome == "Matheus") {
            echo "- Opa <br>";
        }

    }
?>