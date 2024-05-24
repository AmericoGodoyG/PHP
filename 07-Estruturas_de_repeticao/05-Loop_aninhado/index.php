<?php 
    /*
        * * * Loop Aninhado * * *
        
        Podemos adicionar um loop dentro de outro;
    
        O contador deve ser único, para que um loop não afete o outro;
            - Um contador para cafa loop.

        O loop interno será executado tantas vezes quanto o loop exeterno for;

        E em cada uma das execuções, serão passadas todas as suas etapas;
    */


    $i = 1;

    while ($i <= 10) {

        echo "looping externo <b>$i</b> <br>";

        $j = 1;

        while ($j <= 5) {

            echo "looping interno $j <br>";
            $j++;
            
        }

        echo "<br>";

        $i++;
    }



?>