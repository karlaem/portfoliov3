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
<div id="myWebApp" class="phonetop">
<div id="about" class="page marginleft">
    <div  class="content">
        <div class="aboutcontent">
            <div class="about">
                <h1>About me</h1>
                <div class="longtext">
                    <p>I am a front-end developer from Mexico now living in Vancouver, I want to help people make their ideas come true and to be a part of a creative team of people. I love learning about art and technology. You can contact me if you also share a passion for creation.</p>
                </div><!--.longtext-->
                <div class="resume">
                    <svg id="Capa_20" data-name="Capa 20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.88 30.65"><rect class="cls-1" x="0.5" y="0.5" width="20.88" height="29.65" rx="2.38"/><polyline class="cls-2" points="15.65 0.5 15.65 6.27 21.39 6.27"/></svg>
                    <a class="download" href="documents/karlaMercadoResume2021.pdf" target="_blank">resume.pdf</a>
                </div>
                <div class="skills">
                    <h2 class="center2" >What I do best</h2>
                    <div class="skillcontainer">
                        <div class="col">
                            <h3>Strategy & Branding</h3>
                            <ul>
                                <li>Research & Discovery</li>
                                <li>Brand Identity</li>
                                <li>Brand Guideline</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Digital Design</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>UI - UX Design</li>
                                <li>E-commerce</li>
                                <li>Packaging</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Coding</h3>
                            <ul>
                                <li>Front-end</li>
                                <li>Back-end</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Art & Animation</h3>
                            <ul>
                                <li>3D Modeling</li>
                                <li>Motion Graphics</li>
                                <li>Illustration</li>
                                <li>Film Edition & Visual Effects</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="process">
                    <div class="limage">
                        <img src="imgs/coffee.gif" alt="coffee">
                    </div>
                    <div class="rimage">
                        <h2>My process</h2>
                        <ol>
                            <li>Having a video call or a coffee and chat to understand how can I help you for your project.</li>
                            <li>We will analyse the problem together and shape the project.</li>
                            <li>Create a product that will make us proud.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--.aboutcontent-->
    </div><!--.content-->
</div><!--.about-->

<?php
// Navigation
$aboutActive = "active";
include("includes/nav.php");
?>   
</body>
</html>