<?php
    /*
        * * * Objetos * * * 
        PHP possui o paradigma de POO,
        Podemos criar classes e objetos, 
        Objeto é um de dado
         - Possuem propriedades (caracteristicas) e métodos (ações)
    */

    //Criando uma classe Pessoa
    class Pessoa {

        //Propriedade (caracteristica)
        public string $nome;

        //Método (ação) da classe Pessoa 
        function falar () {
            echo "Olá pessoal";
        }

    }

    //Criando um Objeto a partir da classe Pessoa
    $americo = new Pessoa();
    $americo->nome = "Américo";

    echo $americo->nome;

    echo "<br>";

    $americo->falar();
?>
?>