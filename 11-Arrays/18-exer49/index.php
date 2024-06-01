<?php 

    $marca = "Chevrolet";
    $ano = "2024";
    $nome = "Onix";
    $modelo = "LT Turbo";
    $cor = "Branco";

    $carro = compact("marca", "ano", "nome", "modelo", "cor");

    echo "<pre>";
        print_r($carro);
    echo "</pre>";

    foreach ($carro as $informacoes => $valor) {

        echo "{$informacoes}: {$valor} <br>";

    }

?>