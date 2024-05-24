<?php 
    /*
        * * *  Retorno de funções  * * *

        Funções retornam algo, para isso utilizamos a instrução return;

        O objetivo é armazrnar o valor de retorno em uma variável e 
        utilizá-lo posteriormente no código;

        Sintaxe:

            function nome(a, b) {

                return algumaCoisa;

            }

        Return é usado para obtermos o resultado do processamento de algo
        dentro de uma função

    */


    function soma($n1, $n2){

        // Retorna o procesamento para uma variável de escopo global
        return $n1 + $n2;

    }

    $x = soma(2, 4);

    echo $x . "<br>";

    $y = soma($x, 9);

    echo $y . "<br>";



    function testeRetorno() {

        // Retorna o procesamento para uma variável de escopo global
        return "Testando";

    }

    $z = testeRetorno();

    echo $z . "<br>";

?>