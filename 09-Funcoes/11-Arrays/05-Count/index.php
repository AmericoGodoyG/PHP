<?php 

    /*
        * * *  Número de elementos  * * *

        Podemos obter o número de elementos
        de um array com a função count;

        Basta passar o array como argumento;

        Um inteiro será retornado;
    */

    // Criando um array de forma manual
    $arr = [1, 2, 3];
    echo count($arr) . "<br>";

    // Criando um array com range
    $arr2 = range(1, 10);
    echo count($arr2) . "<br>";

    // Criando um array associativo
    $arr3 = [
        'nome' => 'Américo', 
        'idade' => '25',
        'profissao' => 'Desenvoldor'
    ];
    echo count($arr3);
    
?>