<?php
/*$fname = 'Isac';
$lname = 'Neuton';
$middlename = "Nothing";
$num = 12.14653;
echo "His firts name is ".$fname." and his last name is ".$lname."\n";
echo "His firts name is {$fname} and his last name is {$lname}\n";
printf ("His firts name is %s and his last name is %s\n", strtoupper($fname),strrev($lname));
printf('His name is: %3$s, %1$s %2$s', $fname, $middlename, $lname);
echo "\n";
printf("%08.3f", $num);*/

//Ternary operator
/*$n = 12;
if(12 == $n){
    echo "Twelve";
}elseif(10 == $n){
    echo "Ten";
}else {
    echo "A number";
}
echo "\n";

$numberInWord = (12 == $n)? "Twelve" : (10 == $n? "Ten" : "A Number");
echo $numberInWord;

echo "\n";*/

$n = 12;
if ($n%2==0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo PHP_EOL;
if($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Text";
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some Text";
endif;
echo PHP_EOL;
switch($n%2==0):
    case 0:
    echo "Even number";
    break;
    default:
    echo "Odd Number";
endswitch;