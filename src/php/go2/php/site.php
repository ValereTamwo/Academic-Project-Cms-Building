<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/site.css">
        <title>Historique</title>
    </head>

    <body>
        <header>
            <div class="principal">
                <div class="logo">
                    <img src="/pa/icone.png" alt="" height=50vh />
                    <p>Mairie <span>Cameroon</span></p>
                </div>
                <ul>
                    <li> <a href="accueil.php">accueil</a></li>
                    <li> <a href="historique.php">Historique</a></li>
                    <li> <a href="annonce.php">Annonces</a></li>
                    <li> <a href="activite.php">Activites</a></li>
                    <li> <a href="publicite.php">Espace pub</a></li>
                    <li class="active"> <a href="site.php">Site touristiques</a></li>
                    <li> <a href="personnel.php">Personnel</a></li>
                    <li> <a href="projet.php">Projet</a></li>
                </ul>
            </div>
        </header>
        <?php
require('../../../config/methode.php');
printSite($_SESSION['id']);
        ?>

    </body>

</html>
