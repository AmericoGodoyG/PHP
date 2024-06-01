<?php 
    /*
        * * * Ordenação de arrays associativos * * *

        Para ordenar em ordem crescente pelo valor
        das chaves, podemos utilizar a função asort();

        Se quisermos ordenar o array pelas chaves, utilizamos
        a função ksort();
    */

    $arr = [
        'Americo' => 25,
        'Pedro' => 18,
        'Joao' => 14,
        'Maria' => 12
    ];
    // Ordenando os elementos em forma crescente um array associativo.
    asort($arr);
    print_r($arr);



    echo "<br>";



    $arr2 = [
        'Pedro' => 18,
        'Maria' => 12,
        'Americo' => 25,
        'Joao' => 14
    ];
    // Ordenando as chaves em forma decrescente um array associativo.
    arsort($arr);
    print_r($arr);



    echo "<br>";


    // Ordenando as chaves em ordem alfabética de um array associativo.
    ksort($arr2);
    print_r($arr2);


    echo "<br>";


   // Ordenando as chaves de forma iversa alfabética de um array associativo.
   krsort($arr2);
   print_r($arr2);
?>