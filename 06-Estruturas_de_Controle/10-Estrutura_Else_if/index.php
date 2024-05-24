<?php 
    /*
        * * * Else if * * *

        Com o else if podemos criar um novo bloco de expressão;

        Este bloco será executado caso o primeiro if seja falso;

        O else if fica entre o if else;

        Ex:

        if (exp1) {
            

        } else if (exp2) {


        }   
    */
    


    if (10 > 5) { // true

        echo "entrou no if 1 <br>";

    } else if ( 10 > 6) { // true

        echo "Entrou no else if 1 <br>";

    }
   
    if (10 < 5) { // false

        echo "entrou no if 2 <br>";

    } else if ( 10 > 6) { // true

        echo "Entrou no else if 2 <br>";
        
    }


   
    if (10 < 5) { // false

        echo "entrou no if 3 <br>";

    } else if ( 10 < 6) { // false

        echo "Entrou no else if 3 <br>";

    } else {

        echo "Entrou no else 3 <br>";
        
    }
   


    if (10 < 5) { // false

        echo "entrou no if 4 <br>";

    } else if ( 10 < 6) { // false

        echo "Entrou no else if 4 <br>";

    } else if (11 > 1) { // true
        
        echo "Entrou no else if 2 4 <br>"; 

    } else {

        echo "Entrou no else 4 <br>";

    }



    $a = 10;
    $b = 5;
    $msg = "Entrou no else if";

    if (10 < 5) { // false

        echo "entrou no if 4 <br>";

    } else if ($a > $b) { // true

        echo $msg . "<br>";

    } else if (11 > 1) { // true
        
        echo "Entrou no else if 2 4 <br>"; 

    } else {

        echo "Entrou no else 4 <br>";

    }
?>