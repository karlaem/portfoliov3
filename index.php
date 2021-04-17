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
            <div class="switchcontainer">
                <input class="container_toggle" type="checkbox" id="switch" name="mode"  onclick="myFunction()">
                <label for="switch">Toggle</label>
            </div>
            <div class="hero">
                <div class="circle"></div>
                <div class="herotext">
                    <h1 class="tinytext">Hello I'm Karla Mercado</h1>
                    <h1>I’m a creative front-end developer looking to work at an agency and eager to bring projects to life through thoughtful design solutions.</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   
    <script src="js/main.js"></script>
</body>
</html>