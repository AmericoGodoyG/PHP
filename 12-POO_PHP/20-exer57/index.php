<?php 

    class Cachorro {

        public $nome;
        public $raca;
        public $peso;
        public $cor;

        function __construct($nome, $raca, $peso, $cor) {
            
            $this->nome = $nome;
            $this->raca = $raca;
            $this->peso = $peso;
            $this->cor = $cor;

        }

        public function exibirDadosAnimal() {

            echo "Nome: {$this->nome} <br>";
            echo "Raça: {$this->raca} <br>";
            echo "Peso: {$this->peso} Kg <br>";
            echo "Cor: {$this->cor} <br>";
            
        }

    }

    // Instanciando com dados diretos
    $cachorroUm = new Cachorro('Lolita', 'Vira-Lata', 13, "Caramelo");
    $cachorroUm->exibirDadosAnimal();

    echo '<br>';

    $nome = 'Tubarão';
    $raca = 'PittBull';
    $peso = 22;
    $cor = 'Marrom';

    // Instanciando com variáveis
    $cachorroDois = new Cachorro($nome, $raca, $peso, $cor);
    $cachorroDois->exibirDadosAnimal();

?>