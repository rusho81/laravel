<?php
include_once "form2-functions.php";
$furits = ["mango", "orange", "banana", "apple", "lemon", "peach"];
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
                    <h2>Select/Dropdown</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam aliquid voluptates sequi velit dolores in, ullam tenetur temporibus omnis minima iusto odit tempora iure facilis. Quas atque nulla beatae doloremque!</p>
                    <p>
                        <?php 
                        $sfruits = $_POST['fruits'] ?? array();
                        if(!empty($sfruits)){
                            echo "You have selected: ".join(", ",$sfruits);
                        }
                        ?>
                    </p>
                </div>
            </div>   
            <div class="row">
                <div class="column column-60 column-offset-20">     
                    <form method="POST">
                        <label for="fruits"></label>
                        <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected>Select Some Fruits</option>
                            <?php displayOptions($furits, $sfruits); ?>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                    <footer><p>Created By Quazi Tariqul Alam</p></footer>
                </div>
            </div>
        </div>
    </body>
</html>
