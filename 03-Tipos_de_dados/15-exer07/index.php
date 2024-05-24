<?php
    //Array Associativo Pessoa.

    $pessoa = [
        'nome'=>'Américo',
        'sobreNome'=>'Godoy da Siva',
        'dataNascimento'=>'08/05/1999',
        'idade'=>24,
        'altura'=>1.82,
    ];

    if ($pessoa['idade'] >= 18) {
        echo " Maior de idade";
    } else {
        echo "Menor de idade";
    }
?>