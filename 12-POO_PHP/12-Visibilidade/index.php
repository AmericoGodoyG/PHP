<?php
    /*
        * * * Visibilidade * * *

        Temos três formatos de visibilidade

        + public: A propriedade ou método pode ser acessada
        de qualquer forma;

        - protected: A propriedade ou método pode ser acessada
        apenas pela classe de origem ou as que recebem a mesma 
        de herança;

        # private: A propriedade ou método pode ser acessada 
        apenas pela classe que foi criada.
    */

    class Car {

        public $rodas = 4;

        protected $portas = 4;
        
        private $vidro = "Sem película";
        

        public function getPortas() {

            return $this->portas;

        }
        
        public function getVidro() {

            return $this->vidro;

        }
        
    }

    class Mecanico {

        public function alterarRodas($carro) {

            $carro->rodas = 10;

        }

        public function colocarPelicula($carro, $pelicula) {

            $carro->vidro = $pelicula;

        }

    }

    $carro = new Car;
    echo $carro->rodas . '<br>'; // exibe a propriedade roda

    $americo = new Mecanico;
    $americo->alterarRodas($carro); // altera a propriedada roda
    echo $carro->rodas . '<br>';

    // Não pode alterar pois a propriedade vidro é privada
    // $americo->colocarPelicula($carro, "G20");

    echo $carro->getVidro() . '<br>';
   
    echo $carro->getPortas() . '<br>';
