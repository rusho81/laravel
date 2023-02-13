<?php
//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function evenOdd(int $num){
    if($num % 2 == 0){
        return "Even Number";
    }
    return "Odd Number";
}

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$result = 0;
for($i = 1; $i <= 100; $i++){
    $GLOBALS['result'] += $i;
}
echo $result;