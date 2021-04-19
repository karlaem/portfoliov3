<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // links
    include("includes/header.php");
    ?>
    <title>Making of 12 Dias Student Short Film</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

<div id="myWebApp" class="marginleft phonetop margins">
    <div  class="content casestudy">  
        <div class="intro">
            <h1 class="marbottom">Making of 12 Dias Student Short Film</h1>
            <img src="imgs/12.jpg" alt="Making of 12 Dias Student Short Film">
        </div> 
        <div class="summary">  
            <div class="left">
                <h3>Summary</h3>
                <p class="marbottom">12 Dias is the story of Carmelita a red rose who dreams of becoming a gift and a symbol of true love, she is helped by Keni who buys a flower daily for his girlfriend Lara in the course of 12 days.</p>
                <h3>Made by</h3>
                <p class="marbottom">Kevin Perez & Karla Mercado</p> 
            </div> 
            <div class="right">
            </div>
        </div><!--.summary-->    
        <div class="features">
            <div class="storyboard marbottom">
                <h2>Storyboard</h2>
                <video width="100%" controls controlsList="nodownload" poster="imgs/dias/storyboard.jpg">
                <source src="imgs/dias/12diasvideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
            <div class="characters marbottom">
                <h2>Character Design</h2>
                <img src="imgs/dias/carmelita.jpg" alt="Carmelita">
                <img src="imgs/dias/keni.jpg" alt="Keni">
                <img src="imgs/dias/lara.png" alt="Lara">
                <video width="100%" controls controlsList="nodownload" poster="imgs/dias/Sketch.jpg">
                <source src="imgs/dias/lineup.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
            <div class="music marbottom">
                <h2>Music Production</h2>
                <p>Produced By Esteban Rodarte visit his site on:</p>
                <a href="https://www.facebook.com/GuanabanaProducciones" target="_blank" rel="noopener noreferrer">Guanabana Productions</a>
            </div>
            <div class="final">
                <h2>View full project</h2>
            <video width="100%" controls  controlsList="nodownload" poster="imgs/poster.jpg">
                                <source src="imgs/12DIAS.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
            </div>
        </div><!--.features-->   
        <div class="more marbottom">
            <h2 class="center  marbottom">See more projects</h2>
            <div class="cards">
            <a href="patches.php">
                <div class='card'>
                    <img src="imgs/camino.jpg" alt="Patches ecommerce design and development">
                    <h3>Patches ecommerce design and development</h3>
                </div>
            </a><!--.patches-->
            <a href="scoop.php">
                <div class='card'>
                    <img src="imgs/scoopg.jpg" alt="Ice cream company branding">
                    <h3>Ice cream company branding, logo, social media & stickers design</h3>
                </div>
            </a><!--.scoop-->
            </div><!--.cards-->
        </div><!--.more-->
    </div><!--.content-->
</div>

<?php
// Navigation
include("includes/nav.php");
?>   
<div class="decorfooter">
<?php
// footer
include("includes/footer.php");
?>  
</body>
</html>