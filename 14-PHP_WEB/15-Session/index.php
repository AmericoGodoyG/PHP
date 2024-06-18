<?php 
    /*
        * * * Sessions * * *

        Com session podemos criar uma variável que persiste em diferentes 
        páginas e também perdura por várias visitas ao mesmo site

        A session utiliza recursos de cookies para seu funcionamento,
        e se o recurso estiver desabilitado propaga a sessão via URL

        Sessions são utilizadas para: autenticação, carrinho de compras
        e tudo o que precisa persistir de página em página

        Acaba sendo o recurso mais utilizado, comparando o com o cookie


        

        * * * Onde são salvas as session? * * *
        
        As sessions são salvas em arquivos no computador que estamos ou
        no servidor da aplicação

        O caminho para onde os arquivos são salvos fica em php.ini na
        configuração sessions.save_path

        As sessions podem ser salvas em dois formatos: o próprio do PHP
        e também o Web Distributed Data eXchange (WDDX); 
    */

    // Inicializando a session
    session_start();

    // Inserindo um nome na chave de session
    $_SESSION['nome'] = "Matheus";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h3>Olá Session</h3>
    <a href="pagina.php">link</a>
</body>
</html>