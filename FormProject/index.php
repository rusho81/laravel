<?php
include_once "functions.php";
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
        .label-inline{
            display: inline-block;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h2>Our First Form</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam aliquid voluptates sequi velit dolores in, ullam tenetur temporibus omnis minima iusto odit tempora iure facilis. Quas atque nulla beatae doloremque!</p>
                    <p>
                        <?php
                        $fname = '';
                        $lname = '';
                        $checked = '';

                        if (isset($_REQUEST['cb1']) && $_REQUEST['cb1']== 1){
                            $checked = 'checked';
                        }
                        print_r($_REQUEST);
                        ?>
                        <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])): ?>
                        <?php  $fname = htmlspecialchars($_REQUEST['fname']); ?>
                        <?php endif;?>
                        <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])): ?>
                        <?php $lname = htmlspecialchars($_REQUEST['lname']); ?>
                        <?php endif;?>
                    </p>
                    <form method="POST">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $_REQUEST['fname']?>">

                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" value="<?php echo $_REQUEST['lname']?>">

                        <div>
                            <input type="checkbox" name="cb1" id="cb1" value=1 <?php echo $checked; ?>>
                            <label for="ch1" class="label-inline">Some Checkbox</label>
                        </div>
                        
                        <label for="">Select Some Fruits</label>
                        <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ?>>
                        <label class="label-inline">Orange</label><br>
                        <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango') ?>>
                        <label class="label-inline">Mango</label><br>
                        <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana') ?>>
                        <label class="label-inline">Banana</label><br>
                        <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon') ?>>
                        <label class="label-inline">Lemon</label><br>
                        
                        <button type="submit">Submit</button>
                    </form>
                    <footer><p>Created By Quazi Tariqul Alam</p></footer>
                </div>
            </div>
        </div>
    </body>
</html>
