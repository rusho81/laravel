<?php
require_once "inc/functions.php"; 
$info ='';
$task = $_GET['task'] ?? 'report';
if('seed' == $task){
    seed();
    $info = "Seeding is complete";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>User Registration Form</h1>
                <h2>Project -1 CRUD</h2>
                <p>A sample project to perform CRUD operations using plain files and PHP</p>
                <?php include_once('inc/templets/nav.php'); ?>
                <hr/>
                <?php 
                if($info !=''){
                    echo "<p>{$info}</p>";
                }
                ?>
            </div>
        </div>

        <?php if('report' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>