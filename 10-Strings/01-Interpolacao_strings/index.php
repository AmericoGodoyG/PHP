<?php
    /*
        * * *  Interpolando variáveis * * * 

        Interpolar: unir variáveis em strings.

        Podemos interpolar varáveis de duas formas:
            Utilizando aspas duplas e colocando a variável
            e também com chaves e o nome da variável.
        

        Não há diferença em ambas as formas;
        Ex:
            "Interpolando a variável $teste";
            "Interpolando a variável {$teste}";

         Obs: Usa-se apenas uma das sintaxes definidas no projeto.   
    */

    $nome = "Américo";
    $idade = 25;
    $profissao = "Desenvolvedor";

    //Interpolando com aspas duplas.
    echo "Eu tenho $idade anos, e atuo como $profissao <br>";

    //Interpolando com chaves.
    echo "Eu tengo {$idade} anos, e atuo como {$profissao} <br>";

?>