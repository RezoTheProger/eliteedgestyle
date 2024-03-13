<?php
include("Database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    <title>SignUp/Login</title>
</head>
<body>
<div class="wrapper">
        <span class="icon-close"><i class='bx bx-x'></i></span>
        <div class="form-box-login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" required>
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        <div class="form-box-register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class='bx bx-user'></i></span>
                    <input type="text" required>
                    <label >Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" required>
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label ><input type="checkbox">I agree to the terms & conditions</label>
                    
                </div>
                <button type="submit" class="btn-login">Register</button>
                <div class="login-register">
                    <p> have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="index.js"></script>

</html>