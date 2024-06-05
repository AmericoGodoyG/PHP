<?php

    class Humano {

        // Propriedades
        public $nome;
        public $idade;
        public $altura;
        protected $cpf;
        
        // Métodos
        public function falar() {
            echo "Falando...";
        }
        
        // Setters - definindo valores das propriedades
        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        // Getters - exibindo valores das propriedades
        public function getCpf(){
            return $this->cpf;
        }
    }


    class Professor extends Humano {

        private $ra_instituicao;
        private $materia;
        
        
        public function setRaInstituicao($raInstituicao) {
            $this->ra_instituicao = $raInstituicao;
        }

        public function setMateria($definirMateria){
            $this->materia = $definirMateria;
        }

        public function getRaInstituicao() {
            return $this->ra_instituicao;
        }

        public function getMateria() {
            return $this->materia;
        }

    }

    //Instanciando um objeto
    $professorUm = new Professor;
    $professorUm->nome = "Américo";
    $professorUm->idade ="25";
    $professorUm->altura = "1.82";

    $professorUm->setCpf("999.999.999-99");
    $professorUm->setRaInstituicao("2224388");
    $professorUm->setMateria("Algoritmos");
    

    echo "<h2> Professor </h2>";
    echo "Nome: {$professorUm->nome} <br>";
    echo "Idade: {$professorUm->idade} <br>";
    echo "Altura: {$professorUm->altura} <br>";

    echo "CPF: {$professorUm->getCpf()} <br>";
    echo "RA: {$professorUm->getRaInstituicao()} <br>";
    echo "Matéria: {$professorUm->getMateria()} <br>";
    $professorUm->falar();