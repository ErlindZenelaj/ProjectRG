<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RG-Movies</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssfile.css">

     
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
    
    <br> <br> <br> 
    <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				<h1>Movie</h1>
				<p>SpiderMan<br>No Way Home</p>
			</div>
			<a href="../view/Filmat/SpiderMan1.html"><img src="img1/SpiderMan.jpg" ></a>
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Movie</h1>
				<p>Venom<br>Let There Be Carnage</p>
			</div>
			<a href="../view/Filmat/Venom.html"><img src="img1/Venom.jpg" ></a>
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Serial</h1>
				<p>Squid Games<br></p>
			</div>
            <a href="../view/Seriale/SquidGames.html"><img src="img1/SquidGames.jpg" ></a>
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Serial</h1>
				<p>La Casa De Papel<br></p>
			</div>
			<a href="../view/Seriale/LaCasaDePapel.html"><img src="img1/LaCasa.jpg" ></a>
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Anime</h1>
				<p>Dragon Ball Super: Broly<br></p>
			</div>
			<a href="../view/Anime/DragonBallSuper.html"><img src="img1/DragonBallSuper.jpg"></a>
		</div>

        <div class="myslide fade">
			<div class="txt">
				<h1>Anime</h1>
				<p>Naruto Shippuden<br></p>
			</div>
			<a href="../view/Anime/NarutoShippuden.html"><img src="img1/NarutoShippuden.png" ></a>
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>

		</div>
		<!-- /onclick js -->
	</div>

    <br>
    
    <div class = "flex">
        <a href="../view/Filmat/Batman.html">
        <img src="img/Movies/Batman.jpg">
        <h1>Batman</h1>
        <p>Aksion Adventure</p></a>

        
        <a href="../view/Filmat/SpiderMan1.html">
        <img src="img/Movies/SpiderMan1.jpg">
        <h1>Spider Man: No Way Home</h1>
        <p>Aksion Adventure</p></a>
          
        <a href="../view/Filmat/Venom.html">
        <img src="img/Movies/Venom.jpg">
        <h1>Venom: Let there be carnage</h1>
        <p>Aksion Adventure</p></a>
        
        <a href="../view/Filmat/Eternals.html">
        <img src="img/Movies/Eternals.jpg">
        <h1>Eternals</h1>
        <p>Aksion</p></a>
        
    </div>
    
    <div class = "flex">
        <a href="../view/Filmat/Shang-Chi.html">
        <img src="img/Movies/Shang-Chi.jpeg">
        <h1>Shang-Chi</h1>
        <p>Aksion Adventure</p>
         

        
        <a href="../view/Filmat/Free-Guy.html">
        <img src="img/Movies/Free-Guy.jpg">
        <h1>Free Guy</h1>
        <p>Komedi Aksion</p></a> 
        
        
   

        <a href="../view/Filmat/NoTimeToDie.html">
        <img src="img/Movies/NoTimeToDie.jpg">
        <h1>No Time To Die</h1>
        <p>Aksione Adventure</p></a> 
      
        

        <a href="../view/Filmat/F9.html">
        <img src="img/Movies/F9.jpg">
        <h1>F9</h1>
        <p>Aksion</p></a>
       
    </div>
    
    <div class = "flex">
        <a href="../view/Filmat/TheSuicideSquad.html">
            <img src="img/Movies/TheSuicideSquad.jpg">
            <h1>The Suicide Squad</h1>
            <p>Aksion Adventure</p></a>
       

        
        <a href="../view/Filmat/BlackWidow.html">
            <img src="img/Movies/BlackWidow.jpg">
            <h1>BlackWidow</h1>
            <p>Aksion Adventure</p></a> 
        
        
   

        <a href="../view/Filmat/SpiderManNWH.html">
            <img src="img/Movies/SpiderMan.jpg">
            <h1>Spider Man: Far From Home </h1>
            <p>Komedi</p></a> 
        
        

        <a href="../view/Filmat/HalloweenKills.html">
        <img src="img/Movies/Halloween Kills.jpg">
        <h1>Halloween</h1>
            <p>Horror</p></a>
        
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

    <script src="jsfile.js"></script>


</body>
</html>

        
