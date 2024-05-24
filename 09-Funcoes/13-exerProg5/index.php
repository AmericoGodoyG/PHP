<?php
    
    /*  
        Defindo uma função que soma todos os números 
        pares até o número determinado como parâmetro.     
    */

    function sumEvenNumbers($numero) {

        if (is_int($numero) && $numero != 0 && $numero > 0) {

            $soma = 0;

            for ($i = 1; $i <= $numero; $i++) {

                // Verifica se o número é par.
                if ($i % 2 == 0) {

                    $soma += $i;

                }

            }
            
            return $soma; 

        } else {

            echo "Insira um valor maior e diferente de zero!";
    
        }

    }

    // Atribuindo uma função a uma variável.
    $somaNumeros = sumEvenNumbers(10);

    // Exibindo a var $somaNumeros.
    echo $somaNumeros;