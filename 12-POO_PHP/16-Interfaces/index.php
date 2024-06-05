<?php 
    /*
        * * * Interfaces * * *

        As interfaces criam um modelo de
        definição de uma classe

        Então toda classe que implementar 
        um interface, deverá implementar 
        também suas propriedades e métodos,
        obrigatóriamente

        A plavra reservada é implments

        Ex: 

            class Humano implements Caracteristicas
    */

    interface Caracteristicas {

        const NOME = "Américo Godoy";

        public function falar();

    }


    class Humano implements Caracteristicas {

        public $idade = 25;


        public function falar(){

            echo 'Olá Mundo! <br>';

        }
        

        public function dizerNome() {

            echo 'Meu nome é ' . self::NOME . '<br>';

        }

    }

    $americo = new Humano;
    $americo->falar();
    $americo->dizerNome();

?>