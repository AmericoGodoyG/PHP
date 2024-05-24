<?php 
    /*
        * * *  Adicionando dados a um array  * * *
        
        Podemos criar novos índices com dados em um 
        array;

        Basta por o nome do array com o novo índice
        em colchetes e atraibuir um valor;

        Ex:

            $arr[1] = "teste";

        E em arrays associativos basta utilizar o nome 
        da nova chave com a atribuição de valor.
    */


    // Adicionando valores;
    $arr = [];
    print_r($arr);
    echo "<br>";

    $arr[0] = 10;
    print_r($arr);
    echo "<br>";

    $arr[1] = 15;
    print_r($arr);
    echo "<br>";

    $arr[5] = 25;
    print_r($arr);
    echo "<br>";

    // Modificando valores
    $arr[1] += 55;
    print_r($arr);
    echo "<br>";
    
    // Modificando valores em um array associativo
    $arrAssoc = [];

    $arrAssoc["carro"] = "BMW";
    print_r($arrAssoc);
    echo "<br>";
    
    $arrAssoc["aviao"] = "boeing";
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["carro"] = "Ferrari";
    print_r($arrAssoc);
    echo "<br>";
    
?>