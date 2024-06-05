<?php 
    /*
        * * * Conhecendo o $this * * *

        O $this se refere a instância atual do objeto

        Podendo assim alterar um valor de uma propriedade
        do objeto com:    $this->propriedade = "x";

        Tradução literal = este

        Podemos invocar um método do objeto com $this também

        Obs: $this refere-se ao próprio objeto. É possível 
        invocar propriedades e métodos usando o $this.
    */

    class Animal {

        // Definindo a propriedade nome;
        public $nome;


        /*
            Esté método define um nome que virá como parâmetro da função
        */
        function escolherNome($nome) {

            $this->nome = $nome;

        }


        function latir() {

            return "Au Au <br>";
            
        }
        
        
        function latirForte() {

            return strtoupper($this->latir());

        }

    }


    $cachorro = new Animal;

    echo "O nome do animal é {$cachorro->nome} <br>";

    // Definindo o nome do objeto cachorro invocando o método escolherNome();
    $cachorro->escolherNome("Lolita");

    echo "O nome do animal é {$cachorro->nome} <br>";

    echo $cachorro->latir();
    echo $cachorro->latirForte();
?>