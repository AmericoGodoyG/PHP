<?php 
    class Contact {

        public $name;
        public $email;
        public $phone;

        public function __construct($name, $email, $phone)
        {
           $this->name = $name; 
           $this->email = $email; 
           $this->phone = $phone; 
        }


        public function getName(){
            return $this->name;
        }


        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }

    }

    $contactOne = new Contact(
        "Américo Godoy", 
        "americogodoyFly@gmail.com", 
        "+1 3265505"
    );

    echo $contactOne->getName() . '<br>';
    echo $contactOne->getEmail() . '<br>';
    echo $contactOne->getPhone() . '<br>';

    // Alterando telefoen
    $contactOne->setPhone('+1 99999-9999');
    echo $contactOne->getPhone() . '<br>';
    $contactOne->setEmail("americojooj@gmail.com");
    echo $contactOne->getEmail() . '<br>';


?>