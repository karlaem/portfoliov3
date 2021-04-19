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
                <label class="slabel" for="switch">Toggle</label>
            </div>
            <div id="home" class="hero">
                <div class="circle"></div>
                <div class="herotext">
                    <h1 class="tinytext">Hello I'm Karla Mercado</h1>
                    <h1>I’m a creative front-end developer looking to work at an agency and eager to bring projects to life through thoughtful design solutions.</h1>
                    <a  href="#contact" class="cta">Contact me</a>
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

            <div class="about" id="about">
                <div class="left">
                </div><!--.left-->
                <div class="right">
                    <h1>About me</h1>
                    <p>Born in Monterrey Mexico I am passionate about art and design, I am dedicated, creative, and self-driven. I believe design is about equity and accessibility, it is for everyone to enjoy. I learned web development and interactive design at Vanarts, I became interested in programming after graduating from Digital Art and Animation at Tecnologico de Monterrey. </p>
                    <p>You can download <a class="download" href="documents/karlaMercadoResume2021.pdf" target="_blank">my resume</a> or contact me for more information. Talk to me if you also share a passion for creation, or if you need me for a project through my social media on:</p>
                    <div class="social">
                        <a class="links" href="https://www.linkedin.com/in/karlamercado/" target="_blank">Linkedin</a>
                        <a class="links" href="https://dribbble.com/karlaem" target="_blank">Dribbble</a>
                        <a class="links" href="https://github.com/karlaem" target="_blank">Github</a>  
                        <a class="links" href="https://mail.google.com/mail/?view=cm&fs=1&to=karlaest20@gmail.com&su=Contact&body=Message" target="_blank">Mail</a>
                    </div><!--.social-->
                </div><!--.right-->
            </div><!--.about-->

            <div class="contact" id="contact">
                <div class="left">
                    <h1>Contact me</h1>
                    <div class="form">
                        <form id="contactform"  method="post" action="sendemail.php" enctype="multipart/form-data" name="EmailForm">
                            <div class="fieldgroup required">
                                <input type="text" id="name" name="name" placeholder="Name">
                                <div class="popup">        
                                    <p>Write your name</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup required">
                                <input type="text" id="email" name="email" placeholder="Email">
                                <div class="popup">              
                                    <p>Write your email</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup">
                                <select name="subject">
                                    <option class="options" value="ksubject">Subject</option>
                                    <option class="options" value="knowMore">Know more information</option>
                                    <option class="options" value="resume">Ask for resume</option>
                                    <option class="options" value="hire">Hire me &#128516;</option>
                                    <option class="options" value="tips">Tips on coding, art or design</option>
                                    <option class="options" value="question">Questions</option>
                                    <option class="options" value="chat">Chat</option>
                                </select>
                                <div class="popup">                
                                    <p>Write your name</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup required">
        
                                <textarea id="msg" name="msg" placeholder="Write something.."></textarea>
                                <div class="popup">               
                                    <p>Write your Message</p>
                                </div>  
                            </div><!--.fieldgroup-->

                            <input class="cta" type="submit" value="Send">
                        </form>
                    </div>
                </div><!--.left-->
                <div class="right">
                <img  src="imgs/hand.gif" alt="hand with flower gif animation made by karla">
                </div><!--.right-->
            </div><!--.contact-->
            <?php
            // footer
            include("includes/footer.php");
            ?>   
        </div><!--.margins-->
    </div>
<?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
</body>
</html>