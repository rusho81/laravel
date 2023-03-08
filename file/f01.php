<?php
// $filename = "/home/rusho/Documents/laravel/file/data/f1.txt";
// if (is_readable($filename)) {
//     $fp = fopen($filename, 'r');
//     while ($line = fgets($fp)) {
//         echo $line;
//     }
//     rewind($fp);
//     fseek($fp, 8);
//     while ($line = fgets($fp, 5)) {
//         echo $line . "-";
//     }
//     fclose($fp);
//     $data = file($filename);
//     print_r($data);
//     echo PHP_EOL;
//     $data = file_get_contents($filename);
//     echo $data;
// }
// $filename = "/home/rusho/Documents/laravel/file/data/f2.txt";
// $fp = fopen($filename,"a");
// fwrite($fp,"Mercury\n");
// fwrite($fp,"Venus\n");
// fwrite($fp,"Earth\n");
// fclose($fp);

$filename = "/home/rusho/Documents/laravel/file/data/f3.txt";
$students = array(
    array(
        'fname'=>'Tariqul',
        'lname'=>'Alam',
        'age'=>40,
        'class'=>"Ostad",
        'roll'=>27
    ),
    array(
        'fname'=>'Quazi',
        'lname'=>'Wasika',
        'age'=>5.5,
        'class'=>1,
        'roll'=>23
    ),
    array(
        'fname'=>'Tasnia',
        'lname'=>'Ahmed',
        'age'=>6,
        'class'=>2,
        'roll'=>10
    ),
);
// $fp = fopen($filename,"w");
// foreach($students as $student){
//     $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp, $data);
// }
// fclose($fp);

// $fp = fopen($filename,"w");
// foreach($students as $student){
//     $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp, $data);
//     fputcsv($fp,$student);
// }
// fclose($fp);


// $fp = fopen($filename,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name = %s %s\nAge = %d\nClass = %s\nRoll = %d\n\n", $student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

// $fp = fopen($filename,"r");
// while($student = fgetcsv($fp)){
//     printf("Name = %s %s\nAge = %d\nClass = %s\nRoll = %d\n\n", $student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);
/*$student = array(
    'fname'=>'Mursida',
    'lname'=>'Khatun',
    'age'=>33,
    'class'=>"12",
    'roll'=>33
);
$fp = fopen($filename,"a");
fputcsv($fp, $student);
fclose($fp);*/

// $data = file($filename);
// print_r($data);
// unset($data[1]);
// print_r($data);
// $fp = fopen($filename,"w");
// foreach($data as $line){
//     fwrite($fp, $line);
// }
// fclose($fp);

// $encodeData = json_encode($students);
// file_put_contents($filename,$encodeData,LOCK_EX);

$data = file_get_contents($filename);
$allStudents = json_decode($data,true);
print_r($allStudents);
echo $allStudents[2]['fname'];