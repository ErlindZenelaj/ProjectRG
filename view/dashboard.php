<?php 
    session_start();
    require_once '../controller/auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RG-Movies</title>
    <link rel="stylesheet" href="style.css">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<h1>
    

    <div class="wrapper">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
          <div class="logo"><a href="Index.php">RG-Movies</a></div>
            <ul class="links">
              <li><a href="Index.php">Filma</a></li>
              <li><a href="Seriale.php">Seriale</a></li>
              <li>
                <a href="#" class="desktop-link">Zhanri</a>
                <input type="checkbox" id="show-features">
                <label for="show-features">Zhanri</label>
                <ul>
                  <li><a href="Aksion.php">Aksion</a></li>
                  <li><a href="Komedi.php">Komedi</a></li>
                  <li><a href="Adventure.php">Adventure</a></li>
                  <li><a href="Horror.php">Horror</a></li>
                  
                </ul>
              </li>
              
              <li><a href="Anime.php">Anime</a></li>
              <li><a href="Contactus.php">ContactUs</a></li>

              <div class="lg">
                <li><a href="../view/logout.php">Log out</a></li></div>
              
            </ul>
          </div>
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required id="search" onchange="openPage()">
            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </nav>
      </div>
    
    <br>    
    <br>
    
  



    User: 
    <?php echo ucfirst($_SESSION['username']); ?></h1> 



</body>
</html>