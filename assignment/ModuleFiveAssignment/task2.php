<?php
// Task 2: Basic OOP in PHP
// Create a PHP class called "Person" with the following properties and methods:
// Properties:
// Name
// Email
// Methods:
// setName($name): sets the name property
// setEmail($email): sets the email property
// getName(): returns the name property
// getEmail(): returns the email property
// Create an instance of the Person class and set the name and email properties. 
// Use the getName() and getEmail() methods to display the properties on the webpage.

function autoload($name){
    include strtolower("{$name}.php");
}
spl_autoload_register('autoload');
$human = new Person();
$human->setName("Rusho");
$human->setEmail("rushokazi@gmail.com");
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Task 2</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 50px;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h1>Basic OOP in PHP</h1>
                    <?php echo "<p>The name is: {$human->getName()} and email address is: {$human->getEmail()}</p>"; ?>
                    <footer><p>Created By Quazi Tariqul Alam</p></footer>
                </div>
            </div>
        </div>
    </body>
</html>
