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
                    <?php echo "<h2>Welcome {$_SESSION["sname"]}</h2>";?>
                    <a href="users.php" class="button">Go Back</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
