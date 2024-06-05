<?php 
    /*
        * * * Classes abstratas * * *
        
        As classes abstratas não podem ser instanciadas

        Podemos ter métodos abstratos, que devem ser implementados
        obrigatóriamente se uma classe herdar a abstrata

        A palavra reservada tanto para classe como para métodos
        é abstratact

        Ex: 

            abstract class ClasseAbstrata{}

        
        Obs: Classes abstratas não podem ser instanciadas através
        de objetos, e toda classe que herda de uma abstata deve conter
        os métodos da classe abstrata herdada.
    */

    // Classe abstrata
    abstract class Teste {

        public static function testandoClasse() {

            echo 'Este método é de uma classe abstrata <br>';

        }

        abstract public function testeAbs();

    }

    // Acessndo o um método estático de uma classe abstrata
    Teste::testandoClasse();

    class Nova extends Teste {

        public function testeAbs()// método herdado da classe Teste()
        {
            echo 'Teste método abstarto <br>';
        }

    }

    $n = new Nova;

?>