<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RG-Movies</title>
    <link rel="stylesheet" href="../style2.css">
    <!-- Link per Icon te SearchBar -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="../javascript1.js"></script>
</head>
<body>

    <div class="wrapper">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
          <div class="logo"><a href="../Index.php">RG-Movies</a></div>
            <ul class="links">
              <li><a href="../Index.php">Filma</a></li>
              <li><a href="../Seriale.php">Seriale</a></li>
              <li>
                <a href="#" class="desktop-link">Zhanri</a>
                <input type="checkbox" id="show-features">
                <label for="show-features">Zhanri</label>
                <ul>
                    <li><a href="../Aksion.php">Aksion</a></li>
                    <li><a href="../Komedi.php">Komedi</a></li>
                    <li><a href="../Adventure.php">Adventure</a></li>
                    <li><a href="../Horror.php">Horror</a></li>
                </ul>
              </li>
              
              <li><a href="../Anime.php">Anime</a></li>
              <li><a href="../Contactus.php">ContactUs</a></li>

              <div class="lg">
                <li><a href="../logout.php">Log out</a></li></div>
            </ul>
          </div>
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required id="search" onchange="openPage()">
            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </nav>
      </div>
    
    <br> <br> <br>

    <div class="section group">
        <div class="col-1">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iutQJzAXiWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        <h3>Bleach</h3>
        </div>
        <div class="col-2 ">
        <div class="col-2-1"> <br>
        <h4>Përmbledhje</h4> <br>
        <p>Kur motra e Ichigo-s, Yuzu, rrëmbehet nga mëkatarët dhe atij i kërkohet të bëjë diçka <br>
        për ta në mënyrë që të lirohet motra e tij. Ichigo duhet të gjejë një mënyrë për ta kthyer  <br>
        motrën e tij nga ferri me ndihmën e Rukia, Renji dhe Uryu.</p>
        <br>
        <span><b>Anime</b></span><br>
        <span><b>Koha: 94 min</b>
        </div>
        </div>
        <br>

        <h1>Anime Tjerë</h1> <br> <br>
        <div class="col-3 "><br>
        <br>

            <a href="../Anime/DragonBallSuper.php">
            <img src="../img/Anime/DragonBallSuper.jpg">
            <h1>Dragon Ball Super: Broly</h1></a>
    
            
            <a href="../Anime/AttackOnTitan.php">
            <img src="../img/Anime/AttackOnTitan.jpg">
            <h1>Attack On Titan</h1></a>
              
            <a href="../Anime/NarutoShippuden.php">
            <img src="../img/Anime/NarutoShippuden.png">
            <h1>The Last: Naruto The Movie</h1></a>
            
            <a href="../Anime/DemonSlayer.php">
            <img src="../img/Anime/DemonSlayer.jpg">
            <h1>Demon Slayer</h1></a>
        
        
    </div>
         
    </div>

    <footer class="footer">
     
        <div class="inner">
            <div class="column is-logo">
                <a href="#" class="main-logo">
                    <div class="logo">
                        <img src="../img/rg.png" alt="Logo">
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
                    <li><a href="../Index.php">Home</a></li>
                    <li><a href="../Seriale.php">Seriale</a></li>
                    <li><a href="../Anime.php">Anime</a></li>
                    <li><a href="../logout.php">Log Out</a></li>
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