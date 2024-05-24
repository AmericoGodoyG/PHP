<?php



    if (15 > 5 &&  "Americo" === "Americo") { // true
        echo "15 é maior que 5 e Americo é identico a Americo. <br>";
    }

    if ("asdsajdoisa" > 5 && 1) { // false
        echo "A comparação 2 é verdadeira <br>";
    }

    if (2 == 3 && 5 >= 3) { // false na versao 7 php / true na versao 8
        echo "2 é igual a 5<br>";
    }

    if (2 == 3 && 5 >= 3) {
        echo "A comparação 3 é verdadeira <br>";
    }