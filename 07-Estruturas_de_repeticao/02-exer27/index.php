<?php 

    //Array com dados distintos.
    $arr = ["Américo ", 25, " Godoy ", 14, " da ", 5, " Silva "];
    $cont = 0;

    while ($cont < 7) {
        if (is_string($arr[$cont])) {
            echo $arr[$cont];
        }
        $cont++;
    }
?>