<?php 
    /*
        * * * Removendo elementos * * *

        Podemos remover elementos de um array 
        com a função array_splice();

        Passamos como parâmetro o array, índice inicical
        e quantos elementos queremos remover;

        Ex:

            array_splice($arr, 2,1) => A partir do índice 2, remove 1 elemento;

    */

    //REMOVENDO ELEMENTOS DE ARRAY

    $arr = [1,2,3,4,5,6];

    // Remove os elementos deo índice 1 e 2;
    $removidos = array_splice($arr, 1, 2);

    // Array já com os elementos removidos
    print_r($arr);
    echo "<br>";

    // Exibindo os elementos removidos do array.
    print_r($removidos);
    echo "<br>";


    $arr2 = [1,2,3,4,5,6];

    $removidos2 = array_splice($arr2, 3);
    print_r($arr2);
    echo "<br>";

    print_r($removidos2);
    echo "<br>";


    // Testando índice NEGATIVO.
    $arr3 = [1,2,3,4,5,6];

    $removidos3 = array_splice($arr3, 1, -1);
    print_r($arr3);
    echo "<br>";

    print_r($removidos3);
    echo "<br>";
    
?>