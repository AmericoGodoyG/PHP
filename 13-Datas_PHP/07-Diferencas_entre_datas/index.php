<?php 
    /*
        * * * Diferenças entra datas * * *
        
        Podemos calcular a diferença entre 
        duas datas com método diff

        O resultado pode ser formatado com 
        format

        Ex: 

            $diferença = $dateA->diff($dateB);
    */

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(1999, 5, 8);


    print_r($dataA);
    echo '<br>';
    
    print_r($dataB);
    echo '<br>';


    $diferenca = $dataA->diff($dataB);

    echo "<pre>";
        print_r($diferenca);
    echo "</pre>";

    echo $diferenca->format('%a days');
?>