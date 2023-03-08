<?php
// class RGB {
//     private $color;
//     private $red;
//     private $green;
//     private $blue;
//     function __construct($colorCode='') {
//         $this->color = ltrim($colorCode,"#");
//         $this->parseColor();
//     }
//     function getColor(){
//         return $this->color;
//     }
//     function getRGBcolor(){
//         return array($this->red, $this->green, $this->blue);
//     }
//     function readRGBcolor(){
//         echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
//     }
//     function setColor($colorCode){
//         $this->color = ltrim($colorCode, "#");
//         $this->parseColor();
//     }
//     private function parseColor(){
//         if($this->color){
//             list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
//         }else{
//             list($this->red, $this->green, $this->blue) = array(0,0,0);

//         }
//     }
//     function getRed(){
//         return $this->red;
//     }
//     function getGreen(){
//         return $this->green;
//     }
//     function getBlue(){
//         return $this->blue;
//     }
// }
// $myColor = new RGB("");
// $myColor->readRGBcolor();

// class ParentClass{
//     protected $name;
//     function __construct($name){
//         $this->name = $name;
//         $this->sayHi();
//     }
//     function sayHi(){
//         echo "Hi from {$this->name}\n";
//     }
// }
// class ChildClass extends ParentClass{
//     function sayHi(){
//         parent::sayHi();
//         echo "Hello\n";
//     }
// }
// $cc = new ChildClass("ABCDR");

// $students = array(
//     array("name" => "John", "age" => 20),
//     array("name" => "Jane", "age" => 21),
//     array("name" => "Bob", "age" => 22)
//   );
// print_r($students);
// abstract class ParentClass{
//   final function doSomething(){
//     echo "Doing Something";
//   }
// }
// class Children extends ParentClass{
// }
// $c = new Children();
// $c->doSomething();
// class Shape {

// }

// class Shapes {
//     private $shapes;
//     function __costruct() {
//          $this->shapes = array();
//     }
//     function addShape( $shape) {
//         $this->shapes[] = $shape;
//     }
//     function totalShapes() {
//         return count($this->shapes);
//     }
// }
// class Rectangle extends Shape{

// }
// class Triangle extends Shape{

// }
// class Student{

// }
// $shapesCollection = new Shapes();
// $shapesCollection->addShape(new Rectangle());
// $shapesCollection->addShape(new Triangle());
// $shapesCollection->addShape(new Student());

// echo $shapesCollection->totalShapes();
// interface BaseAnimal{
//     function isActive();
//     function canEat();
//     function breed();
// }
// class Animal implements BaseAnimal{
//     function isActive(){}
//     function canEat(){}
//     function breed(){}

// }
// interface BaseHuman extends BaseAnimal{
//     function canTalk();
// }
// class Human implements BaseHuman{
//     function isActive(){}
//     function canEat(){}
//     function breed(){}
//     function canTalk(){}

// }
// $cat = new Animal();
// echo $cat instanceof Animal;

// $h = new Human();
// class A{
//     protected static $name;
//     static function sayHi(){
//         self::$name = "Hello";
//         echo "Hi from A\n";
//     }
// }
// class B extends A{
//     static function sayHi(){
//         echo "Hi from B\n";
//         parent::sayHi();
//         echo parent::$name;
//     }
// }
// B::sayHi();
//echo B::$name;
// class Student{
//     private $name, $age, $class;
//     function __construct($name='', $age='', $class='')
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->class = $class;
//     }
//     function __get($prop)
//     {
//         return $this->$prop;
//     }
//     function __set($name, $value)
//     {
//         $this->$name = strtoupper($value);
//     }
    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name = $name;

    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;

    // }
    // function getClass(){
    //     return $this->age;
    // }
    // function seClass($class){
    //     $this->class = $class;

    // }
// }
// $R = new Student('Rahim','16','10');

// $R->name = 'Rusho';
// echo $R->name;
// class DistrictCollection implements IteratorAggregate,Countable{
//     private $districts;

//     function __construct(){
//         $this->districts = array();
//     }
//     function add($district){
//         array_push($this->districts, $district);
//     }
//     function getDistricts(){
//         return $this->districts;
//     }
//     function getIterator(): Traversable
//     {
//         return new ArrayIterator($this->districts);
//     }
//     function count(): int
//     {
//         return count($this->districts);
//     }
// }
// $districts = new DistrictCollection;
// $districts->add("Rajshahi");
// $districts->add("Sylhet");
// $districts->add("Bogura");
// $districts->add("Chittagong");

// $_districts = $districts->getDistricts();
// foreach($districts as $district){
//     echo $district."\n";

// }
// echo count($districts);
class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }
    function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;
    function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }
    function updateColor($color){
        $this->color->setColor($color);
    }
    function __clone()
    {
        $this->color = clone $this->color;
    }
}
$fc1= new FavColor("Some Data", "Red");
// $fc2->setData("More Data");
print_r($fc1);
$fc2 = clone $fc1;
print_r($fc2);
$fc2->updateColor("green");
print_r($fc1);
print_r($fc2);