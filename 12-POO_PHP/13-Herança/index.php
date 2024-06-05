<?php
    /*
        * * * Herança * * *
        
        A herança é o recurso da POO que dá
        a possibilidade de uma classe herdar
        métodos e propriedades de outra

        A palavra reservada é extends

        Ex:

            class Programador extends Pessoa {


            }
    */

    class Humano {

        public $idade = 25;

        // Métodos
        public function falar() {

            echo "Olá Mundo! <br>";

        }

        private function gritar() {

            echo 'GRITANDO <br>';

        }

        // Método público acessa o método private gritar()
        public function acessarGritar() {

            $this->gritar();

        }

        // Metodos protected não são possíveis de acessar fora da classe.
        protected function falarBaixo() {

            echo 'falando baixo <br>';

        }


        // Método publico que acessa a o método protected
        public function acessaFalarBaixo() {

            $this->falarBaixo();

        }

    }


    class Programador extends Humano {

        public function acessaFalarBaixoProgramador() {

            $this->falarBaixo();

        }

    }

    echo "<h3> PessoaUm </h3>";

    $pessoaUm = new Humano;
    $pessoaUm->falar(); // método público
    $pessoaUm->acessarGritar(); // método público que acessa um método private
    $pessoaUm->acessaFalarBaixo(); // // método público que acessa um método protected
    
    echo "<br>";

    echo "<h3> PessoaDois </h3>";
    $pessoaDois = new Programador;
    echo "Idade: {$pessoaDois->idade} <br>";
    $pessoaDois->acessarGritar();
    $pessoaDois->acessaFalarBaixoProgramador();
