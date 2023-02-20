<?php
// $random = array("a"=>12, "b">=45, "c"=>34,"d"=>22,"e"=>77, 
// "f"=>31, 12=>78, "g"=>87);

// $arraySlice = array_slice($fruits, 2,-1,true);
// $newFruits1 = array_slice($fruits,0,3);
// $newFruits2 = array_slice($fruits,3,null,true);
// $newFruits = array_merge($newFruits1,$newFruits2);
// $randomData = array_slice($random,3,null,true);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);

// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);
//print_r($fruits);
//
// print_r($randomData);
// print_r($fruits);
// $new_fruits = array("jackfruits","pineapple");
// $some_fruits = array_splice($fruits,-5,2,$new_fruits);
// print_r($some_fruits);
// print_r($fruits);
// $timestamp = time();
// echo($timestamp);
// ksort($fruits);
// print_r($fruits);
// foreach($fruits as $fruits){
    //     echo $fruits."\n";
    // }
    
    
// $fruits =  array('a'=>'apple', 'b'=>'banaba', 'f'=>'orange', 'grape', 'barries', 'mango');
// $numbers = array(2,45,68,3,34,'98',74);
// if(in_array(98, $numbers)){
//     echo "Number Found\n";
// }
// $offset = array_search(98,$numbers);
// echo $offset;
// $numbers = array(1,2,3,4,5,6,7,8,9,10,11);
// function square($n){
//     printf("Square of %d is %d \n",$n, $n*$n);
// }
// function cube($n){
//     return $n*$n*$n;
// }
// $newArray = array_map('cube',$numbers);
// print_r($newArray);
// function even($n){
//     return $n%2 == 0;
// }
// function odd($n){
//     return $n%2 == 1;
// }
// $name = array('sujon','kabir','kamal','sayma','Samol','munna');
// $evenNum = array_filter($numbers, 'even');
// print_r($evenNum);
// $oddNum = array_filter($numbers, 'odd');
// print_r($oddNum);
// function returnByS($name){
//     return $name[0]=='s' || $name[0]=='S';
// }
// $newPersons = array_filter($name,'returnByS');
// print_r($newPersons);
// date_default_timezone_set('Asia/Dhaka');

// $date_time = date('Y-m-d h:i:s a');
// echo "My current Date and Time is: " . $date_time;
// $sun_info = date_sun_info(time(), 23.8103, 90.4125);
// foreach ($sun_info as $key => $val) {
//     echo "$key: " . date("H:i:s", $val) . "\n";
// }
// $numbers = array(1,2,3,4);
// function sum($oldValue=0, $newValue){
//     return $oldValue+$newValue;
// }
// $sum = array_reduce($numbers, 'sum',1);
// echo $sum;
// $number = array();
// for($i=12;$i<21;$i++){
//     array_push($number, $i);
// }
// $evenNumber = array();
// foreach(range(12,20,2) as $evenNumber){
//     echo $evenNumber."\n";
// }
// print_r($evenNumber);
// $students = array(
//   "Alice" => array(75, 85, 90),
//   "Bob" => array(80, 90, 95),
//   "Charlie" => array(85, 75, 80)
// );
// echo PHP_EOL;
// print_r($students);
// echo $students['Bob'][1];
// $string =<<<AB
// This is Rusho.
// Happy Valentine's Day.
// Hi Mursida,
// How are you?
// AB;
// echo $string;
// $arr = array('apple','banana','cherry');
// echo implode(',',$arr);
