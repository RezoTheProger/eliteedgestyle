<?php


if(isset($_POST["loginSubmit"])){
    $username=$_POST["LoginUsername"];
    $password=$_POST["LoginPassword"];

    require_once'Database.inc.php';
    require_once'functions.inc.php';


    loginUser($conn, $username, $password);

    

}
else {
    header("location:../signup.php");
    exit();
}