<?php 
    /*
        Mudança de tipo implícito
        O PHP muda o tipo de dado de forma implicita;

        Por exemplo 5/2 = 2.5 (gera um FLOAT)

        E 5.5  resulta em 55 (gera uma string, o ponto (.) é o operador de concatenação)

        Este recurso é chamada de auto cast.
    */

    echo 5 / 2;
    echo "<br>";

    if (is_float(5 / 2)) {
        echo "É float";
    }

    echo 2 . 3; 
    echo "<br>";

    if (is_string(2 . 3)) {
        echo "É string <br>";
    }

    $nome = "Américo";
    $sobreNome = "Godoy";

    //Concatenando duas variáveis.
    $nomeCompleto = $nome . " ". $sobreNome;
    echo "Nome: $nomeCompleto";
    echo "<br>";
?>