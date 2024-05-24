<?php
 
function sumDigits($number) {
    $sum = 0;
    $number = abs($number); // Certifique-se de que estamos lidando com um valor positivo
    
    while ($number > 0) {
        // Extraia o dígito menos significativo e adicione-o à soma
        $digit = $number % 10;
        $sum += $digit;
        // Remova o dígito menos significativo do número
        $number = (int)($number / 10);
    }
    
    return $sum;
}