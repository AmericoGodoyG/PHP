<?php 

    function verificarNumero($numero){

        if (is_int($numero) && $numero % 2 === 0 && $numero != 0) {
            
            echo "O número $numero é par <br>";

        } elseif (is_int($numero) && $numero % 2 !== 0 &&  $numero != 0){

            echo "O número $numero é impar <br>";

        } else {
            
            echo "O valor $numero não é válido! <br>";

        }

    }

    // Número par
    verificarNumero(10);
    // Número impar
    verificarNumero(9);
    // Nulo
    verificarNumero(0);
?>