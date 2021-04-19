<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // links
    include("includes/header.php");
    ?>
    <title>Karla Mercado Web Developer and Front End Designer Portfolio Home</title>
</head>
<body>
<div id="myWebApp" class="marginleft phonetop">
    <div id="home" class="page">
        <div  class="content">
            <div class="msg">
                <?php
                //check error messages
                if (isset($_GET["error"])){                        
                echo '<div class="error"><h2>Something went wrong. Try Again</h2</div>';
                }
                if (isset($_GET["success"])){                        
                echo '<div class="success"><h2>Thank you your message was send</h2></div>';
                }
                ?>
            </div>
            <div class="homecontent">
                <div class="hometext">
                    <section class="container hide">
                        <h1 class="name">
                        <span class="title">Hello, I am </span>
                        <span class="title">Karla Mercado</span>
                        </h1>
                    </section>
                    <h1 class="title2">Hello, I'm Karla Mercado</h1>
                    <h2 class="center3">I’m a creative front-end developer looking to work at an agency and eager to bring projects to life through thoughtful design solutions.</h2>
                    <a  href="work.php" class="cta">See my work</a>
                    <img class="bighide" src="imgs/compuwire.gif" alt="computer image">
                </div><!--.hometext-->
            </div><!--.homecontent-->
        </div>
    </div><!--.home-->    
</div>
<?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   

</body>
</html>