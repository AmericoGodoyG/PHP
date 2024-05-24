<?php 
    /*
        * * * Verificando se a chave existe * * *
        
        Com a função array_key_exists() podemos verificar
        se há um valor em uma respectiva key de um array;

        Podemos fazer essa checagem em um if;

        Ex:

            array_key_existis("nome", $arr);
        

        Outra função que podemos utilizar  para este fim
        é a isset();

        Obs: O isset() também verifica se uma variável 
        está declarada e é diferente de null.
    */


    // Array associativo 'chave' => 'valor'
    $arr = [
        'nome' => 'Américo',
        'idade' => 25
    ];


    // Verificando se a chave de um array existe.
    if (array_key_exists('idade', $arr)) { // true

        echo "A chave existe! <br>";

    } else {

        echo "A chave não existe <br>";

    }


    // Verificando se a chave de um array existe.
    if (array_key_exists('profissao', $arr)) { // false

        echo "A chave existe! <br>";

    } else {

        echo "A chave não existe! <br>";

    }


    // Verificando a existencia de uma chave com o ISSET();
    if (isset($arr['nome'])) { // true

        echo "A chave existe! ISSET <br>";

    } else {

        echo "A chave não existe! ISSET <br>";

    }
    
    

    if (isset($arr['teste'])) { // false

        echo "A chave existe! ISSET <br>";

    } else {

        echo "A chave não existe! ISSET <br>";

    }
    


    $x = 0;
    
    if (isset($x)) { // true

        echo "A var existe! ISSET <br>";

    } else {

        echo "A var não existe! ISSET <br>";

    }

?>