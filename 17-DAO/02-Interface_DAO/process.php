<?php 
    // CRIANDO CONEXÃO PRA A CLASSE 
    include_once("db.php");
    include_once("dao/CarDAO.php");


    $carDAO = new CarDAO($conn);

    $brand = $_POST['brand'];
    $km = $_POST['km'];
    $cor = $_POST['cor'];

    $newCar = new Car();
    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($cor);

    //Criando um novo carro
    $carDAO->create($newCar);

    header("Location: index.php");