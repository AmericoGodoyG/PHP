<?php 
    /*
        * * * Função strtotime * * *
        
        Recebe uma string como parâmetro,
        que é um texto sinalizando tempo

        A função tenta interpretar e transformar
        em data

        Veja um exemplo de utilização

        echo date('d/m/y', strtotime('+2 years'));
    */

    echo date('D/M/Y', strtotime('+2 years')) . '<br>';

    $cincoDias = strtotime('5 days');
    echo $cincoDias . '<br>';
  
    $dezDias = strtotime('10 days');
    echo $dezDias . '<br>';

    $dataAtualMaisCinco = date('d/m/y', $cincoDias);
    echo $dataAtualMaisCinco . '<br>';

    $dataAtualMaisDez = date('D/M/Y', $dezDias);
    echo $dataAtualMaisDez . '<br>';


    $doisMeses = strtotime('2 months');
    echo $doisMeses . '<br>';

    $dataAtualMaisDoisMeses = date('d/M/Y', $doisMeses);
    echo $dataAtualMaisDoisMeses . '<br>';
?>