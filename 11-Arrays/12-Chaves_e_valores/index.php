<?php 
    /*
        * * * Chaves e valores * * *

        Com a função array_keys() recebemos
        um array apenas com as chaves de um 
        array.

        Com a função array_values() recebemos
        um array com apenas os valores de um 
        array;
    */

    // Array associativo.
    $carro = [
        'marca' => 'BMW',
        'motor' => 2.4,
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];

    // Exibe as chaves de um array.
    $chaves = array_keys($carro);
    print_r($chaves);
    
    echo "<br>";

    // Exibe os valores de um array.
    $elementos = array_values($carro);
    print_r($elementos);


?>