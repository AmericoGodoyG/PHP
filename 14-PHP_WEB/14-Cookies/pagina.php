<?php

    if (isset($_COOKIE['nome'])) {
    
        $nome = $_COOKIE['nome'];
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página</h3>
    <a href="index.php">home</a>
    <?php if ($nome != ""): ?>
        <p> Seja bem vindo <?= $nome ?> </p>
    <?php endif;?>
    
</body>
</html>