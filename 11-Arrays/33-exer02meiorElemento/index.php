<?php
    function maiorElemento($arr) {

        if (count($arr) >= 1) {

            $maior = $arr[0];

            for ($i = 1; $i < count($arr); $i++ ) {

                if ($maior < $arr[$i]) {

                    $maior = $arr[$i];

                }

            }

            return $maior;

        }

    }


    $listaNumeros =  [1, 4, 3, 2, 7, 6, 5, 9, 8];
    $maiorNumero =  maiorElemento($listaNumeros);

    echo $maiorNumero;
?>