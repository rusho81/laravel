<?php
// 1.Write a PHP function to sort an array of strings by their length, in ascending order. 
//(Hint: You can use the usort() function to define a custom sorting function.)
$fruits = array('apple', 'banana', 'pear','strawberry');
function sortStrings($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}
$sortedArray = sortStrings($fruits);
print_r($sortedArray);
echo PHP_EOL;

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$string1 = "The Quick brown fox ";
$string2 = "slyly jumped over the lazy dog.";
function ConcatStr($string1,$string2){
    return $string1 .= $string2;
}
echo ConcatStr($string1,$string2);
echo PHP_EOL;

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$stack = array('apple', 'banana', 'pear','strawberry', 'blueberries');
function reduceString($fruits){
    array_pop($fruits);
    array_shift($fruits);
    return $fruits;
}
// $newStack = reduceString($stack);
echo print_r(reduceString($stack));
echo PHP_EOL;

// 4.Write a PHP function to check if a string contains only letters and whitespace.
function LetterWhiteSpapce($str) {
    // Check if string contains only letters and whitespace
    if( preg_match('/^[a-zA-Z\s]+$/', $str)== true){
        echo "The string contains letters and whitespace\n";
    }else{
        echo "The string contains numbers or special character\n";
    }
    
  }
LetterWhiteSpapce("Hello World");//string contains letter and whitespace
LetterWhiteSpapce("Hello World2");//string contains special character or number
echo PHP_EOL;

// 5.Write a PHP function to find the second largest number in an array of numbers.
$num = array(900, 43, 96, 500, 3, 1000);
function SecondLargest($numbers){
    rsort($numbers);
    echo "The second largest number is {$numbers[1]}";
}
SecondLargest($num);