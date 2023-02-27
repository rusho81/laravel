<?php
namespace Project;
include "c1.php";
include "c2.php";
use \Project\Motorcycle\Bike as Hornet;
$b = new Bike();
echo $b->getName();
$h = new Hornet();
echo $h->getName();