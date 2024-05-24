<?php 
    /*
    O boolean é um tipo de dados que só possui dois valores:
        True - verdadeiro;
        False - falso;
        Alguns valores são considerados falsos: 0, 0.0, "0", [], NULL;
    */

    echo true . "<br>"; //Imprime o valor 1

    echo false; // Nada é exibido

    if (true) {
        echo " é verdadeiro! <br>";
    }
  
    echo "5 > 2: <br>";
    if (5 > 2) {
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;
    if($podeEntrar) {
        echo "O usuário pode entrar!<br>";
    }
?>