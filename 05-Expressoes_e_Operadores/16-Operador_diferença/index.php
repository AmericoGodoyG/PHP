<?php 
    /*
        * * * Operador de diferença * * *
        
        Com o operador de diferença verificamos se um valor é diferente de outro

        Simbolo: !=
        
        Ex: 5 != 5 (false)
        Ex: 10 != 5 (true)
    */

    $a = 3;
    $b = 4;

    if ($a != $b) { //true
        echo "Testando diferença 1 <br>";
    }

    if ($a != 3) { //false
        echo "Testando diferença  2 <br>";
    }
   
    if ($a != "teste") { //true
        echo "Testando diferença 3 <br>";
    }
  
    if (3 != "3") { // false
        echo "Testando diferença 4 <br>";
    }
    
    if (3 != "4") { // true
        echo "Testando diferença  5 <br>";
    }
?>