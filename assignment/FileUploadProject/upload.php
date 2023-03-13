<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && !empty($_POST['name']) || isset($_POST['email']) && !empty($_POST['email']) || isset($_POST['pass']) && !empty($_POST['pass']) || isset($_FILES['photo']) && !empty($_FILES['photo'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
    } else {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    $targetFolder = "uploads/";
    $targetFile = uniqid() . date("F_jS_Y_g_i_sa_") . basename($_FILES['photo']['name']);
    if(!move_uploaded_file($_FILES['photo']['tmp_name'],$targetFolder.$targetFile)){
        die("Error while uploading");
    }
    $info = [$name,$email,$targetFile];
    $file = fopen('users.csv','a');

    if(fputcsv($file, $info) === false){
        die("Error writing csv file");
    }
    fclose($file);
    session_start();
    setcookie('user',$name);
    header('Location: users.php');
}