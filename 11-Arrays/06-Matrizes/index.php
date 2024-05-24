<?php 
    /*
        * * * Array multidimensional * * *
        
        Quando inserimos arrays dentro de arrays
        formamos um array multidimensional, também
        conhecidos como matriz

        Para acessar este tipo de array também utilizamos 
        índices, acessando o externo e depois os internos

        Ex:

            $arr[1][0] => Primeiro elemento do segundo array

    */


    // Array multidimensional
    $arr = [
        [1, 2, 3],
        [4, 5, 6]
    ];


    // Facilitando a leitura com a tag <pre>...</pre>
    echo "<pre>";
        print_r($arr) . "<br>";
    echo "</pre>";



    echo $arr[0][1] . "<br>"; // Acessando primeiro array, e sgundo elemento;
    echo $arr[1][2] . "<br>"; // Acessando segundo array, e terceiro elemento;



    echo "Elementos no array externo: ". count($arr) . "<br>";
    echo "Elementos no array interno índice 0 é: " . count($arr[0]) . "<br>";
    echo "Elementos no array interno índice 1 é: " . count($arr[1]) . "<br>";

?>