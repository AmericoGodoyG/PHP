<?php
    /*
        * * * Variável de variável * * *

        Podemos criar uma variável por meio de outra variável 
        com um valor diferente;

        O simbolo pra essa função é o $$;

        $x = "teste";
        $$x = 5;

        Após a execução do código, a variável teste (conteúdo de $x), 
        será criada com o valor 5;
    */

    $x = "nome"; // valor de nome

    echo "$x <br>";

    $$x = "Américo"; // nome de x (nome), com valor de Américo

    echo "$nome <br>";
?>