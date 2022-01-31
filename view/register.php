<?php
include_once '../controller/registerController.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <!-- Link per Icona -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/rg.png" alt="">
        <div class="text">
          <span class="text-1">Every new movie is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="img/rg.png" alt="">
        <div class="text">
          <span class="text-1">Every new movie is a<br> new adventure</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form  action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name"  required value="<?=$name?>">
              </div>

              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="surname" placeholder="Enter your surname" required value="<?=$surname?>">
              </div>

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required value="<?=$email?>">
              </div>

              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your username" required value="<?=$username?>">
              </div>
          
              
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required value="<?=$password?>">
              </div>

              <div class="button input-box">
                <input type="submit" name="registerBtn" value="register">
              </div>
              <div class="text sign-up-text">You have Account <a href='login.php'>Login now</label></a></div>
            </div>
      </form>
      </div>
      
        <div class="signup-form">
          <div class="title">Signup</div>
        
    </div>
    </div>
    </div>
  </div>




</body>
</html>


