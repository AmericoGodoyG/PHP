<?php 
    /*
        * * * Método format e modify * * *

        Os métodos format e modify são classes 
        DateTime e nos ajudam a manipular os dados
        nestes objetos

        format => Formata a data;

        modify => Altera a data;
    */

    $data = new DateTime();

    echo $data->format('d/m/y')  . '<br>';
    echo $data->format('D - M - Y') . '<br>';
    echo $data->format('l . F- Y') . '<br>';

    // data + 5 dias
    $data->modify('5 days');
    echo $data->format('d/m/y')  . '<br>';

    // data + 2 months
    $data->modify('+2 months');
    echo $data->format('d/m/y')  . '<br>';

    // data - 3 years
    $data->modify('-3 years');
    echo $data->format('d/m/y')  . '<br>';
?>