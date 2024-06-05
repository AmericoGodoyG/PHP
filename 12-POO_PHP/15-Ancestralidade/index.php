<?php

    /*
        * * * Checando ancestralidade * * * 

        instanceof é usado para determinar se um 
        variável do PHP é um objeto instânciado 
        de uma certa classe

        Para checar a ancestralidade de uma classe
        usamos o operador instanceof;

        Podemos inserir essa opção em um if, pois 
        vai retornar um booleano

        Ex:

            $objeto instanceof Humano
    */

    class Humano {

    }
    
    class Animal {

    }

    class Professor extends Humano {

    }


    $marcos = new Humano;
    $turca = new Animal;
    $pedro = new Professor;


    if ($marcos instanceof Humano) { // booleano == true

        echo "Marcos é um objeto da classe Humano <br>";

    } else {    // booleabo == false

        echo "Marcos não é um objeto da clsse Humano <br>";

    }



    if ($turca instanceof Humano) { // booleano == true

        echo "Turca é um objeto da classe Humano <br>";

    } else {    // booleabo == false

        echo "Turca não é um objeto da classe Humano <br>";

    }
    


    if ($pedro instanceof Professor) { // booleano == true

        echo "Pedro é um objeto da classe Professor <br>";

    } else {    // booleabo == false

        echo "Pedro não é um objeto da classe Professor <br>";

    }
    

    
    if ($pedro instanceof Humano) { // booleano == true

        echo "Pedro é um objeto da classe Humano <br>";

    } else {    // booleabo == false

        echo "Pedro não é um objeto da classe Humano <br>";

    }

?>