<?php
    /*
        * * * Teste de formulários com POST * * *
        
        - Criando um formulário e definindo o método
        como POST, e também o arquivo ou rota que vamos
        acessar em action

        No lado do servidor vamos acessar a variável $_POST
        que contém os parâmetros enviados para o servidor

        Faremos o processamento e retornamos algo para o 
        usuário
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário POST</title>
</head>
<body>
    <fieldset>
        <form action="cadastro.php" method="POST">
            <div>
                <input type="text" name="marca" placeholder="Marca do carro"/>
            </div>
            <div>
                <input type="checkbox" name="opcionais[]" value="Teto Solar"/> Teto Solar
            </div>
            <div>
                <input type="checkbox" name="opcionais[]" value="Película"/> Película
            </div>
            <div>
                <input type="checkbox" name="opcionais[]" value="Blindado"/> Blindado
            </div>
            <div>
                <input type="text" name="preco" placeholder="Preço do carro"/>
            </div>
            <div>
                <input type="submit" value="Enviar"/>
            </div>
        </form>
    </fieldset>
</body>
</html>