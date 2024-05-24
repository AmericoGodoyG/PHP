<?php
    /*
        * * *  Alterando o case  * * *
        
        Podemos alterar as strings para
        maiúsculas ou minúsculas com funções de PHP

        strtolower() - todas as letras minúsculas;

        strtoupper() - todas as letras maiúsculas;

    */

    $nome = "AMERICO";

    // transforma a strins em minusculo
    echo strtolower($nome);

    echo "<br>";

    $str = "hoje é dia 22/05/2024, quarta-feira";

    // trasnforma a string em maiúscula.
    echo strtoupper($str);

?>