<?php 
    /*
        * * * Mantendo o estado da requisição * * *

        O HTTP é um protocolo que não mantém o estado (stateless);

        Ou seja, após o fim da requisição a conexão entre usuário
        e servidor é finalizada, a próxima conexção não possui mais 
        relação entre ambos

        Para conseguir manter estes dados podemos utilizar os cookies

        O problema desta abordagem é que alguns navegadores não permitem
        o uso de cookie ou o bloqueiam
    */
?>