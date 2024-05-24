<?php 

    /*
        * * * Depuração de valores * * *

        Utilizamos duas funções para verificar dados formatados:

        print_r e var_dump;

        Ambas apresentam os dados de forma semelhante;

        var_dump exibe de uma forma "human readable".

    */

    $arr  = [
        "Teste",
        123,
        12393.45843,
        true,
        [1,2,3]
    ];

    print_r($arr);

    echo "<br>";

    var_dump($arr);
?>