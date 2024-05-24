<?php 
        /*
        * * *  Adicionando valor ao fim do array  * * *
        
        Podemos adicionar valor ao fim de um array de
        um array, utilizando a atribuição sem determinar
        um índice;

        Então o valor atribuído será enviado para o último
        e novo índice do array;

        Ex:

            $arr[]=5;

        E em arrays associativos basta utilizar o nome 
        da nova chave com a atribuição de valor.
    */

    $arr = [1, 2, 3];

    $arr[] = 4;
    print_r($arr);
    echo "<br>";

    $arr[] = 5;
    print_r($arr);
    echo "<br>";

    $arr[] = 6;
    print_r($arr);
    echo "<br>";

    $arr2[] = 1;
    print_r($arr2);
    echo "<br>";

    $arr3 = [];
    $arr3['teste'] = 'testando';
    print_r($arr3);
    echo "<br>";
?>