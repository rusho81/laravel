<!-- Task 3: Superglobal Variables in PHP -->
<!-- Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable.
Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. 
Use the getName() and getEmail() methods to display the properties on the webpage. -->
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Task 3</title>
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
                    <h1>Superglobal Variables in PHP</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name"><br>
                        <label for="mail">Email:</label>
                        <input type="email" id="mail" name="email"><br>
                        <input type="submit" value="Submit"><br>
                    </form>
                    <?php 
                        // autoload person.php file if we use person class from person.php file
                        function autoload($name){
                            include strtolower("{$name}.php");
                        }
                        spl_autoload_register('autoload');
                        // The person class is declared in person.php file please visit that file for class declaration.
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $newPerson = new Person();
                            $newPerson->setName($_POST['name']);
                            $newPerson->setEmail($_POST['email']);
                            
                            if(isset($_POST['name']) && !empty($_POST['name'])){
                                echo "<p>The name is: {$newPerson->getName()}</p>";
                            }
                            if(isset($_POST['email']) && !empty($_POST['email'])){
                                echo "<p>Email address is: {$newPerson->getEmail()}</p>";
                            }
                        }
                        ?>
                    <footer><p>Created By Quazi Tariqul Alam</p></footer>
                </div>
            </div>
        </div>
    </body>
</html>


