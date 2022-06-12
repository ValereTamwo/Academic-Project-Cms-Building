<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylepresentaion.css">
        <title>presentation</title>
    </head>

    <body>
        <div>
            <nav class="menu" role="tablist">
                <a href="index.php" role="tab">Accueil</a>
                <a href="presentation.php" role="tab">Présentation</a>
                <a href="annonce.php" role="tab">Annonce</a>
                <a href="projet1.php" role="tab">Projets</a>
                <a href="activite1.php" role="tab">Activités</a>
                <a href="site.php" role="tab">Lieux touristique</a>
                <a href="#" role="tab">contact</a>
                <a href="#" role="tab">
                    &#129299; deconnexion &#8669; </a>
            </nav>
        </div>
        <br>
        <div id="banner">
            <div id="header">
                <h1>Annonce</h1>
                <p class="sub">Mern CMS</p>
            </div>
        </div>

        <div>

            <?php
require('../../../config/methode.php');
            printAnnonce($_SESSION['id']);
        ?>

        </div>

        <br><br><br><br><br>
        <!-- FOOTER START -->
        <div class="footer">
            <div class="contain">


                <div class="col">
                    <h1>Accueil</h1>
                    <ul>
                        <li>Accueil</li>
                    </ul>
                </div>



                <div class="col">
                    <h1>Presentaion</h1>
                    <ul>
                        <li>presentation</li>

                    </ul>
                </div>
                <div class="col">
                    <h1>Projets</h1>
                    <ul>
                        <li>Projets</li>

                    </ul>
                </div>

                <div class="col">
                    <h1>Activités</h1>
                    <ul>
                        <li>Activités</li>
                    </ul>
                </div>

                <div class="col">
                    <h1>site touristique</h1>
                    <ul>
                        <li>site touristique</li>
                    </ul>

                </div>
                <div class="col">
                    <h1>contact</h1>
                    <ul>
                        <li> +237 680 80 80 80</li>

                    </ul>
                </div>
                <div class="col social">
                    <h1>Social</h1>
                    <ul>
                        <li><img src="image/message.svg" width="32" style="width: 32px;"></li>
                        <li><img src="image/google.svg" width="32" style="width: 32px;"></li>
                        <li><img src="image/apple.svg" width="32" style="width: 32px;"></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END OF FOOTER -->


    </body>

</html>
