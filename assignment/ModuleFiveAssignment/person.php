<?php
/**As i resuse Person class in several files I seperated the class declaration in a seperate php file
 *  and call it whenever I need it */
class Person{
    private $name, $email;
    function setName($name){
        $this->name = $name;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
}