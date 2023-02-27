<?php
class Car{
    private $make;
    private $model;
    private $year;
    function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    function get_make(){
        return $this->make;
    }
    function get_model(){
        return $this->model;
    }
    function get_year(){
        return $this->year;
    }
    function set_make($make){
         $this->make= $make;
    }
    function set_model($model){
         $this->model=$model;
    }
    function set_year($year){
         $this->year=$year;
    }
    function display_info(){
        echo "Car make:{$this->make}\nCar model:{$this->model}\nCar year:{$this->year}\n";
    }
}
$car = new Car("Toyota", "Corolla", 2015);
$car->display_info();
$car->set_make("Honda");
$car->set_model("Civic");
$car->display_info();