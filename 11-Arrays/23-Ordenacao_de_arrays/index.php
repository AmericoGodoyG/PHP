<?php 
    /*
        * * * Ordenação de Arrays * * *

        Para ordenar em ordem crescente podemos
        utilizar a função sort() em um array;

        Para ordenar de forma inversa utilizamos
        rsort();
    */

    $arr = [2, 1, 4, 6, 10, 7, 5, 8, 3, 9];

    // Ordenando em forma crescente.
    sort($arr);
    print_r($arr);

    echo "<br>";

    // Ordenando em forma decrescente.
    rsort($arr);
    print_r($arr);


    $nomes = ["Maria", "Américo", "João", "Bruna", "Gustavo"];

    // Ordenando em ordem alfabética
    sort($nomes);

    echo "<br>";

    print_r($nomes);
    echo "<br>";
?>