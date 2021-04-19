<?php
// array of navigation
$arrMenu = array(
    array('menu'=>'Home', 'link'=>'index.php', 'datanav' => 'home'),
    array('menu'=>'Work', 'link'=>'index.php#work', 'datanav' => 'work'),
    array('menu'=>'About', 'link'=>'index.php#about', 'datanav' => 'about'),
    array('menu'=>'Contact', 'link'=>'index.php#contact', 'datanav' => 'contact'),
);
// active
$homeActive = (isset($homeActive)) ? $homeActive : "";
$workActive = (isset($workActive)) ? $workActive : "";
$aboutActive = (isset($aboutActive)) ? $aboutActive : "";
$contactActive = (isset($contactActive)) ? $contactActive : "";
?>

<!--responsive menu-->
<div class="fixedtop">
    <nav role="navigation">
        <a data-nav="home" href="index.php" class="tinylogo"><img src="imgs/logows.svg" alt="Karla Mercado Portfolio Logo"></a>
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <?php
                //show regular menu
                foreach ($arrMenu as $key => $nav) {
                ?>
                <a href="<?=$nav["link"]?>"><li><?=$nav["menu"]?></li></a>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav><!--end of nav-->
</div>

<!--main menu-->


<div class="leftnav">
    <div class="nav">
        <div class="menuRegular">
            <div class="nav">
                <a href="index.php" data-nav="home">Home</a>
                <a href="index.php#work" data-nav="work">Work</a>
                <a href="index.php#about" data-nav="about">About</a>
                <a href="index.php#contact" data-nav="contact" class="highlighted">Contact</a>
            </div>
        </div> 
    </div><!--.nav-->
</div>
     
<div class="logo">
    <a href="index.php" data-nav="home"><h1>Karla Mercado web developer digital animator and artist</h1></a>
</div><!-- .logo -->



