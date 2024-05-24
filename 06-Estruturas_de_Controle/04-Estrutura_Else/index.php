<?php 
    /*
        * * * Estrutura Else * * *

        Pode executar outro bloco de códico quando a 1ª condição dentro do if
        for falsa.

        Em else não inserimos exoressões;

        Ex: if (expresso) {
            bloco executado caso a condição seja verdadeira;
        } else {
            bloco executado caso a condição seja falsa;
        }
    */

    if (5 > 2 ) {

        echo "Verdade <br>";

    } else {

        echo "Falso <br>";

    }

    if ("teste" === 5 ) {

        echo "Verdade <br>";

    } else {

        echo "Falso <br>";

    }

    //Variáveis 
    $a = 10;
    $b = 20;

    if ($a > $b) { // false

        echo "A é maior que B <br>";

    } else {

        echo "A é menor que B <br>";

    }
   
    if ($a < $b) {

        echo "A é maior que B <br>";

    } else {

        echo "A é menor que B <br>";

    }

?>