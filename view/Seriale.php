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
          <div class="logo"><a href="../view/Index.php">RG-Movies</a></div>
            <ul class="links">
              <li><a href="../view/Index.php">Filma</a></li>
              <li><a href="../view/Seriale.php">Seriale</a></li>
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
        <a href="../view/Seriale/SquidGames.php">
        <img src="img/Serial/SquidGame.jpg">
        <h1>Squid Games</h1>
        </a>

        
        <a href="../view/Seriale/LaCasaDePapel.php">
        <img src="img/Serial/La-casa.jpg">
        <h1>La Casa De Papel</h1>
        </a>
          
        <a href="../view/Seriale/Rrushe.php">
        <img src="img/Serial/Rrushe.jpg">
        <h1>Rrushe</h1>
        </a>
        


        <a href="../view/Seriale/Vis-a-Vis.php">
        <img src="img/Serial/Vis-a-Vis.jpg">
        <h1>Vis-a-Vis</h1>
        </a>
        
    </div>
    
    <div class = "flex">
        <a href="../view/Seriale/Lucifer.php">
        <img src="img/Serial/Lucifer.jpg">
        <h1>Lucifer</h1></a>
        
         

        
        <a href="../view/Seriale/See.php">
        <img src="img/Serial/See.jpg">
        <h1>See</h1>
        </a> 
        
        
   

        <a href="../view/Seriale/QueensGambit.php">
        <img src="img/Serial/QueensGambit.jpg">
        <h1>Queens Gambit</h1>
        </a> 
      
        

        <a href="../view/Seriale/WhatIf.php">
        <img src="img/Serial/WhatIf.jpg">
        <h1>What If</h1>
        </a>
       
    </div>
    
    <div class = "flex">
        <a href="../view/Seriale/OuterBanks.php">
            <img src="img/Serial/OuterBanks.jpg">
            <h1>Outer Banks</h1>
            </a>
       

        
        <a href="../view/Seriale/Loki.php">
            <img src="img/Serial/Loki.jpg">
            <h1>Loki</h1>
           </a> 
        
        
   

        <a href="../view/Seriale/TheFlash.php">
            <img src="img/Serial/TheFlash.jpg">
            <h1>The Flash</h1>
            </a> 
        
        

        <a href="../view/Seriale/SexEducation.php">
        <img src="img/Serial/Sex-education.jpg">
        <h1>Sex-Education</h1>
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



        
