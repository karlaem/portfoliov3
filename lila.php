<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // links
    include("includes/header.php");
    ?>
    <title>DJ Lila a music portfolio design and development</title>
</head>
<body>

<div id="myWebApp" class="marginleft phonetop margins">
    <div  class="content casestudy">  
        <div class="intro">
            <h1 class="marbottom">DJ Lila a music portfolio design and development</h1>
            <div class="marbottom">
                <a href="http://karlamercado.com/lila" target="_blank"> View live site</a>
            </div>
            <img src="imgs/lilag.jpg" alt="DJ Lila a music portfolio design and development">
        </div> 
        <div class="summary">  
            <div class="left">
                <h3>Summary</h3>
                <p class="marbottom">I designed a website for a made up client, Lila, who has been working  for five years in the music industry and needs to launch her carrer to the next level.</p>
                <h3>Delivered</h3>
                <p class="marbottom">The main focus was project managment having to complete a website while learning new technologies.</p>
            </div> 
            <div class="right">
                <div class="casespecial marbottom">
                    <h3>Goals</h3>
                    <ul class="marbottom">
                        <li>To get more bookings to events.</li>
                        <li>Show people new tracks and events.</li>
                        <li>To promote new album.</li>
                    </ul>
                    <h3>Technologies</h3>
                    <p> Php, MySQL, HTML, Audio, Javascript & CSS.</p>
                    </div><!--.casespecial-->  
            </div>
        </div><!--.summary-->    
        <div class="features">
            <div class="caselogolila">
                    <h3>Logo</h3>
                    <p class="marbottom">The logo to reflects music and technology, the inspiration where the player icons and shapes.</p>
                    <img src="imgs/lila/version3.svg" alt="DJ lila logo">
                </div><!--.caselogo-->
            <div class="casecolors marbottom center">
                <h3>Colors</h3>
                <p>Cool colors, like the sunset because her music is calm and romantic but can be danceable when needed to.</p>
                <div class="colors">
                    <div class="color" id="lilapink">
                        <div class="circle"></div>
                        <p>#FF7B89</p>
                    </div>
                    <div class="color" id="lilap1">
                        <div class="circle"></div>
                        <p>#8A5082</p>
                    </div>
                    <div class="color" id="lilap2">
                        <div class="circle"></div>
                        <p>#705F93</p>
                    </div>
                    <div class="color" id="lilab1">
                        <div class="circle"></div>
                        <p>#758EB7</p>
                    </div>
                    <div class="color" id="lilab2">
                        <div class="circle"></div>
                        <p>#A5CAD2</p>
                    </div>
                </div>
            </div><!--.colors-->   
            <div class="logov">
                <h3>Logo versions</h3>
                <p>The logo was made in 3 versions</p>
                <img src="imgs/lila/version1.svg" alt="DJ lila logo">
                <img src="imgs/lila/version2.svg" alt="DJ lila logo">
                <img src="imgs/lila/version3.svg" alt="DJ lila logo">
            </div>
            <div class="caseweb">
                <p>Her website data comes from a database so in the future she could make bookings from her website, making it more than a simple DJ portfolio.</p>
                <p>For this project I learned to use Html video and sound tags combined with javascript to make a music player fot the new album.</p>
                <p class="marbottom">Electronic music is many time a combiantion of generes so I wanted to make black and white messy images as well as contrast with  purple and blue thinking about sunset and calmness.</p>
                <img src="imgs/lila/lilatour1.jpg" alt="lila website">
            </div><!--.casesweb--> 
        </div><!--.features-->   
        <div class="more marbottom">
            <h2 class="center  marbottom">See more projects</h2>
            <div class="cards">
            <a href="diverse.php">
                <div class='card'>
                    <img src="imgs/diverse.jpg" alt="Diverse dialogue, a blog site and portfolio for a broadcaster">
                    <h3>Diverse dialogue, a blog site and portfolio for a broadcaster.</h3>
                </div>
            </a><!--.diverse-->
            <a href="patches.php">
                <div class='card'>
                    <img src="imgs/camino.jpg" alt="Patches ecommerce design and development">
                    <h3>Patches ecommerce design and development</h3>
                </div>
            </a><!--.patches-->
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