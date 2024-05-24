<?php 
    /*
        * * * Operador de Concatenação * * * 

        Em PHP podemos concatenar valores com . (ponto);

        Concatenar é o ato de juntar vários textos e/ ou números em apenas uma string;

        Não há limites de expressões que podem ser concatenadas;
    */

    echo "testando a concatenação";
    echo "<br>";
    echo "testando" . " a " . "concatenação";
    
    echo "<br>";

    $t = "testando";
    $c = "concatenação";

    echo "$t" . " a " . "$c";

    echo "<br>";

    $marca = "Ferrari";
    $motor = "3.0";
    $valMax = 200;

    echo "O carro da " . $marca . " tem um motor " . $motor . " e chega a uma velocidade de " .  $valMax . "km/h";

    echo "<br>";
?>