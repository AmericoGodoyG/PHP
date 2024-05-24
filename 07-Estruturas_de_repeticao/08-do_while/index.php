<?php 
    /*
        * * * Do While * * *

        Do while é uma estrutura de repetição;

        Executa um bloco de código enquanto 
        a condição for verdadeira.

        Sintaxe: 

        do {
            
            código;

        } while (condicao);
    */


    $j = 0;

    $teste = "Américo";

    do {

        echo "Testando do while $j <br>";

        if ($j == 2) {
            echo "Américo <br>";

        }
        $j++;

    } while ($j < 10);
  



    echo "<br>";




    $i = 10;

    do {
        echo "Testando do while (2) $i <br>";
        
        $i--;

    } while ($i > 0);

?>