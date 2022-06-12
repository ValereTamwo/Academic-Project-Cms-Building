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
                <a href="index.sphp" role="tab">Accueil</a>
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
                <h1>activite</h1>
                <p class="sub"></p>
            </div>
        </div>

        <div>

            <?php
require('../../../config/methode.php');
printActivite($_SESSION['id']);
        ?>
            <!-- 

            <p> Sed quis ultricies ligula. Pellentesque vel dolor quis massa vehicula dictum at id magna. Proin eleifend
                sapien in porttitor bibendum. Aliquam lacinia rutrum dui at tempor. <a href="#">Praesent ut purus
                    fringilla</a>, fringilla nulla eu, dignissim neque.
                Mauris ac turpis vitae augue sagittis laoreet. Sed nulla diam, malesuada a ligula eu, facilisis pharetra
                eros. Vivamus nec luctus ante, sed rhoncus diam. Pellentesque eleifend sollicitudin neque vitae
                accumsan. Duis efficitur gravida porttitor.</p>
            <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet
                erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan
                nisi. Nullam et est vehicula, posuere massa
                a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet,
                suscipit tortor ac, ultricies magna.</p>-->
        </div>

        <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                    <p> </p>
                </div>

            </div>
        </div>
        <br><br>
        <!-- <div>

            <p> Sed quis ultricies ligula. Pellentesque vel dolor quis massa vehicula dictum at id magna. Proin eleifend
                sapien in porttitor bibendum. Aliquam lacinia rutrum dui at tempor. <a href="#">Praesent ut purus
                    fringilla</a>, fringilla nulla eu, dignissim neque.
                Mauris ac turpis vitae augue sagittis laoreet. Sed nulla diam, malesuada a ligula eu, facilisis pharetra
                eros. Vivamus nec luctus ante, sed rhoncus diam. Pellentesque eleifend sollicitudin neque vitae
                accumsan. Duis efficitur gravida porttitor.</p>
            <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet
                erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan
                nisi. Nullam et est vehicula, posuere massa
                a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet,
                suscipit tortor ac, ultricies magna.</p>
        </div> -->

        <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                    <p> </p>
                </div>

            </div>
        </div>
        <br><br><br>
        <!-- <div>

            <p> Sed quis ultricies ligula. Pellentesque vel dolor quis massa vehicula dictum at id magna. Proin eleifend
                sapien in porttitor bibendum. Aliquam lacinia rutrum dui at tempor. <a href="#">Praesent ut purus
                    fringilla</a>, fringilla nulla eu, dignissim neque.
                Mauris ac turpis vitae augue sagittis laoreet. Sed nulla diam, malesuada a ligula eu, facilisis pharetra
                eros. Vivamus nec luctus ante, sed rhoncus diam. Pellentesque eleifend sollicitudin neque vitae
                accumsan. Duis efficitur gravida porttitor.</p>
            <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet
                erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan
                nisi. Nullam et est vehicula, posuere massa
                a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet,
                suscipit tortor ac, ultricies magna.</p>
        </div> -->

        <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                    <p> </p>
                </div>

            </div>
        </div>

        <br><br>






        <br><br><br>
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
