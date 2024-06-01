<?php 
    /*
        * * * Unindo arrays * * *

        Podemos unir arrays, a ação também
        é conhecida como merge (mesclar)

        A função que vamos utilizar é a array_merge()

        Que como argumento aceita um número indeterminado
        de arrays
    */

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 43.3];
    $arr4 = ['asd', 'bgf', 'koj', 'jooj'];

    $arrMerge = [$arr1, $arr2, $arr3, $arr4, [0,1]];

    echo "<pre>";
        print_r($arrMerge);
    echo "</pre>";
?>

