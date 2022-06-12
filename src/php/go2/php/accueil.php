<?php session_start()?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>template de programmation web</title>
    </head>

    <body>
        <header>
            <div class="principal">
                <div class="logo">
                    <img src="/pa/icone.png" alt="" height=50vh />
                    <p>Mairie <span>Batcham</span></p>
                </div>
                <ul>
                    <li class="active"> <a href="accueil.php">accueil</a></li>
                    <li> <a href="historique.php">Historique</a></li>
                    <li> <a href="annonce.php">Annonces</a></li>
                    <li> <a href="activite.php">Activites</a></li>
                    <li> <a href="publicite.php">Espace pub</a></li>
                    <li> <a href="site.php">Site touristiques</a></li>
                    <li> <a href="personnel.php">Personnel</a></li>
                    <li> <a href="projet.php">Projet</a></li>
                </ul>
            </div>
            <div class="titre">
                <h1>Bienvenu <span>a la Mairie de Batcham</span></h1>
            </div>
            <div class="bouton">
                <a href="accueil.html" class="btn">VISITER</a>
                <a href="conctact.html" class="btn">CONTACTER</a>
            </div>
        </header>
        <div>

            <p> <?php 
            require('../../../config/methode.php');
             require('../../../config/methode.php');

echo $_SESSION['id'];
getHistory($_SESSION['id']);
          ?>

                printMission($_SESSION['id'])?></p>
            <p>.</p>
        </div>
    </body>

</html>
