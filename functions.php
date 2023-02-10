<?php
function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}

function factorial(int $n){
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}

function serve($foodType="Coffee",$numberOfItem="one cups"){
    echo "{$numberOfItem} of $foodType have/has been served.";
}

function sum(int ...$number):int{
    $result = 0;
    for($i=0;$i<count($number);$i++){
        $result += $number[$i];
    }
    return $result;
}