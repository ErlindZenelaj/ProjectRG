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
    <!-- Link per Icon te SearchBar -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body>

    <div class="wrapper">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
          <div class="logo"><a href="Index.php">RG-Movies</a></div>
            <ul class="links">
              <li><a href="../view/Index.php">Filma</a></li>
              <li><a href="../view/Seriale.html">Seriale</a></li>
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
              
              <li><a href="../view/Anime.php">Anime</a></li>
              <li><a href="../view/Contactus.php">ContactUs</a></li>

              <div class="lg">
                <li><a href="../view/logout.php">Log out</a></li></div>
            </ul>
          </div>
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required>
            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </nav>
      </div>
    
    <br> <br> <br>
    
    <div class = "flex">
        <a href="Anime/DragonBallSuper.php">
        <img src="img/Anime/DragonBallSuper.jpg">
        <h1>Dragon Ball Super</h1>
        </a>

        
        <a href="Anime/NarutoShippuden.php">
        <img src="img/Anime/NarutoShippuden.png">
        <h1>Naruto Shippuden</h1>
        </a>
          
        <a href="Anime/DeathNote.php">
        <img src="img/Anime/DeathNote.jpg">
        <h1>Death Note</h1>
        </a>

        <a href="Anime/DemonSlayer.php">
        <img src="img/Anime/DemonSlayer.jpg">
        <h1>Demon Slayer</h1>
        </a>
        
    </div>
    
    <div class = "flex">
        <a href="Anime/Bleach.php">
        <img src="img/Anime/Bleach.jpg">
        <h1>Bleach</h1></a>
        
         

        
        <a href="Anime/AttackOnTitan.php">
        <img src="img/Anime/AttackOnTitan.jpg">
        <h1>Attack On Titan</h1>
        </a> 
        
        
   

        <a href="Anime/OnePiece.php">
        <img src="img/Anime/OnePiece.jpg">
        <h1>One Piece</h1>
        </a> 
      
        

        <a href="Anime/OnePunchMan.php">
        <img src="img/Anime/OnePunchMan.jpg">
        <h1>One Punch Man</h1>
        </a>
       
    </div>
    
    <div class = "flex">
        <a href="Anime/DragonBallZ.php">
            <img src="img/Anime/DragonBallZ.jpg">
            <h1>Dragon Ball Z</h1>
            </a>
       

        
        <a href="Anime/Naruto.php">
            <img src="img/anime/Naruto.jpg">
            <h1>Naruto</h1>
           </a> 
        

        <a href="Anime/Jujutsu.php">
            <img src="img/Anime/Jujutsu.jpg">
            <h1>Jujutsu</h1>
            </a> 

        <a href="Anime/MyHeroAcademy.php">
        <img src="img/Anime/MyHeroAcademy.jpg">
        <h1>My Hero Academy</h1>
        </a>
        
    </div>
    
    <footer class="footer">
     
        <div class="inner">
            <div class="column is-logo">
                <a href="#" class="main-logo">
                    <div class="logo">
                        <img src="img/rg.png" alt="Logo">
                    </div>
                    <div class="logo-info">
                        <div class="text">RG-Movies</div>
                        <span class="copyright">By: Lindi&Nori</span>
                    </div>
                </a>
            </div>
            <div class="column is-nav">
                <div class="column-title">Navigation</div>
                <ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="Seriale.php">Seriale</a></li>
                    <li><a href="Anime.php">Anime</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            <div class="column is-nav">
                <div class="column-title">Contact</div>
                <ul>
                    <li><a href="#"><i class="fa fa-envelope-open"></i>RG-Movies@info.com</a></li>
                    
                    
                </ul>
                    
            </div>
            <div class="column is-nav">
                <div class="column-title">Social Media</div>
                <ul>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </ul>
            </div>
        </div>
    </footer>

  
  </body>
  </html>


        
