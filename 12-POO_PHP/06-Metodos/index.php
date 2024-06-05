<?php 
    /*
        * * * Declarando métodos * * *

        Para declarar um método vamos utilizar
        a sintaxe de function, porém dentro de 
        uma class

        O restante é exatamente igual a sintaxe
        de função

        Podemos retornar ou imprimir dados, dependendo
        da nossa regra de negócio.
    */ 

    class Pessoa {

        // métodos
        function falar() {
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($x, $y){

            echo $x + $y . '<br>';

        }

    }

    $americo = new Pessoa;
    $americo->falar();

    $joao = new Pessoa;
    $joao->falar();

    $americo->somar(10, 12);

    $joao->somar(4, 6);