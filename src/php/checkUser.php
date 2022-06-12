<?php
session_start();
$_SESSION['name'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['id'] //= getUserId($_POST['login'], $_POST['pass']);


?>
<?php require ('../../config/methode.php')?>
<?php

if(checkinfo($_POST['login'], $_POST['pass'])){
    $_SESSION['id'] = getUserId($_POST['login'], $_POST['pass']) ;
    header("location:accueil.php");
}
else{
    echo " <h1 color = red > Warning unfound user :( . please register and get Connect... </h1> ";
}
    // 

?>
