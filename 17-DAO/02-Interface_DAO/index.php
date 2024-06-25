<?php 

    /*
    ==============================
        * * * O que é DAO * * *
    ==============================
        Normalmente também é criada um interface para o DAO

        Esta interface molda a classe DAO, definindo seus métodos

        Desta maneira temos um esqueleto para seguir e implementar
        a classe que vai mainupar o banco de dados

        Os métodos principais da interface são pelo menos os que 
        constituem o CRUD

        A interface pode ser re-implementada em diversos bancos, por exemplo;

    */

    include_once ("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDao($conn);

    $cars = $carDao->findAll();

?>
<!--INSERINDO DADOS COM DAO-->
<h1>Insira um carro</h1>

<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro: </label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">Km do carro: </label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="color">Insira a cor: </label>
        <input type="text" name="cor" placeholder="Insira a cor do carro">
    </div>
    <input type="submit" value="Salvar"/>
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach; ?>
</ul>