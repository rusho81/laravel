<?php
session_start([
    'cookie_lifetime'=>300,
]);
$error = false;
// session_destroy();
if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin'==$_POST['username'] && 'rabbit'==$_POST['password']){
        $_SESSION['loggedin']=true;
    }else{
        $error = true;
        $_SESSION['loggedin']=false;
    }
}
if(isset($_POST['logout'])){
    $_SESSION['loggedin']=false;
    session_destroy();
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
            <div class="row" style="margin-top:100px;">
                <div class="column column-60 column-offset-20">
                    <?php 
                        if($error){
                            echo "<blockquote>Username and Password did't Match</blockquote>";
                        }
                        if(false == $_SESSION['loggedin']):
                    ?>
                    <form method ="POST">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" >
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                        <button type="submit" name="submit">Log In</button>
                    </form>

                    <?php 
                    else:
                    ?>
                    <form action="auth.php" method ="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" name="submit">Log Out</button>
                    </form>
                    <?php 
                endif;
                ?>
                </div>
            </div>
        </div>
    </body>
</html>