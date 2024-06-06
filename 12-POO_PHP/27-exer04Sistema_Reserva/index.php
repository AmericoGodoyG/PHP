<?php 
    class Passenger {

        public $name;
        public $age;
        public $seatNumber;

        public function __construct($name, $age, $seatNumber)
        {
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }
        
        public function getSeatNumber(){
            return $this->seatNumber;
        }
        
        public function setSeatNumber($seatNumber) {
            $this->seatNumber = $seatNumber;
        }

    }

    $passengerOne = new Passenger("Américo", 25, 27);
    echo "Passenger name: {$passengerOne->name} <br>";
    echo "Age: {$passengerOne->age} <br>";
    echo "Seat number: {$passengerOne->seatNumber} <br><br>";

    echo " === Alterando asscento === <br>";
    $passengerOne->setSeatNumber(16);
    echo "New seat number: {$passengerOne->getSeatNumber()} <br>";

?>