<?php 

    function encontrarPares($arr) {

        if (count($arr) >= 1) {

            $arrPares = [];

            for ($i = 0; $i < count($arr); $i++) {

                if ($arr[$i] % 2 === 0) {

                    $arrPares[] = $arr[$i];

                }

            }

            return $arrPares;

        }

    }

    $listaNumeros = [1, 2 , 3, 4, 5, 6, 7, 8, 9 , 10, 11, 12];

    $listaPares = encontrarPares($listaNumeros);

    print_r($listaPares);

?>