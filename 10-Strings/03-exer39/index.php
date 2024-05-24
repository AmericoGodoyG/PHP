<?php

    // Criando uma função que retorna o valores de um array com os precos > 1000
    function itensCaros($arr) {

        $arrItensCaros = []; // Novo array que receve o valores > 1000.

        // foreach(array a ser iterado as chave => valor)
        foreach ($arr as $nome => $preco) {

            if ($preco > 1000) {

                $arrItensCaros[$nome] = $preco;  
            
            }

        }

        return $arrItensCaros;

    }

    // lista de itens;
    $listaItens = [
        'porta' => 100,
        'retrovisor' => 25,
        'motor' => 45000,
        'painel' => 1500,
        'calotas' => 200
    ];

    $novoArray = itensCaros($listaItens);

    print_r($novoArray);
?>