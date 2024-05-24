<?php

// * * * Array Associativo * * *
    $carro = [
        //Chave => Valor
        'nome'=>'Nivus',
        'modelo'=>'Tsi',
        'ano'=>2024,
        'marca'=>'Volkswagen',
        'blindado'=>false,
        'cor'=>'chumbo',
        'vendido'=>true,
        'kilometragem'=>45.025
    ];

    //Exibindo chaves e valores do array $carro. 
    print_r($carro);

    //Exibindo os valores associados as Chves.
    echo $carro['marca'] . "<br>";
    echo $carro['nome'] . "<br>";
    echo $carro['modelo'] . "<br>";
    echo $carro['marca'] . "<br>";
    echo $carro['kilometragem'] . "<br>";
    echo $carro['blindado'] . "<br>";
?>