<?php
class Product
{
    private $name;
    private $price;
    private $description;
    public function __construct($productName, $productPrice, $productDes)
    {
        $this->name = $productName;
        $this->price = $productPrice;
        $this->description = $productDes;
    }
    public function display_info()
    {
        echo "Product Name: {$this->name}" . PHP_EOL;
        echo "Product Price: {$this->price}" . PHP_EOL;
        echo "Product Description: {$this->description}" . PHP_EOL;
    }
}

$pod1 = new Product("Apple", 10, "Info about fruits");
$pod1->display_info();
