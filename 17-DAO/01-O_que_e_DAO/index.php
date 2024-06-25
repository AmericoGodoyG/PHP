<?php 
    /*
    ==============================
        * * * O que é DAO * * *
    ==============================
        DAO = Data Access Object

        Padrão de código utilizado para persistância de dados

        Utilizada apenas em abordagem orientadas a objetos

        Há uma classe DAO que será responsável pelas interações
        ao DB

        Atua como um intermediário de aplicações e banco de dados

        Separa a regra de negócio da interação com o banco de dados

        Possibilita também a troca de bancos ou modelo de conexão 
        facilmente

        OBS: Query dentro do DAO

    ==============================
      * * * O que é DAO * * *
    ==============================
        Trabalharemos com duas classes

        Exemplificando com uma classe de usuário

        UserDAO: Manipulação de dados do banco (FAZ O CRUD);

        User: Todas as ações que não envolvem o banco

        Create: User monta um novo usuário com seus campos
        necessários do banco, UserDAO recebe este objeto e
        insere o usuário no banco;
    */

?>