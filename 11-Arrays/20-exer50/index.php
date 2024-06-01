<?php 

    $pessoas = [
        'Americo' => 25,
        'Bruna' => 22,
        'Pedro' => 24,
        'Joao' => 43
    ];

?>

<table border="1px">

    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td> <?= $nome ?> </td>
            <td> <?= $idade?> </td>
        </tr>
    <?php endforeach; ?>

</table>