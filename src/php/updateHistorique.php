<?php session_start();
echo "Votre Identifiant". $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/button.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <label for="form"> Mise A jour de l'historique </label><br><br>

            <form action="accueil.php">
                <textarea name="hist" id="hist" cols="30" rows="10"
                    placeholder="Entrez Le Nouvel Historique pour votre Mairie"></textarea><br><br>
                <input type="submit" value="Enregistrer" name="submit" id="button">
            </form>
        </div>
    </body>

</html>

<?php
require('../../config/methode.php');

?>
<?php
// if(isset($_POST['hist'])){
//     updateHistorique($_SESSION['id'],16,$_POST['hist']);
//     header("location:historique.php");
// }else{
//     echo "Champ vide Veuillez remplir";
// }
?>
