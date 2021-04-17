<?php
include("classes/DB.php");
include("classes/Projects.php");
include("classes/Projectlist.php");
?>
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
    <div class="container">
        <div class="margins">
            <!--home-->
            <div class="switchcontainer">
                <input class="container_toggle" type="checkbox" id="switch" name="mode"  onclick="myFunction()">
                <label for="switch">Toggle</label>
            </div>
            <div id="home" class="hero">
                <div class="circle"></div>
                <div class="herotext">
                    <h1 class="tinytext">Hello I'm Karla Mercado</h1>
                    <h1>I’m a creative front-end developer looking to work at an agency and eager to bring projects to life through thoughtful design solutions.</h1>
                    <a  href="#" class="cta">Contact me</a>
                    <img class="rightimg" src="imgs/Phone.gif" alt="hand with phone gif animation made by karla">
                </div>
            </div><!--.hero-->

            <!--work-->
            <div class="navwork">
                <h1>Selected Work</h1>
                <a href="index.php?category=1">Web Development</a>
                <a href="index.php?category=2">Animation</a>
            </div>
            <div id="work" class="page">
                <div class="content">
                    <div class="workcontent">
                        <div class="cards">
                            <?php
                            $category = isset($_GET['category']) ? $_GET['category'] : '1';                     
                            //show a list of projects
                            foreach(Projects::getCategory($category) as $value) {
                            $link = isset($value->link) ? $value->link : '#';  
                            ?>
                                <div class='card'>
                                    <?php
                                    if($value->video){
                                    ?>
                                    <video width="100%" controls  controlsList="nodownload" poster="imgs/poster.jpg">
                                    <source src="imgs/<?=$value->video?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <?php
                                    }
                                    ?>
                                    <a href=<?=$link?>>
                                    <?php
                                    if($value->image){
                                    ?>
                                    <img src="imgs/<?=$value->image?>" alt="<?=$value->name?>">
                                    <?php
                                    }
                                    ?>
                                    <h3><?=$value->name?></h3>
                                    </a>
                                </div>
                            <?php
                            }?>
                        </div>
                    </div>
                </div>
            </div><!--.work-->

        </div><!--.margins-->
    </div>
    <?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   
    <script src="js/main.js"></script>
</body>
</html>