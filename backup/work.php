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
    <title>Karla Mercado Web Developer and Front End Designer Portfolio Work</title>
</head>
<body>  
<div class="nav marginleft phonetop navwork">
    <h1>My work</h1>
    <a href="work.php?category=1">Web Development</a>
    <a href="work.php?category=2">Animation</a>
</div>
    <div id="work" class="page marginleft phonetop">
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
                            </a><!--.patches-->
                        </div>
                   
                
                    <?php
                    }?>
                    </div>
            </div>
        </div>
    </div><!--.work-->
<?php
// Navigation
$workActive = "active";
include("includes/nav.php");
?>   
</body>
</html>