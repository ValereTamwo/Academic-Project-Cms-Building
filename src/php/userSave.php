<?php
 require('../../config/methode.php');

// $admin = new User($_POST['login'], $_POST['pass']);
// if ($admin->AddUser()) {
//     echo "Insertion reussie ";
// }

if(SaveUser($_POST['login'], $_POST['pass'])){
    
    echo "<i>Succesfull Insertion to databse ... Now get connect and Start building Sites</i>";
}
else{
    echo "Operation Failed  ...";
}