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

echo "\n";

if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n";

$result = $n % 2 == 0 ? "Even Number" : "Odd Number";
echo $result;*/

/*$n = 12;
$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is a odd number \n";
}*/

$color = "red";
switch ($color){
    /*case 'red':
        echo "Red is our favourite color";
        break;
    case 'green':
        echo "Green is our favourite color";
        break;*/
    case 'red':
    case 'green':
        echo ucwords($color)." is our favourite color";
        break;
    case 'blue':
        echo "Blue is not our favourite color";
        break;
    default:
        echo "This color is ok";    
}
