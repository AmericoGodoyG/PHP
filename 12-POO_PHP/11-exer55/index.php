<?php 

    class Carro {

        public $marca;
        public $nome;
        public $ano;
        public $cor;
        public $velocidadeMaxima;

        // Define a velocidade máxima do veículo (set: definir)
        function setVelocidadeMaxima($velocidade) {

            $this->velocidadeMaxima = $velocidade;

        }

        // Exibe a valocidade máxima do veículo (get: pegar)
        function getVelocidadeMaxima () {

            echo "A velocidade máxima do carro é de {$this->velocidadeMaxima} km/h <br>";

        }

    }

    $carroUm = new Carro;

    $carroUm->marca = "BMW";
    $carroUm->nome = "BMW X6 Competition";
    $carroUm->ano = "2024";
    $carroUm->cor = "Cinza";

    // Definindo a velocidade máxima do objeto $carroUm
    $carroUm->setVelocidadeMaxima("330");

    // Exibe a valocidade máxima do veículo
    $carroUm->getVelocidadeMaxima();

?>