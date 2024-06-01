<?php 
    /*
        * * * Diferença entre arrays * * *

        Podemos verifica qual a diferença entre
        dois ou mais arrays com PHP

        A função que vamos utilzar para isso, é
        a array_diff

        Esta função aceita um número indeterminado
        de arrays

        Obs: Exibe os elementos diferentes entre os
        arrays.
    */

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];
    $arr3 = [4, 6];

    $diff = array_diff($arr1, $arr2);
    print_r($diff);

    echo "<br>";

    $diff2 = array_diff($arr2, $arr1);
    print_r($diff2);

    echo "<br>";

    $diff3 = array_diff($arr2, $arr1, $arr3);
    print_r($diff3);

    echo "<br>";
?>