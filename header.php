<?php
    session_start();

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
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#trending">Trending</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#newsletter">NewsLetter</a></li>
            <li><a href="index.php#contact">Contact</a></li>



        </ul>
        <div class="nav-right">
            <a href=""><i class="ri-search-line"></i></a>
            <a href=""><i class="ri-star-fill"></i></a>
            <?php
            
            if(isset($_SESSION["username"])){
                echo "<a  href='profile.php' ><i class='bx bxs-user-circle'></i></a>";  
            }
            else{
               echo" <a  href='signup.php' ><i class='ri-user-fill'></i></a>";
            }
            ?>
            
            
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>
    
    