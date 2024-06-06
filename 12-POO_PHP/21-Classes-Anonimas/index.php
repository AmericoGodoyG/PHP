<?php 
    /*
        * * * Classes anônimas * * *

        As classes anônimas são criadas em uma variável
        e não possuem nome;


        Elas funcionam como qualquer outra classe

        Precisamos fechar ela com ";"

        Ex:

            $anonima = new class() {}

    */

    $pessoa = new Class() {

        public $nome = "Américo";

        public function dizerNome() {
            echo "Olá meu nome é {$this->nome} <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();

?>