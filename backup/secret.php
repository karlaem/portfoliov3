<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // links
    include("includes/header.php");
    ?>
    <title>Secret menu design and development</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<div id="myWebApp" class="marginleft phonetop margins">
    <div  class="content casestudy">  
        <div class="intro">
            <h1 class="marbottom">Secret menu website and responsive app development & design</h1>
            <div class="marbottom">
                <a href="http://karlamercado.com/secretmenu/" target="_blank"> View live site</a>
            </div>
            <img src="imgs/secretg.jpg" alt="Secret menu website and responsive app">
        </div> 
        <div class="summary">  
            <div class="left">
                <h3>Summary</h3>
                <p class="marbottom">This website allows you to easily find secret menus for specific restaurants.</p>
                <h3>My role</h3>
                <p class="marbottom">I designed and develop the app</p>
                <h3>Technologies</h3>
                <p class="marbottom"> Php, MySQL, HTML, Javascript & CSS.</p>
                <h3>Features</h3>
                <p>Responsive, Validate fields, User can submit secret menus</p>
            </div> 
            <div class="right spoon">
                <img src="imgs/secret/logochocolate.svg" alt="logo has a secret">
            </div>
        </div><!--.summary-->    
        <div class="features">
            <div class="caselogo3">
                    <h3>Logo</h3>
                    <p class="marbottom">Logo is here to find secrets, he is specially interested in food.</p>
                    <div class="logito">
                        <div class="eye eye1">
                            <div class="pupil"></div>
                        </div>
                        <div class="eye eye2">
                            <div class="pupil"></div>
                        </div>
                    </div>
                    <!--<img src="imgs/secret/secretlogo.svg" alt="secret secret secret logo">-->
                </div><!--.caselogo-->
            <div class="casecolors marbottom center">
                <h3>Colors</h3>
                <p>I choose this colors because I wanted the sections to be separate, have high contrast and I wanted the app to appeal to a young audience.</p>
                <div class="colors">
                    <div class="color" id="secretblack">
                        <div class="circle"></div>
                        <p>#4C4C4C</p>
                    </div>
                    <div class="color" id="secrethover">
                        <div class="circle"></div>
                        <p>#F8D996</p>
                    </div>
                    <div class="color" id="secretpurple">
                        <div class="circle"></div>
                        <p>#ABA5EB</p>
                    </div>
                    <div class="color" id="secret">
                        <div class="circle"></div>
                        <p>#558EC5</p>
                    </div>
                </div>
            </div><!--.colors-->  
            <div class="casefonts3">
                <h3 class="center">Fonts</h3>
                <div class="fontcontainer">
                    <div class="font">
                        <h1 class="montserrat">Montserrat</h1>
                        <p class="montserrat">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                    </div>
                    <div class="font">
                        <p class="montserrat">I choose this font because is sans serif and looks good on a website, is geometrical and have high contrast.</p>
                    </div>
                </div>
            </div><!--.fonts--> 
            <div class="caseweb">
                <img src="imgs/secret/secretmockup.jpg" alt="secret secret secret website design mockup">
                <img src="imgs/secret/secretweb2.jpg" alt="secret secret secret website design mockup">
            </div><!--.casesweb--> 
            <div class="col2">
               <div class= "col">
               <img src="imgs/secret/flow.png" alt="flow chart">
               </div>
               <div class= "col">
                   <p>The fow chart represents the happy path or the easier way to find a secret menu I did the design based on mobile first, so it was very responsive and easy to use.</p>
               </div>
            </div><!--.col2--> 
            <div class="col2">
               <div class= "col">
               <img src="imgs/secret/secretvalidation.jpg" alt="validation msg">
               </div>
               <div class= "col">
                    <img class="icon" src="imgs/secret/logosuccess.png" alt="validation msg">
                    <img class="icon" src="imgs/secret/logoerror.png" alt="validation msg">
                   <h3>validation messages</h3>
                   <p>Logo is always there for you with validation messages ready to help.</p>
               </div>
            </div><!--.col2--> 

        </div><!--.features-->   
        <div class="more marbottom">
            <h2 class="center  marbottom">See more projects</h2>
            <div class="cards">
            <a href="scoop.php">
                    <div class='card'>
                        <img src="imgs/scoopg.jpg" alt="Ice cream company branding">
                        <h3>Ice cream company branding, logo, social media & stickers design</h3>
                    </div>
                </a><!--.scoop-->
                <a href="dress.php">
                    <div class='card'>
                        <img src="imgs/dress.jpg" alt="The dress ecomerce landing page design and branding">
                        <h3>The dress ecomerce landing page design and branding</h3>
                    </div>
                </a><!--.dress-->
            </div><!--.cards-->
        </div><!--.more-->
    </div><!--.content-->
</div>

<?php
// Navigation
$homeActive = "active";
include("includes/navlink.php");
?>  
 <script src="js/eyes.js"></script> 
</body>
</html>