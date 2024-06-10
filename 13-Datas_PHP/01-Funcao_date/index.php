<<?php 
    /*
        * * * Função date * * *

        A função date recebe um parâmetro,
        que é o formato data, e este é o 
        primeiro parâmetro da mesma

        A resposta será a data atual

        Ex:

            date("d/m/y"); day/month/year

    */ 


    // Exibe a data atual em digitos
    $d = date('d/m/y');
    echo $d . '<br>';

    // Exibe o data de forma escrita
    $d2 = date('D/M/Y');
    echo $d2 . '<br>';

    // Exibe data e hora atuais
    $d3 = date('d/m/y H:i:s');
    echo $d3 . '<br>';

    // Exibe data atual no formato textual
    $d4 = date('l, d F Y');
    echo $d4 . '<br>';
?>
