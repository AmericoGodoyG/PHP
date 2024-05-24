<?php

    /*
      Functio gettype() exibe o tipo de dado inserido em seu parâmetro.
    */
    $teste = "5" * 12;

    echo "$teste <br>";

    echo gettype($teste);
    echo "<br>";

    echo gettype([]);
    echo "<br>";

    echo gettype(12.2);
    echo "<br>";

    echo gettype("teste");
    echo "<br>";
?>