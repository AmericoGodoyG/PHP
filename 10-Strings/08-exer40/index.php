<?php

    $str = "O rato roeu a roupa do rei de roma"; // 4 letras a

    $cont = 0;

    for ($i = 0; $i < strlen($str); $i++) {

        if ($str[$i] === "a") {
            $cont ++;
        }

    }

    echo "A quantidade de letras a na string é de $cont";

?>