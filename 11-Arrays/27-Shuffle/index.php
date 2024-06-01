<?php 
    /*
        * * * Ordem aleatório de itens * * *
        
        Com o shuffle() podemos embaraçhar os
        itens de um array.

        Passamos apenas o array como parâmetro

        Aletera a estrutura original do array.
    */

    $arr = range(1, 20);

    shuffle($arr);
    print_r($arr);

    echo "<br>";

    shuffle($arr);
    print_r($arr);

?>