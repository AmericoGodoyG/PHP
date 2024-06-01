<?php 
    function somaElementos($arr) {

        if (count($arr) >= 1) {

            $somaArray = array_sum($arr);

            return $somaArray;

        } else {

            echo "Array sem elementos <br>";
        
        }

    }

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $somaNumeros = somaElementos($numeros);

    echo $somaNumeros;
    
?>