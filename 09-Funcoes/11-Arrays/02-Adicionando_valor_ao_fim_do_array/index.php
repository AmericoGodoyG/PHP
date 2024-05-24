<?php 
        /*
        * * *  Adicionando dados ao fim de um array  * * * 
        
        Podemos adicionar dados ao fim de um array utilizando a atribuição
        sem determinar um índice;

        Então o valor atribuído será enviado para o último e novo índice do array;

        Ex:

            Exemplo: $arr[] = 5;

    */

    $arr = [1, 2, 3];
    // O valor 4 irá direto para o fim do array;
    $arr[] = 4;
    
    $arr[] = 5;
    print_r($arr);

    echo "<br>";

    $arr2[] = 1;
    print_r($arr2);

    echo "<br>";

    $arr3 ['teste'] = 'testando';
    print_r($arr3);
?>