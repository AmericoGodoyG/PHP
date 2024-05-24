<?php 
    /*
        * * * While * * *

        While é uma estrutura de repetição
        que executa um bloco de código n vezes
        até satisfazer a sua condição.

        Geralmente é necessário um contador para
        atingir a condição.

        Ex:

        while (condição) {

            . . . código . . .

        }
    */



    // Definindo um contador
    $x = 0;

    while ($x < 10) {

        echo $x . "<br>";
        
        // Incremento do contador
        $x++;
    }

    echo "Continuação do código <br>";
  


    // Definindo um contador
    $y = 0;

    while ($y <= 10) {

        echo $y . "<br>";
        
        // Incremento de passo 2
        $y += 2;
    }

    echo "Continuação do código <br>";



    // Definindo um contador
    $z = 10;

    while ($z >= 0) {

        echo $z . "<br>";
        
        // Decremento de passo 1
        $z--;
    }

    echo "Continuação do código <br>";
    
    
    
    // Definindo um contador
    $a = 10;

    while ($a > 0) {

        if ($a % 2 != 0) {
            echo $a . "<br>";
        }
        
        // Decremento do contador.
        $a--;
    }

    echo "Continuação do código <br>";

?>