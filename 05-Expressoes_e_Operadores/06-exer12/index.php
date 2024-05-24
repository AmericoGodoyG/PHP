<?php
    //var 
    $primeiroNumero = 10;
    $segundoNumero = 50;

    //Funções com operadores matemáticos.
    function adicao ($a, $b) {
        $adicao = $a + $b;
        echo "$adicao <br>";
    }

    function subtracao ($a, $b) {
        $subtracao = $a - $b;
        echo "$subtracao <br>";
    }

    function multiplicacao ($a, $b) {
        $multi = $a * $b;
        echo "$multi <br>";
    }

    function divisao ($a, $b) {
        $divisao = $a / $b;
        echo "$divisao <br>";
    }
    
    //chamando as funções
    adicao($primeiroNumero, $segundoNumero);
    subtracao($primeiroNumero,$segundoNumero);
    multiplicacao($primeiroNumero,$segundoNumero);
    divisao($primeiroNumero,$segundoNumero);

?>