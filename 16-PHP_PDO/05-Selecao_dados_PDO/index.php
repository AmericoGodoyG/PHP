<?php 
    /*
        ==============================================================
            * * * SELECIONANDO DADOS COM PDO (SELECT) * * *
        ==============================================================
        - Para atualizar a abordagem também é parecida com myslqli

        - Vamos seguir com a sequencia: prepare => bindParam => execute

        - Porém para o resgate dos dados temos dois métodos:

        fetch(): recebe apenas a primeira ocorrência;
        fetchAll(): recebe todos os dados;
    */

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host = $host; dbname = $db", $user, $pass);

    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
       print_r($data);
    echo "</pre>";


    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
        print_r($itens);
    echo "</pre>";

?>