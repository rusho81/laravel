<?php
session_start();
?>

                       
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Users Information</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
        <style>
            body {
                margin-top: 30px;
            }
            img {
			max-width: 100px;
			height: auto;
			display: block;
			margin: 0 auto;
		}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">

                    <h2>Log In</h2>
                    <p>
                        <?php
                        $counter = 0;
                         $users = array();
                         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                             if (isset($_POST['email']) && !empty($_POST['email']) || isset($_POST['pass']) && !empty($_POST['pass'])) {
                     
                                 $file = fopen('users.txt', 'r');
                                 while ($user = fgetcsv($file)) {
                                     if(in_array($_POST['email'], $user) && in_array($_POST['pass'], $user)){
                                         $_SESSION["sname"] = $user[0];
                                         header( 'Location: welcome.php' );
                                         exit();
                    
                                     }else{
                                        $counter = 1;
                                     }
                                 }
                                 if($counter == 1){
                                    echo "<p>Username or password didn't match. </p>";
                                 }
                                 fclose($file);
                             }
                         }
                     ?>

                    </p>
                    <form action="" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" required>
                    <br>
                    <input type="submit" value="Log In">
                    <a href="index.html" class="button">Registration Form</a>
                </form>
                </div>
            </div>
        </div>   
    </body>
</html>