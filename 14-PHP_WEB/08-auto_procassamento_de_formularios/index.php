<?php
    /*
        * * * Autoprocessamento de páginas * * *

        Podemos criar uma página que faz o processamento
        dos dados e também exibe o input de informações

        Para isso devemos criar um if que checa se o método
        de requisição ($_SERVER['REQUEST_METHOD']) é GET ou POST

        Depois criar as duas variações, para cada uma das possibilidades

        Ou checar se algum parâmetro veio pela requisição e então criar
        as variações.
    */

    // Exibe o tipo de resquisição
    echo $_SERVER['REQUEST_METHOD'];

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])) {

        $nome = $_POST['nome'];

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
        <!-- 
            Caso a requisição seja do método GET é solicitado as
            informções para o 
        -->
        <?php if($method == 'GET'): ?>
            
            <fieldset>

                <form action="index.php" method="POST">
                    <div>
                        <input type="text" name="nome" placeholder="Digite seu nome:">
                    </div>

                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                </form>

            </fieldset>

        <?php else: ?>

            <!-- Exibe o topo de informação presen -->
            <? echo $_SERVER['REQUEST_METHOD']; ?>
            
            <h3>O seu nome é <?= $nome ?> </h3>

        <?php endif; ?> 

    </body>
</html>