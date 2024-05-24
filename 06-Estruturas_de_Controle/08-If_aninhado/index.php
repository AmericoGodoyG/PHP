<?php 
    /*
        * * * If aninhado * * *

        Podemos inserir um if dentro de outro;

        NESTE caso o bloco precisa ficar dentro do primeiro if;

        Ex: 
        if (exp1) {
            if (exp2) {

            }
        }
    */



    if (10 > 2) {

        echo "Entrou no primeiro if <br>";

        if ("teste" === "teste") {

            echo "Entrou no segundo if <br>";

        }
    }


 
    if (10 > 2) {

        echo "Entrou no primeiro if 2<br>";

        if ("teste" != "teste") {

            echo "Entrou no segundo if 2<br>";

        } else {

            echo "Entrou no segundo else 2 <br>";
            
        }
    }


    
    if (10 < 2) {

        echo "Entrou no primeiro if 3<br>";

        if ("teste" != "teste") {

            echo "Entrou no segundo if 3<br>";

        } else {

            echo "Entrou no segundo else 3 <br>";

        }

    } else {

        echo "Entrou no primeiro Else <br>";

    }



    //Escopo global também valem para if aninhados.
    $escopo = 10;
    
    if (10 > 2) {

        echo "Entrou no primeiro if 4 <br>";

        //Variável acessível fora e dentro dos if's.
        $escopo2 = 20;

        if ("teste" == "teste") {

            echo "Entrou no segundo if 4 <br>";
            echo $escopo;

        } else {

            echo "Entrou no segundo else 4 <br>";

        }

    } else {

        echo "Entrou no primeiro Else <br>";

    }
?>