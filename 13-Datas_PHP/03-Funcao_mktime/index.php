<?php 
    /*
        * * * Função mktime * * *

        A função mktime recebe em seus parâmetros: 
        hora, minuto, segundo, mês, dia e ano

        Assim podemos criar uma data a partir desta 
        informação

        Ex:

        $date = mktime(01,08,00,03,12,2000);

        echo date('d/m/y', $date);
    */

    $dataNascimento = mktime(14, 55, 10, 5, 8, 1999);
    echo $dataNascimento . '<br>';

    echo date('D/M/Y', $dataNascimento) . '<br>';

 
?>