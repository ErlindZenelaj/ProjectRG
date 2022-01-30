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
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `userss` WHERE username='$username' and password='".md5($password)."'"; //function uses the RSA Data Security
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result); //return the number of rows present in the result set
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: Index.php"); // Redirect user to index.php
    }else{
      echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
      }
  }else{
  }
?>

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
          <form action="login.php" method="POST" name="login">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your name" required>
              </div> 
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Login" name="submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <a href='register.php'>Sigup now</label></a></div>
            </div>
        </form>
      </div>    
    
    </div>
  </div>




</body>
</html>


