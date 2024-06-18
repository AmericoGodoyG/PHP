<?php

    print_r($_GET);

    // Verifica se as informações foram inseridas no $_GET['nome'];
    if (isset($_GET['nome'])) {

        $nome = $_GET['nome'];
        $idade = $_GET['idade']; 

    } else {

        $nome = 'Padrão';
        $idade = 'Padrão';

    }

?>

<h1> Seu nome é <?= $nome ?> </h1>
<h1> Sua idade é <?= $idade ?> </h1>