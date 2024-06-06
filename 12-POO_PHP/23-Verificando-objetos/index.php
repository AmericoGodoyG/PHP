<?php 
    /*
        * * * Verificando Objetos * * *

        Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;


        is_object() => verifica se uma variável é um objeto

        get_class() => verifica a classe de um objeto

        method_exists() => verifica se um método existe em um objeto;
    */

    class Humano {

        public function falar() {

            echo "Olá";

        }

    }

    $americo = new Humano;
    $teste = 10;

    // Verifica se a var é um objeto
    if (is_object($americo)) {

        echo "É um objeto <br>";

    } else {

        echo "Não é um objeto <br>";

    }


    if (is_object($teste)) {

        echo "É um objeto <br>";

    } else {

        echo "Não é um objeto <br>";

    }

    // Identifica a classe desse objeto
    echo get_class($americo) . '<br>';


    // Verificando a existência de um método
    if(method_exists($americo, "falar")) {
        
        echo "Este método existe <br>";
        
    } else {

        echo "Este método não existe <br>";

    }
    

    if(method_exists($americo, "asd")) {
        
        echo "Este método existe <br>";
        
    } else {

        echo "Este método não existe <br>";

    }

?>