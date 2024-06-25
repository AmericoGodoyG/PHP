<?php 

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    echo "<pre>";
        print_r($conn);
    echo "</pre>";

    // Função myslqi_connect_error();
    // Propriedade connect_errno: verifica se houve erro de conexão.

    // Forma OO de exibir o erro.
    if($conn->connect_errno) {

        echo "Erro na conexão! <br>";
        echo "Erro: " . $conn->connect_error;

    }




?>