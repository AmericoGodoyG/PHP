<?php 
    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while ($i < 10) {

        
        if ($arr[$i] == 30 || $arr[$i] == 40) {

            $i++;

            echo '- <br>';

            continue;

        }

        echo $arr[$i] . '<br>';

        $i++;
    }

?>