<?php 
    /*
        * * * Criando array com compact() * * *

        Com a função compact() podemos criar
        um array a partir de variáveis;

        Passamos para a função o nome das variáveis
        em forma de string;

        E então um novo array associativo é criado, 
        podemos atribuir a uma varável.
    */

    $marca = "Chevrolet";
    $modelo = "Onix";
    $ano = "2024";
    $motor = "1.0";
    $modelo = "L.T Turbo";
    $cor = "Preto";
    $tetoSolar = true;
    $portas = 4;

    // Criando um Array Associativo.
    $carro = compact(
        "marca",
        "modelo",
        "ano",
        "motor",
        "modelo",
        "cor",
        "tetoSolar", 
        "portas"
    );

    echo "<pre>";
        print_r($carro);
    echo "</pre>";
?>