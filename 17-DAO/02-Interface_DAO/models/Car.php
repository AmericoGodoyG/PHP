<?php 

    // Representando a estrutura da tabela Car presente no db
    class Car {

        private $id;
        private $brand;
        private $km;
        private $color;


        // GET => OBTER
        public function getId() { 
            return $this->id;
        }
        
        public function getBrand() { 
            return $this->brand;
        }
        
        public function getKm() {
            return $this->km;
        }

        public function getColor() { 
            return $this->color;
        }


        // SET => DEFINIR
        public function setId($id) { 
            $this->id = $id;
        }

        public function setBrand($brand) {
            $this->brand = $brand;
        }


        public function setKm($km) {
            $this->km = intval($km); // converte o valor para INT
        }

        public function setColor($color) { 
            $this->color = $color;
        }

    }

    interface CarDAOInterface {

        //Criar um registro no banco
        // Classe recebe um obj $car para ser criado
        public function create(Car $car);

        // Resgata todos os dados sem filtro
        public function findAll();

    }