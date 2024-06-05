<?php 
    /*
        * * * Traits * * *

        As traits permitem o reuso de código
        sem hieraquia de classes, ou seja,
        sem herança

        Podemos assim utilizar os métodos da
        classe que foi feita a trait

        Utilizamos a palavra reservada use

        Ex: 

            trait Teste {

                use Classe Trait

            }
    */


    trait Objeto {

        public function teste() {

            echo 'Testando trait de objeto <br>';

        }

    }
    

    trait Testando {

        public $y = 10;

        public function traitNome() {
            
            echo 'Esse método é da trait Testando <br>';

        }
        
    }


    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;
    $x->teste();
    $x->traitNome();
    

?>