
<?php
include_once("header.php");

?>


<body class="body">
<div class="preWrapper"><?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "usernameoremailtaken"){
            echo"<p>Username Or Email Is Already Used</p>";
        }
        if($_GET["error"] == "stmtfailed"){
            echo"<p>Something Went Wrong, Try Again Late</p>";
        }
        if($_GET["error"] == "none"){
            echo"<p>You've signed up successfully</p>";
        }
        if($_GET["error"] == "NoExistUID"){
            echo"<p>Account Does Not Exist</p>";
        }
        if($_GET["error"] == "wrongPwd"){
            echo"<p>Wrong Password, Try Again!</p>";
        }



    }

?></div>
<div class="wrapper"> 

        <div class="form-box-login">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post" >
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" name="LoginUsername" required>
                    <label >Username/Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="LoginPassword"  required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" name="loginSubmit" value="Login" class="btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        <div class="form-box-register">
            <h2>Register</h2>

            <form action="includes/signup.inc.php" method="post">
                <div class="input-box">
                    <span class="icon"><i class='bx bx-user'></i></span>
                    <input type="text" name="username"  required>
                    <label >Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="gmail" required>
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="password" required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label ><input type="checkbox">I agree to the terms & conditions</label>
                    
                </div>
                
                <button type="submit" name="submit"  class="btn-login"  >Register</button>
                <div class="login-register">
                    <p> have an account?<a class="login-link">Login</a></p>
                </div>
            </form>

            
        </div>
        
    </div>
    
</body>

<script >
const wrapper =document.querySelector('.wrapper');
const loginlink =document.querySelector('.login-link');
const registerlink =document.querySelector('.register-link');

registerlink.addEventListener('click',()=>{
    wrapper.classList.add('active');
})
loginlink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
})


</script>

