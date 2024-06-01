<?php 

    $pontos = [
        'Americo' => 9.8,
        'Bruna' => 10,
        'Joao' => 7.1,
        'Maria' => 8.9,
        'Jose' => 9.1,
        'Gustavo' => 6.9
    ];

    // Ordenando os valores do maior para o menor.
    arsort($pontos);
?>

<table border = "1px">

    <th>Nome</th>
    <th>Pontos</th>

    <?php foreach ($pontos as $nome => $valor): ?>
        <tr>
            <td> <?= $nome ?> </td>
            <td> <?= $valor ?> </td>
        </tr>
    <?php endforeach; ?>

</table>