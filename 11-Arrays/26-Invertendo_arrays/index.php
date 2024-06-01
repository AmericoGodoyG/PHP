<?php 
    /*
        * * * Invertendo arrays * * *
        
        Com a função array_reverse() podemos
        obter o array ao inverso

        Passamos apenas o array como argumento

        O retorno será um array invertido do 
        original.

        Obs: A função array_reverse() não altera
        a estrutura original, apenas retotna o valor
        inverso. Caso queira utilizar, deve-se 
        salvar o valor retornado em uma novo array.
    */


    $arr = [1, 2, 3, 4, 5];

    // Salvando o valor retornado em um array.
    $arrInvertido = array_reverse($arr);

    print_r($arr);
    echo "<br>";
    
    print_r($arrInvertido);
    echo "<br>";

    // Não importa o tipo de dado, a função irá inverter o array.
    $arr2 = ["Américo", 12, true, [1,2]];
    $arrInvertido2 = array_reverse($arr2);
    print_r($arrInvertido2);

?>