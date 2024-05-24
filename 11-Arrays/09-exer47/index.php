<?php 

    $carro = [
        "Jaguar",
        3.0,
        "Azul",
        18,
        "teto solar"
    ];

    list($marca, $potencia, $cor, $aro, $tipoTeto) = $carro;

    echo "Marca: {$marca}" . "<br>";
    echo "Potência do motor: ". number_format($carro[1], 1) . "<br>";
    echo "Cor: {$cor}" . "<br>";
    echo "Aro: {$aro}" . "<br>";
    echo "Versão com {$tipoTeto}" . "<br>";

?>