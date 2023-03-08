<?php
session_start([
    'cookie_lifetime'=>300,
]);
if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin'==$_POST['username'] && 'rabbit'==$_POST['password']){
        $_SESSION['loggedin']=true;
    }else{
        $_SESSION['loggedin']=false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <title>Task 1</title>
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
                <h2>Simple Auth Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php 
                    if(true == $_SESSION['loggedin']){
                        echo "Hello Admin, Welcome!";
                    }else{
                        echo "Hello Stranger, Login Below";
                    }
                ?>
                
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method ="POST" style="margin-top:100px;">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" >
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>