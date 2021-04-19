<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // links
    include("includes/header.php");
    ?>
    <title>Whats the scoop design</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Oxygen&display=swap" rel="stylesheet">
</head>
<body>

<div id="myWebApp" class="marginleft phonetop margins">
    <div  class="content casestudy">  
        <div class="intro">
            <h1 class="marbottom">Ice cream company branding, logo, social media & stickers design</h1>
            <img src="imgs/scoopg.jpg" alt="Ice cream company branding">
        </div> 
        <div class="summary">  
            <div class="left">
                <h3>Summary</h3>
                <p class="marbottom">Branding made for a family in Vancouver who wanted to start their ice cream business</p>
                <h3>We deliver</h3>
                <p class="marbottom"> Business name, Logo, Packagin, Website Design, Social Media Kit & Stickers</p>
                <h3>In collaboration with</h3>
                <p>@nicoleshouten</p>
                <p>@ayakade</p>
            </div> 
            <div class="right spoon">
                <img src="imgs/scoop/scoop.svg" alt="scoop vector icecream">
            </div>
        </div><!--.summary-->    
        <div class="features">
            <div class="caselogo2">
                    <h3>Logo</h3>
                    <p class="marbottom">The Domain name we chose is what's the scoop, we made a logo using the golden proportions, we wanted something that could look good both in web and printed and cold work with different colors.</p>
                    <img src="imgs/scoop/scoopline.png" alt="What's the scoop logo">
                </div><!--.caselogo-->
            <div class="casecolors marbottom center">
                <h3>Colors</h3>
                <p>We wanted colors that represent sweet flavours. Each flavor is a color</p>
                <div class="colors">
                    <div class="color" id="green">
                        <div class="circle"></div>
                        <p>#A5C379</p>
                    </div>
                    <div class="color" id="pink">
                        <div class="circle"></div>
                        <p>#FFA8A7</p>
                    </div>
                    <div class="color" id="orange">
                        <div class="circle"></div>
                        <p>#F4C68A</p>
                    </div>
                    <div class="color" id="bluescoop">
                        <div class="circle"></div>
                        <p>#4AB0B2</p>
                    </div>
                    <div class="color" id="yellow">
                        <div class="circle"></div>
                        <p>#F9EEA0</p>
                    </div>
                    <div class="color" id="brown">
                        <div class="circle"></div>
                        <p>#A47A53</p>
                    </div>
                </div>
            </div><!--.colors-->  
            <div class="casefonts2">
                <h3 class="center">Fonts</h3>
                <div class="fontcontainer">
                    <div class="font">
                        <h1 class="aleo">Aleo Bold</h1>
                        <p class="aleo">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                    </div>
                    <div class="font">
                        <h1 class="oxygen">Oxygen Regular</h1>
                        <p class="oxygen">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                    </div>
                </div>
            </div><!--.fonts--> 
            <div class="caseweb">
                <img src="imgs/scoop/scoopweb.jpg" alt="what's the scoop website design mockup">
            </div><!--.casesweb--> 
            <div class="casepack marbottom">
                <h3>Packaging</h3>
                <p>Our packaging was design considering the audience to be kids and their parents, we wanted to transmit the quality of our product to our custumers.</p>
                <img src="imgs/scoop/revised-package.png" alt="what's the scoop label design">
                <img src="imgs/scoop/icecream.jpg" alt="final packaging">
            </div><!--.casespack--> 
            <div class="casesocial marbottom">
                <h3>Social Media</h3>
                    <div class="col2">
                        <div class= "col">
                            <img src="imgs/scoop/ig-1.png" alt="scoop social media">
                        </div>
                        <div class= "col">
                            <img src="imgs/scoop/sns-2.png" alt="scoop social media">
                        </div>
                    </div><!--.col2-->
            </div><!--.casesocial-->    
            <div class="casesticker marbottom">
                <h3>Stickers</h3>
                <p>I desgined ready for print sticker set to give one with every purchase</p>
                <div class="col3">
                    <img src="imgs/scoop/sticker1.jpg" alt="stickers mockup">
                    <img src="imgs/scoop/sticker3.jpg" alt="stickers mockup">
                    <img src="imgs/scoop/sticker5.jpg" alt="stickers mockup">
                </div>
                <img src="imgs/scoop/sticker2.jpg" alt="stickers ready for print">
                <div class="col3">
                    <img src="imgs/scoop/pink-scoop.png" alt="stickers mockup">
                    <img src="imgs/scoop/blue-scoop.png" alt="stickers mockup">
                    <img src="imgs/scoop/green-scoop.png" alt="stickers mockup">
                </div>
            </div><!--.casesticker-->   
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
                <a href="secret.php">
                    <div class='card'>
                        <img src="imgs/secretg.jpg" alt="Secret menu website and responsive app">
                        <h3>Secret menu website and responsive app</h3>
                    </div>
                </a><!--.secret-->
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
</div> 
</body>
</html>