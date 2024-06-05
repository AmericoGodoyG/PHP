<?php 
    /*
        * * * Construtores * * *

        Pelos construtores podemos inicializar
        objetos com valores de propriedades únicos
        para cada objeto 

        Passamos como argumento os valres das propriedades

        Ex: 

            function __construct($portas, $motor, $teto_solar) {

            }

        Obs: Os valores que vem por parâmetros irão preencher
        os valores das propriedades do objeto.
    */

    class Car {

        public $portas;
        public $cor;
        public $marca;

        // Definindo os valores das propriedades que virão por parâmetro.
        function __construct($portas, $cor, $marca) {

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }
        
    }

    
    /* 
        Inserindo os parâmetros na instância do objeto.
        Logo, esse parâmetros serão as propriedades do objeto $ferrari
    */
    $ferrari = new Car(4, 'Vermelha', 'Ferrari');
    echo "O carro é da marca {$ferrari->marca} e a cor é {$ferrari->cor} <br>";

    $bmw = new Car(4, "Verde", "BMW");
    echo "O carro é da marca {$bmw->marca} e a cor é {$bmw->cor} <br>";
?>