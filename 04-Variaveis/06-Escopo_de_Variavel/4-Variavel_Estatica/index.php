<?php 
    /*
        * * * Variável  Estática * * * 
        A variável estática é declarada com a instrução static;

        O valor da mesma é mantido e alterado a cada execução de uma função;

        Diferente das variáveis locais que são sempre resatadas.

    * */

    //Função padrão.
    function teste () {

        $a = 0; 
        $a++;

        echo "$a <br>";
    }
    teste();
    teste();
    teste();

    echo "<br>";

    //Função com var $a com a instrução static.
    //Mantém o valor da variável.
    function testeStatic () {

        static $a = 0; 
        $a++; // incrementa 1 à var $a.

        echo "$a <br>";
    }

    testeStatic(); // var $a = 1;
    testeStatic(); // var $a = 2;
    testeStatic(); // var $a = 3;
?>