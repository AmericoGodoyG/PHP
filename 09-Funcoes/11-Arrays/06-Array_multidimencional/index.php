<?php 
    /*
        * * *  Array multidimencional  * * *
        
        Quando inserimos arrays dentro de array
        formamosum array multidimensional, também
        conhecido como matriz;

        Para acessar este tipo de array também utilizamos
        índices, acessando o externo e depois os internos;

        Ex:

            $arr[1][0] => Primeiro elemento do segundo array;

    */

    // Array multidimencional
    $arr = [
        [1, 2, 4],
        [4, 5, 6]
    ];

    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    // Acessando o array de índice 0, e acessando o array interno de índice 1.
    echo $arr[0][1] . "<br>";

    // Acessando o array de índice 1, e acessando o array interno de índice 2.
    echo $arr[1][2] . "<br>";

    echo count($arr) . "<br>";
    echo count($arr[0]) . "<br>";
    echo count($arr[1]) . "<br>";
?>