<?php
    require_once "../app/bootloader.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../app/lib/fontAwesome/css/all.css">
    <script src="https://kit.fontawesome.com/32ed5b2546.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="header">
        
    </div>
    <img src="images/logo1.png" alt="" srcset="" class="logo1">
    <img src="images/logo2.png" alt="" class="logo2">
    <button id="opac"><span class="opacText"> <i class="fa-sharp fa-solid fa-book-open"></i>&nbsp;<a href="#">OPAC</a></span></button>
    <div class="container1">
        <img src="images/Library-pana 2.png" alt="" srcset="">
        <div class="container2">
            <p class="loginHead">Welcome</p>
            <form action="index.php" method="post">
                <i class="fa-solid fa-user" id="user"></i>
                <input type="text" placeholder="User ID" class="userid">
                <i class="fa-solid fa-lock" id="lock"></i>
                <input type="password" placeholder="Password" class="password">
                <p class="forgetPassword"><a href="#">Forget Password</a></p>
                <button type="submit" class="loginbtn">Login</button>
            </form>
        </div>
    </div>
   
</body>
</html>

