<?php 
    /*
        ==============================================================
        |     * * * INSERINDO DADOS COM PDO (CREATE) * * *
        ==============================================================
        - Em PDO vamos utilizar uma abordagem parecida com o mysqli;

        -Utilizaremos o método prepare para relizar a query com prepared
        statements

        - Depois bind_param para estabelecer os valores dos parâmetros;

        - Por fim execute fará a execução da query;

        $stmt = $con->prepare("INSERT INTO x(a,b) VALUES (?,?)");
    */

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Suporte Monitor";
    $descricao = "O suporte está novo!";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();
?>