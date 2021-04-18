<?php
// array of navigation
$arrMenu = array(
    array('menu'=>'Home', 'link'=>'index.php', 'datanav' => 'home'),
    array('menu'=>'Work', 'link'=>'#work', 'datanav' => 'work'),
    array('menu'=>'About', 'link'=>'about.php', 'datanav' => 'about'),
    array('menu'=>'Contact', 'link'=>'contact.php', 'datanav' => 'contact'),
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
                <a href="#work" data-nav="work">Work</a>
                <a href="about.php" data-nav="about">About</a>
                <a href="contact.php" data-nav="contact" class="highlighted">Contact</a>
            </div>
        </div> 
    </div><!--.nav-->
</div>
     
<div class="logo">
    <a href="index.php" data-nav="home"><h1>Karla Mercado web developer digital animator and artist</h1></a>
</div><!-- .logo -->



