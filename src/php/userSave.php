<?php
session_start();
$_SESSION['name'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];

 ?>
<?php
 require('../../config/methode.php');
?>

<?php
    if(SaveUser($_POST['login'],$_POST['pass'])){
    $_SESSION['id'] = getUserId($_POST['login'], $_POST['pass']);
     header('location:accueil.php');

    }else{
    echo "<h2>OOPS an error occurs while saving :(</h2> ";
    }
 ?>


// $admin = new User($_POST['login'], $_POST['pass']);
// if ($admin->AddUser()) {
// echo "Insertion reussie ";
// }

// if(SaveUser($_POST['login'], $_POST['pass'])){

// echo "<i>Succesfull Insertion to databse ... Now get connect and Start building Sites</i>";
// }
// else{
// echo "Operation Failed ...";
// }
