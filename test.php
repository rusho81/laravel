<?php
//include_once "functions.php";
/**
 * Determines if an argument is even or odd.
 */

// function add($x, $y, int ...$number):int{
//     $result = 0;
//     for($i=0;$i<count($number);$i++){
//         $result += $number[$i];
//     }
//     return $result;
// }
// echo add(5.3,4,6,6);

// function printNumber($counter, $end, $stepping=1){
//     if($counter>$end){
//         return;
//     }
//     echo $counter."\n";
//     $counter+=$stepping;
//     printNumber($counter, $end, $stepping);
// }
// printNumber(21,37,6);
// function fibonnaci($old, $new, $end){

//     static $start;
//     $start = $start ?? 1;
//     if($start>$end){
//         return;
//     }
//     $start++;
//     echo $old." ";
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;
//     fibonnaci($old, $new, $end);
// }
// fibonnaci(0,1,10);
function calculator(int $x, int $y, $method="sum"){
    $result = ("sum"==$method)?($x+$y):(("sub"==$method)?($x-$y):(("div"==$method)?($x/$y):("Invalid")));
    return $result;
}
echo calculator(12,5,"sub").PHP_EOL;
echo "*******".PHP_EOL;

for($i=10,$j=1;$i>0;$i--,$j++){
    echo $i.":".$j.PHP_EOL;
}
echo "*******".PHP_EOL;
for($i=6,$factorial=1;$i>0;$i--){
    $factorial *=$i;
    echo $factorial.PHP_EOL;
}

