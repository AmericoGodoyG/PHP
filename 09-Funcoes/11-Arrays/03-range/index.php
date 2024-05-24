<?php 
    /*
        * * *  Criar array rapidamente * * * 
        
        Podemos utilizar a função range() para 
        criar um array de forma rápida;

        Ex:
            range(1,10);
        
        Um array de 1 a 10 será criado, podemos 
        atribuir este valor a uma variável

    */

    // Array de índice de 0 a 9 e elementos de 1 a 10;
    $arr = range(1, 10);
    print_r($arr);

    echo "<br>";
    echo "<br>";

    // Array com 50 elementos e 45 índices
    $arr2 = range(5, 50);
    print_r($arr2);
    
    echo "<br>";
    echo "<br>";

    // 3º argumento define o passo do array
    $arr3 = range(0, 1000, 100);
    print_r($arr3);
?>