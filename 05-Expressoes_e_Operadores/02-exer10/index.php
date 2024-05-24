<?php 
    //Calculadora

    //Funcao Soma.
    function soma ($a, $b) {
        echo $a + $b;
    }

    //Funcao Multiplicação.
    function multiplicacao ($a, $b) {
        echo $a * $b;
    }


    //Funcao Divisao.
    function divisao ($a, $b) {
        echo $a / $b;
    }

    //Inserindo valores às variáveis a e b.
    $a = 10;
    $b = 2;

    //Exeibe a soma. 
    soma($a, $b);

    echo "<br>";

    //Exeibe a mutiplicacao
    multiplicacao($a, $b);

    echo "<br>";

    //Exeibe a divisao.
    divisao($a, $b);

    echo "<br>";

    //Exeibe a divisao de numeros inseridos como parâmetros.
    divisao(50, 5);

?>