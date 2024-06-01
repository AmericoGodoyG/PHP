<?php 
    /*
        * * * Buscando em arrays * * *

        A função in_array() verifica se um item 
        passado por parâmetro está no array;

        O retorno é true se encontrar o item 
        e false se não encontrar;

        Vamos passar dois argumentos para a 
        função.

        Ex: 
            in_array("item", $arr);

    */
    
    $arr = ['Banana', 'Maçã', 'Batata', 'Pêra', 'Mamão'];

    $itemLista = "Banana";

    if (in_array($itemLista, $arr) == true) { // True.

        for ($i = 0; $i < count($arr); $i++) {

            if ($arr[$i] === $itemLista) {

                echo 'O item '. $arr[$i] . ' existe no array!';

            }

        }

    } else {

        echo "Item {$itemLista} não encontrado! <br>";

    }
    
?>
