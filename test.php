<?php
// $entries = scandir(getcwd());
// foreach ($entries as $entry) {
//     if ("." != $entry && ".." != $entry) {
//         if (is_dir($entry)) {
//             echo "[d] {$entry}\n";
//         } else {
//             echo "[f] {$entry}\n";
//         }
//     }
// }

// function countDir($dir) {
//     $count = 0;
//     $entries = scandir($dir);
//     foreach ($entries as $entry) {
//         if ("." != $entry && ".." != $entry) {
//             if (is_dir($entry)) {
//                 $count ++;
//             }
//         }
//     }
//     return $count;
// }
// echo countDir(getcwd());
// class MotorCycle {
//     private $parameters;
//     function __construct($displacement, $capacity, $milage) {
//         $this->parameters = [];
//         $this->parameters['displacement'] = $displacement;
//         $this->parameters['capacity'] = $capacity;
//         $this->parameters['milage'] = $milage;
//     }
    // function getDisplacement() {
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement) {
    //     $this->parameters['displacement'] = $displacement;
    // }
//     function __isset($name) {
//         if (!isset($this->parameters[$name])) {
//             echo "{$name} not found\n";
//             return false;
//         }
//         return true;
//     }
//     function __unset($name) {
//         print_r($this->parameters);
//         unset($this->parameters[$name]);
//         print_r($this->parameters);
//     }
//     function __get($name) {
//         echo $this->parameters[$name];
//     }
//     function __set($name, $value) {
//         echo $this->parameters[$name] = $value;
//     }
// }

// $pulser = new MotorCycle('1500cc', '16', '40kmps');

// if (isset($pulser->tiresize)) {
//     // $pulser->tiresize;
//     echo "Found\n";
// } else {
//     echo "Not Found\n";
// }
// unset($pulser->milage);
echo "Hello";