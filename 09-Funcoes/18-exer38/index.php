<?php 

    function listaParaString($itens) {

      return implode(", ", $itens);

    }

    $lista = [
        "Arroz", 
        "Feijão", 
        "Frango", 
        "Batata Doce", 
        "Carne Bovina",
        "Salada"
    ];

    $compra = listaParaString($lista);

    echo $compra;


?>