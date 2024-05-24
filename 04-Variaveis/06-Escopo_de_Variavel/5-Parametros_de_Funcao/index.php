<?php 
    /*
        Parâmetros de Função

        Considerados tipos de variáveis;
        Criar funções com valores dinâmicos;
        Podendo altera-los a cada invocação da mesma;
        Podemos passar mais de um parâmetro uma função;

    */

    // Criando a var $a e $b por escopo de parâmetro.
    function soma ($a, $b) {

        //Exibindo as variáveis que já vem por parâmetro.
        echo $a + $b;
        echo "<br>";

    }

    //Chamando a funcção soma() e atribundo valores como parâmetros da função.
    soma(2, 4);
    soma(6, 8);
    soma(10, 10);

?>