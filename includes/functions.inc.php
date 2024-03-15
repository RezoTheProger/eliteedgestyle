<?php

function username_exists($conn,$username, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR email=?;";
    $stmt = mysqli_stmt_init($conn );
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $email, $hashSignIn){
        
    $sql = "INSERT INTO  users (username,email,password) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn );
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../index.php?error=stmtfailed");
        exit();
    }
    $hashPassword= password_hash($hashSignIn,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPassword);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
    exit();
}


function loginUser($conn,$username, $password){
     $usernameExists =  username_exists($conn,$username, $username);
     if($usernameExists === false){
        header("location:../signup.php?error=NoExistUID");
        exit();
    }
    $PasswordHash = $usernameExists["password"];
    $checkPassword = password_verify($password, $PasswordHash);
   
    if(!$checkPassword){
        header("location:../signup.php?error=wrongPwd");
        exit();
    }
    else{
        session_start();
        $_SESSION["id"] = $usernameExists["id"];
        $_SESSION["username"] = $usernameExists["username"];
        header("location:../index.php");
        exit();

    }
}