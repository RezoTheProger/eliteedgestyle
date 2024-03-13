<?php
include("Database.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EliteEdgeStyle</title>
    <link rel ="stylesheet" href ="style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
     <header><a href="#" class="logo"><img src="img/Black_and_White_Minimalist_Sport-removebg-preview.png" ></a>
    
        <ul class="navList">
            <li><a href="#home">Home</a></li>
            <li><a href="#trending">Trending</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#newsletter">NewsLetter</a></li>
            <li><a href="#contact">Contact</a></li>



        </ul>
        <div class="nav-right">
            <a href=""><i class="ri-search-line"></i></a>
            <a href=""><i class="ri-star-fill"></i></a>
            <a  class="login-btn" ><i class="ri-user-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>
    
    <div class="wrapper">
        <span class="icon-close" ><i class='bx bx-x'></i></span>
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
    
     <section class="home" id="home" >
        <div class="home-txt" data-aos="fade-up">
            <h6>New Clothes</h6>
            <h1>Become <br>Gorgeous <h1>
            <p>It's all about style not make up</p>
            <a href="#trending" class="btn">See More <i class="ri-arrow-right-line"></i></a>

        </div>




     </section>

     <section class="trending" id="trending" data-aos="fade-down">
        <div class="center-txt">

            <h2>Trending Products</h2>
            
        </div>
        <div class="n-content" data-aos="zoom-in">
                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n1.png" >
                    </div>
                    <h3>T-Shirt</h3>
                    

                        <div class="row-right"><h6>300$</h6></div>

                   

                </a>

                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n2.png" >
                    </div>
                    <h3>Jeans</h3>
                    

                        <div class="row-right"><h6>500$</h6></div>

                   

                </a>

                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n3.png" >
                    </div>
                    <h3>Something</h3>
                    

                        <div class="row-right"><h6>100$</h6></div>

                   

                </a>

                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n4.png" >
                    </div>
                    <h3>T-Shirt</h3>
                    

                        <div class="row-right"><h6>300$</h6></div>

                   

                </a>

                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n5.png" >
                    </div>
                    <h3>hh nsit</h3>
                    

                        <div class="row-right"><h6>900$</h6></div>

                   

                </a>

                <a href="#home" class="row">
                    <div class="row-img">
                        <img src="img/n6.png" >
                    </div>
                    <h3>Short</h3>
                    

                        <div class="row-right"><h6>700$</h6></div>

                   

                </a>
        </div>

        <div class="n-btn"><a href="#" class="btn2" data-aos="zoom-in">View more</a></div>



     </section>

     <section class="services" id="services">

        <div class="services-content" data-aos="fade-down">
            <div class="box">
                <div class="f-text">
                    <h3>Web-Development</h3>
                    <img src="img/laptop-computer-writing-work-han.jpg">

                    <p>We are producing web sites for people, if you are interested check out this page</p>
                    <div class="btn3">Visit</div>

                </div>
            </div>

            <div class="box">
                
                <div class="f-text">
                    <h3>SkinCare</h3>
                    <img src="img/skincare (1).jpg">
                    <p>Skin care is also part of beauty, so if you are interested in beauty you'll love this page</p>
                    <a href="https://eliteedgeskin.netlify.app/" target="https://eliteedgeskin.netlify.app/"><div class="btn3">Visit</div></a>

                </div>

            </div>

        </div>




     </section>

     <section class="newsletter" id="newsletter">
        <div class="newsletter-content" data-aos="zoom-in">
            <div class="txt">
                <h2>Subscribe to our newsletter!</h2>
                <p>Sign up with your E-Mail adress to receive updates!</p>
            </div>
            <form name="submit-to-google-sheet">
                <input type="email" name="email" placeholder="Your Email..." required>
                <button type="submit"  >subscribe</button>
            </form>
            <span id="msg"></span>
        </div>
     </section>

     <section class="footer" id="contact">

        <div class="footer-box">
            <h3>Other Sites</h3>
            <a href="">Web-Development</a>
            <a href="https://eliteedgeskin.netlify.app/" target="https://eliteedgeskin.netlify.app/">Skincare</a>

        </div>

        <div class="Contact-box">
            <h3>Contact Us</h3>
            <div class="Social-media">
                <a href="https://www.pinterest.fr/eliteedgeso/" target="https://www.pinterest.fr/eliteedgeso/"><i class='bx bxl-pinterest' ></i></a>
                <a href="https://twitter.com/EliteEdgeSo" target="https://twitter.com/EliteEdgeSo"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.instagram.com/eliteedgeso/" target="https://www.instagram.com/eliteedgeso/"><i class='bx bxl-instagram' ></i></a>
                <a href="https://www.tiktok.com/@eliteedgeso" target="https://www.tiktok.com/@eliteedgeso"><i class='bx bxl-tiktok' ></i></a>
            </div>
        </div>
     </section>






 
</body>
<script src="index.js"></script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset:300,
    duration:1450,
  });
</script>
</html>