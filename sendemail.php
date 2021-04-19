<?php

if($_POST["msg"]) {

mail("karlaest20@gmail.com", $_POST["subject"],

$_POST["msg"]. "from".$_POST['email']);

header("location: index.php?success=1");

}else{
    header("location: index.php?error=1");
}
?>