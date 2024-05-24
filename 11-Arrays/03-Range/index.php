<?php 
    /*
        * * *  Criar array rapidamente  * * *
        
        Podemos utilizar a função range() para criar
        um array de forma rápida; 

        Ex:
            Cria um array com 10 delementos de 1 a 10
            range(1,10);

        Um array de 1 a 10 será criado, podemos atribuir
        este valor a uma variável;
    */


    // Criando um array a partir da função range();
    // Array com 10 elementos começando a partir di índice 0.
    $arr = range(1, 10);
    print_r($arr);
    echo "<br>";

    $arr = range(1, 10);
    print_r($arr);
    echo "<br>";

    $arr2 = range(5, 50);
    print_r($arr2);
    echo "<br>";

    // O 3º parâmetro da função define o passo do array.
    $arr3 = range(0, 1000, 100);
    print_r($arr3);
    echo "<br>";


?>