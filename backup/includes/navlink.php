<?php
// array of navigation
$arrMenu = array(
    array('menu'=>'Home', 'link'=>'index.php', 'datanav' => 'home'),
    array('menu'=>'Work', 'link'=>'portfolio.php', 'datanav' => 'work'),
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
    <div class="margins">
        <nav role="navigation">
            <a data-nav="home" href="#" class="tinylogo"><img src="imgs/logomorado.svg" alt="Karla Mercado Portfolio Logo"></a>
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
</div>

<!--main menu-->
<div class="leftnav">
        <div class="nav">
            <!--optimized for seo, adding the logo h1 fist and the the nav-->
            <div class="logo">
                <a href="#" data-nav="home"><h1>Karla Mercado web developer digital animator and artist</h1></a>
            </div><!-- .logo -->
            <div class="menuRegular">
                <div class="nav">
                    <a href="index.php" data-nav="home">Home</a>
                    <a href="work.php" data-nav="work">Work</a>
                    <a href="about.php" data-nav="about">About</a>
                    <a href="contact.php" data-nav="contact">Contact</a>
                </div>
            </div> 

            <div class="socialmedia">
                <a class="links" href="https://www.linkedin.com/in/karlamercado/" target="_blank">
                <svg id="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23"><circle cx="3" cy="3" r="3"/><rect y="8" width="5" height="15"/><path d="M96.46,1026.59c-2,0-4,2-4,2v-1h-5v15h5v-10a3.84,3.84,0,0,1,3-2,2.09,2.09,0,0,1,2,1v11h5v-11S102.46,1026.59,96.46,1026.59Z" transform="translate(-79.46 -1019.59)"/></svg>
                </a>
                <a class="links" href="https://dribbble.com/karlaem" target="_blank">
                <svg id="dribble" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"><path d="M153.42,1021.59a11,11,0,1,0,11,11A11,11,0,0,0,153.42,1021.59Zm9.15,10.66a26.91,26.91,0,0,0-6.93.14c-.08-.25-.16-.48-.23-.67a5.57,5.57,0,0,0-.23-.52,20.82,20.82,0,0,0,5.36-4.38A9.14,9.14,0,0,1,162.57,1032.25Zm-3.34-6.75a42.89,42.89,0,0,1-5,3.94c-1.25-2.06-3-4.49-3.76-5.52a9.13,9.13,0,0,1,8.78,1.58Zm-10.24-.93c.69,1,2.36,3.49,3.61,5.47a50.31,50.31,0,0,1-8.07.35A9.11,9.11,0,0,1,149,1024.57Zm-4.74,8c0-.19,0-.38,0-.56a53,53,0,0,0,9.33-.34c.16.29.3.54.39.72s.12.29.18.46c-2.27,1.11-6,4.26-7.66,5.74A9.1,9.1,0,0,1,144.25,1032.59Zm3.37,7.1a56.68,56.68,0,0,1,7-5.23c.62,2.32,1.3,5.67,1.54,6.86a9.22,9.22,0,0,1-8.59-1.63Zm10.23.92c-.23-1-1-4.15-1.72-6.63a35.93,35.93,0,0,1,6.33,0A9.15,9.15,0,0,1,157.85,1040.61Z" transform="translate(-142.42 -1021.59)"/></svg>
                </a>
                <a class="links" href="https://github.com/karlaem" target="_blank">
                <svg id="github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.27 21.72"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><path class="cls-1" d="M215.88,1021.59a11.13,11.13,0,0,0-3.52,21.7c.56.1.76-.24.76-.54s0-1,0-1.89c-3.09.67-3.75-1.49-3.75-1.49a2.91,2.91,0,0,0-1.23-1.63c-1-.69.07-.68.07-.68a2.35,2.35,0,0,1,1.71,1.15,2.36,2.36,0,0,0,3.24.92,2.37,2.37,0,0,1,.71-1.49c-2.48-.28-5.08-1.23-5.08-5.5a4.32,4.32,0,0,1,1.15-3,4,4,0,0,1,.11-2.94s.93-.3,3.06,1.14a10.43,10.43,0,0,1,5.58,0c2.12-1.44,3.06-1.14,3.06-1.14a4,4,0,0,1,.11,2.94,4.31,4.31,0,0,1,1.14,3c0,4.28-2.6,5.22-5.08,5.5a2.64,2.64,0,0,1,.75,2.06c0,1.49,0,2.69,0,3s.2.65.77.54a11.14,11.14,0,0,0-3.53-21.7Z" transform="translate(-204.74 -1021.59)"/></svg>
                </a>          
            </div>
        </div><!--.nav-->
</div><!--.left-->

<div class="margins">
    <div class="ipadnav">
        <div class="menuipad">
            <a href="index.php" data-nav="home">Home</a>
            <a href="work.php"  data-nav="work">Work</a>
            <a href="about.php"  data-nav="about">About</a>
            <a href="contact.php"  data-nav="contact">Contact</a>
        </div> 
    </div>
</div>