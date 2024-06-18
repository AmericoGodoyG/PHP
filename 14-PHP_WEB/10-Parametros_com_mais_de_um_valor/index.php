<?php
    /*
        * * * Parâmetros com mais de um valor * * *

        Os inputs de checkbox podem conter mais de um valor

        Para receber todos eles no backend, precisamos adicionar 
        uma sintaxe de array no name

        Assim recebemos todos os inputs marcados

        Ex:

           <input type="checkbox" name="caracteristicas[]" />
    */

    if(isset($_POST['ingredientes'])) {

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);

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
    <fieldset>
            <legend>Parâmetros com mais de um valor</legend>
                <form action="index.php" method="POST">
                    <div>
                        <input type="checkbox" name="ingredientes[]" value="Tomate"/> Tomate
                    </div>  
                    <br>
                    <div>
                        <input type="checkbox" name="ingredientes[]" value="Abobora"/> Abobora
                    </div> 
                    <br>
                    <div>
                        <input type="checkbox" name="ingredientes[]" value="Feijão"/> Feijão
                    </div> 
                    <br>
                    <div>
                        <input type="checkbox" name="ingredientes[]" value="Alface"/> Alface
                    </div> 
                    <br>
                    <div>
                        <input type="checkbox" name="ingredientes[]" value="Cebola"/> Cebola
                    </div> 
                    <br>
                    <div>
                        <input type="submit" value = "Enviar"/>
                    </div>
                </form>
        </fieldset>
</body>
</html>