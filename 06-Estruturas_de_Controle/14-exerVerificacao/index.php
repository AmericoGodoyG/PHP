<?php

$idade = 25;
$autorizacao = 1;

function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao) {
        return "Acesso autorizado";

    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";

    } else {
        return "Acesso negado. Autorização necessária";

    }
}

$resultado = verificarAcesso($idade, $autorizacao);

echo $resultado;