<?php 
    /*
        * * * Foreach e Arrays * * *

        Com o foreach podemos iterar arrays,
        e percorrer objetos

        Utilizando a notação de chave => valor,
        temos acesso rápido também a arrays associativos

        Ex:

            foreach ($itens as $key => value) {
            
                // code
            
            }
    */

    $pessoa = [
       'nome' => 'Américo',
       'idade' => 25,
       'profissao' => 'Desenvolvedor' 
    ];

    $pessoa2 = [
       'nome' => 'Bruna',
       'idade' => 22,
       'profissao' => 'Química' 
    ];
    

    // Exibe chave e valor do array
    foreach ($pessoa as $carac => $value) {

        echo "$carac => $value <br>";

    }


    // Exibe apenas os elementos do array
    foreach ($pessoa2 as $value) {

        echo "$value <br>";

    }

?>