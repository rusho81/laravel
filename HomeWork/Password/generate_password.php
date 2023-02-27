<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pasLen = $_POST["len"];
    $includeSymbol = isset( $_POST["spchar"] );
    $includeNumber = isset( $_POST["num"] );
    $availChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $availSymbol = "!@#$%^&*()-_=+";
    $availNumber = "0123456789";
    if($includeSymbol){
        $availChar .= $availSymbol;
    }
    if($includeNumber){
        $availChar .= $availNumber;
    }
    $password = "";
    for($i=0; $i < $pasLen; $i++){
        $password .= $availChar[rand(0, strlen($availChar) - 1)];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Password Generator</title>
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
                   <?php echo "<h2>Your password is : {$password}</h2>";?>
                    <footer><p>Created By Quazi Tariqul Alam</p></footer>
                </div>
            </div>
        </div>
    </body>
</html>