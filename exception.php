<?php
// class ServerLoadException extends Exception{}
// class NetworkException extends Exception{}
// class DiskFullException extends Exception{}

// interface NetworkStorage {
//     function connect();
//     function getName();
//     function report($data);
// }

// class MySQLServer implements NetworkStorage {
//     function connect() {
//         throw new DiskFullException;
//     }
//     function getName(){
//         return "My SQL";
//     }
//     function report($data){

//     }
// }

// class PostgreSQLServer implements NetworkStorage {
//     function connect() {
//         throw new ServerLoadException;
//     }
//     function getName(){
//         return "PostgraceSQL";
//     }
//     function report($data){
        
//     }
// }

// class MSSQLServer implements NetworkStorage {
//     function connect() {
//         // throw new NetworkException;
//         return $this;
//     }
//     function getName(){
//         return "MSSql";
//     }
//     function report($data){
        
//     }
// }

// class ConnectionPool{
//     private $connection;
//     private $storage;
//     function __construct(){
//         $this->storage = array();
//     }
//     function addStorage(NetworkStorage $storage){
//         $this->storage[]= $storage;
        
//     }
//     function getConnection(){
//         foreach($this->storage as $storage){
//             try{
//                 $this->connection = $storage->connect();
//             }catch(ServerLoadException $e){
//                 echo $storage->getName()."is facing huge load.\n";
//                 $storage->report(array('ip'=>'123.454.54.65','error'=>'load'));
//             }catch(NetworkException $e){
//                 echo $storage->getName()."is faving some problem with its network\n";
//             }catch(DiskFullException $e){
//                 echo $storage->getName()."is has its disk full.\n";
//             }
//             if($this->connection){
//                 break;
//             }
//         }
//         if ($this->connection){
//             return $this->connection;
//         }
//         return false;
//     }
// }
// $mysql = new MySQLServer();
// $pgsql = new PostgreSQLServer();
// $mssql = new MSSQLServer();

// $cp = new ConnectionPool();
// $cp->addStorage($mysql);
// $cp->addStorage($pgsql);
// $cp->addStorage($mssql);
// $connection = $cp->getConnection();
// print_r($connection);_reporting(E_ALL);
// ini_set('display_errors',0);
// register_shutdown_function('fatal_error_handler');
// function fatal_error_handler(){
//     $error = error_get_last();
//     if($error){
//         echo "do something";
//     }
// }
// echo substr([1,2,3,4], 3);
// echo ini_get("error_log");
// $headers = "From:kabir@gmail.com \n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// error_log("This is an error message.",1,"rushokazi@gmail.com",$headers);
// $date = date("Y:m:d H:i:sa");
// error_log("[{$date}] This is an error message 7.\n",3, "etc/error.txt");
// $file = "ostad.txt";

if (file_exists("ostad.txt")) {
    $str = file_get_contents("ostad.txt");
    $date = date("Y-m-d H:i:s");
    file_put_contents("ostad.txt", $date, FILE_APPEND);
} else {
    $str = date("Y-m-d H:i:s");
    file_put_contents("ostad.txt", $str);
}


