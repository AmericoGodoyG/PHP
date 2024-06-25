<?php 
    /*
        ==============================================================
        * * * INSERINDO DADOS COM PDO (UPDATE) * * *
        ==============================================================
        - Para atualizar a abordagem também é parecida

        - Vamos seguir com a sequencia: prepare => bindParam => execute

        - E então a query persistirá no banco

        Ex:

        $stmt = $conn->prepare("UPDATE tabela SET coluna = ?, novoValor = ? WHERE cláusula = ?");
    */

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

    $id = 4;
    $nome = "Teclado Microsoft";
    $descricao = "Teclado novo";

    $stmt = $conn->prepare(
       "UPDATE itens 
        SET nome = :nome, descricao = :descricao 
        WHERE id = :id"
    );

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();
?>