<?php
    if(isset($_POST["submit"])){


        $email = $_POST["userEmail"];
        $token = bin2hex(random_bytes(16));
        $token_hash=hash("sha256", $token);
        $expire=date("Y-m-d H:i:s",time()+60 *15);
        require_once 'Database.inc.php';
        $sql="UPDATE users SET reset_token_hash =?, reset_token_expire=?
        WHERE email=?
        ";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("sss",$token_hash, $expire, $email);
        $stmt->execute();
   
        if($conn->affected_rows){
            echo"I love shit";
        }
    }

    else {
        header("location:../GmailList.php");
        exit();
    }

?>