<?php 
    /*
        * * * Continue * * *

        Continue pula uma execução do loop.

        Ou seja, quando o interpretador encontrar esta instrução,
        a próxima etapa do loop será executada.

        Aplicada dentro de uma estrutura de repetição.
    */
    
    $a = 10;

    while ($a > 0) {

        if ($a === 5 || $a === 7) {

            echo "Pulou a execução $a <br>";

            $a--;

            continue;

        }

        if ($a === 2) {

            echo "Terminano o loop break $a <br>";
            break;
        }
        
        echo "Executando o loop $a <br>";

        $a--;

    }
?>