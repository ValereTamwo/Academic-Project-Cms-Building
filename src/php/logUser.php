<?php
 require('../../config/methode.php');
session_start([]);
if(CheckUser($_POST['login'], $_POST['pass'])==false){
    echo "Warning ... Unfound account , Please Register First";
}else{
    $idUser = CheckUser($_POST['login'], $_POST['pass']);
}