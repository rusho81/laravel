<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fname']) && !empty($_POST['fname']) || isset($_POST['lname']) && !empty($_POST['lname']) || isset($_POST['email']) && !empty($_POST['email']) || isset($_POST['pass']) && !empty($_POST['pass']) || isset($_POST['cpass']) && !empty($_POST['cpass'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpass = $_POST['cpass'];

    } else {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }
    
    if($password !== $cpass){
        die("Password and confirm password must match");
    }

    
    $info = [$fname, $lname, $email, $password];
    $file = fopen('users.txt','a');

    if(fputcsv($file, $info) === false){
        die("Error writing csv file");
    }
    fclose($file);
    //header('Location: users.php');
    echo "Registration Successful";
}