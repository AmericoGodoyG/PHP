<?php 
    /*
        * * * Comparação de datas * * *

        Datas que foram criadas com o objeto 
        de DateTime podem ser comparadas utilizando
        os operadores de comparação 

        Operadores como: >, < ou ==

        Ex:

            $dataA > $dataB
    */

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2025, 10, 10);
    $dataC->setDate(2025, 10, 10);
    
    $dataB->setTime(01, 10, 10);
    $dataC->setTime(01, 10, 10);


    if ($dataB > $dataA) {
        echo 'A data B é maior que a data A <br>';
    }

    if ($dataA < $dataB) {
        echo 'A data A é menor que a data B <br>';
    }

    if ($dataB == $dataC) {
        echo "A data B é igual a data C <br>";
    }
    
?>