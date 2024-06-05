<?php 
    /*
        * * * Declarando propriedades * * *
        
        Para declarar propriedades vamos basicamente
        criar uma variável dentro de uma class

        Porém precisamos definir sua visibiliade, como
        por exemplo public;

        Uma propriedade pública pode ser acessada fora 
        do escopo do objeto;

        Ex:

            public $idade = 29;

    */

    // Defnindo uma classe carro.
    class Car {

        // Criando as propriedades de suas visibilidades;
        public $rodas; // propriedade vazia.
        public $aro = 20;
        public $cor = "Vermelha";


        // Definindo um método
        function ligar(){

            echo "Vruumm <br>";

        }
        
    }

    // Instanciando um objeto a partir da classe Car
    $ferrari = new Car;

    // Definindo o valor da propriedade fora da classe 
    $ferrari->rodas = 4;

    // Exibindo as propriedades do objeto $ferrari
    echo $ferrari->aro . '<br>';
    echo $ferrari->rodas . '<br>';

    // Alterando o valor da propriedade cor do objeto $ferrari.
    $ferrari->cor = "Azul";

    // Exibindo o novo valor da propriedade cor do objeto $ferrari
    echo $ferrari->cor;

    // Chamando o método ligar() do objeto $ferrari
    $ferrari->ligar();
?>