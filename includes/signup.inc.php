<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["gmail"];
    $password = $_POST["password"];

    require_once'Database.inc.php';
    require_once'functions.inc.php';

    if(username_exists($conn, $username, $email)!==false){
        header("location:../signup.php?error=usernameoremailtaken");
        exit();
    }
    
    createUser($conn, $username, $email, $password);
    
}
else{
    header("location: ../signup.php");
    exit();
}
