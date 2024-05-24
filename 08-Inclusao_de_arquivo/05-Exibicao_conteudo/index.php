<?php 
    /*
        * * *  Exibição de conteúdo  * * *
        
        Com uma técnica semelhante ao short tags, podemos exibir
        conteúdo sem o echo;

        Ótima estratégia para resumir as chamadas PHP apenas para
        exibição de valores;

        Ex:
            <?= "teste"; =?>
    */

    $nome = "Américo";
    $sobrenome = "Godoy";
?>

    
<form action="">

    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>
    
    <div>
        <input type="submit" value="Enviar">
    </div>

</form>