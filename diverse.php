<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // links
    include("includes/header.php");
    ?>
    <title>Diverse dialogue, a blog site and portfolio for a broadcaster.</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<div id="myWebApp" class="marginleft phonetop margins">
    <div  class="content casestudy">  
        <div class="intro">
            <h1 class="marbottom">Diverse dialogue, a blog site and portfolio for a broadcaster.</h1>
            <div class="marbottom">
                <a href="http://karlamercado.com/blog" target="_blank"> View live site</a>
            </div>
            <img src="imgs/diverse.jpg" alt="Diverse dialogue, a blog site and portfolio for a broadcaster">
        </div> 
        <div class="summary">  
            <div class="left">
                <h3>Summary</h3>
                <p class="marbottom">Design and development of portfolio site for Meriahza Khan a broadcaster and writer.</p>
                <h3>My role</h3>
                <p class="marbottom">The focus of the project was to talk to a real client and solve her problems. It was a challenge on time managment & comunication. I solved by talking through zoom calls and delivering progress weekly. By the end I delivered a 5 page portfolio website and a branding that represent Meriahza charming and fun personality.</p>
            </div> 
            <div class="right">
                <div class="casespecial marbottom">
                    <h3>Features</h3>
                    <ul class="marbottom">
                        <li>Is ready for future adding of a cms</li>
                        <li>Can listen to her podcast on site</li>
                        <li>Seo friendly</li>
                        <li>Responsive</li>
                    </ul >
                    <h3>Technologies</h3>
                    <p> Php, MySQL, HTML, Audio, Javascript & CSS.</p>
                    </div><!--.casespecial-->  
            </div>
        </div><!--.summary-->    
        <div class="features">
            <div class="caselogodd">
                    <h3>Logo</h3>
                    <p class="marbottom">The logo is Meriahza's face talking and the letters from Diverse Dialogue connecting</p>
                    <img src="imgs/diverse/logo-g.svg" alt="Camino view ecommerce logo">
                </div><!--.caselogo-->
            <div class="casecolors marbottom center">
                <h3>Colors</h3>
                <p>I used teal color because it represents the uniqueness and creativity of Meriahza</p>
                <div class="colors">
                    <div class="color" id="ddlight">
                        <div class="circle"></div>
                        <p>#69DDD0</p>
                    </div>
                    <div class="color" id="ddhover">
                        <div class="circle"></div>
                        <p>#01766D</p>
                    </div>
                    <div class="color" id="dd">
                        <div class="circle"></div>
                        <p>#1FA397</p>
                    </div>
                </div>
            </div><!--.colors-->  
            <div class="casefontsdd">
                <h3 class="center">Fonts</h3>
                <div class="fontcontainer">
                    <div class="font">
                    <h1 class="abril">Abril Fatface</h1>
                    <p class="abril">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z.</p>
                    </div>
                    <div class="font">
                    <h1 class="open">Open sans</h1>
                    <p class="open">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                    </div>
                </div>
            </div><!--.fonts--> 
            <div class="caseweb">
                <h3 class="center" >wireframes</h3>
                <img src="imgs/diverse/wireframes.jpg" alt="diverse dialogue wireframes">
            </div><!--.casesweb--> 
        </div><!--.features-->   
        <div class="more marbottom">
            <h2 class="center  marbottom">See more projects</h2>
            <div class="cards">
                <a href="dress.php">
                    <div class='card'>
                        <img src="imgs/dress.jpg" alt="The dress ecomerce landing page design and branding">
                        <h3>The dress ecomerce landing page design and branding</h3>
                    </div>
                </a><!--.dress-->
                <a href="lila.php">
                    <div class='card'>
                        <img src="imgs/lilag.jpg" alt="DJ Lila a music portfolio design and development">
                        <h3>DJ Lila a music portfolio design and development</h3>
                    </div>
                </a><!--.lila-->
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