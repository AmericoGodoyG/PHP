<?php 
    /*
        * * * Verificando classes * * *

        Em PHP temos alguns métodos que nos
        ajudam a entender as classes

        class_exists() => Verifica se uma classe existe

        get_class_methods() => Verifica os métodos de uma classe

        get_class_vars() => mapeamento das propriedades de uma classe
    
    */

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar(){}
        public function andar(){}

    }

    // Verifica a existencia de uma classe
    if (class_exists("Humano")) {
        echo "A classe Humano existe! <br>";
    } 
    
    if (class_exists("Cachorro")) {
        echo "A classe Cachorro existe! <br>";
    } else {
        echo "A classe Cachorro NÃO existe! <br>";
    }

    // Retorna um array com todas as propriedades de uma classe
    print_r(get_class_vars("Humano"));

    // Retorna um array com todos os métodos de uma classe
    print_r(get_class_methods("Humano"));
?>