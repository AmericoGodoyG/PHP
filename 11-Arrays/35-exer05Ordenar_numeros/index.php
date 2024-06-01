<?php 
    function ordenarNumeros($arr) {

        sort($arr);

        return $arr;
    }

    $listaDesordenada = [2, 1, 4, 6, 10, 7, 5, 8, 3, 9];

    $listaOrdenada = ordenarNumeros($listaDesordenada);

    print_r($listaOrdenada);

?>