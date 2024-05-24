<?php 

    // Criando um array;
    for ($i = 0; $i <= 30; $i++) {

        $numeros[$i] = $i; 

    }

    echo "<pre>";
        print_r($numeros);
    echo "</pre>";

    // Definindo uma função que cria um novo array c/ nº maiores que sete
    function numerosMaiorSete($array) {

        for ($j = 0; $j < count($array); $j++) { 

            if ($array[$j] > 7 ) { 

                $novoArray[$j] = $array[$j];
            
            }

        }

        return $novoArray;

    }

    $x = numerosMaiorSete($numeros);

    echo "<pre>";
        print_r($x);
    echo "</pre>";

?>