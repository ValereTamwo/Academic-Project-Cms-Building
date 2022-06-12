<?php session_start() ?>
<?php require('../../../config/methode.php')?>
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
                <h1>Historique</h1>
                <p class="sub">Fluid, responsive website template by MLPdesign.</p>
            </div>
        </div>

        <div>
            <?php
echo $_SESSION['id'];
getHistory($_SESSION['id']);
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
                suscipit tortor ac, ultricies magna.</p> -->
        </div>
        <br><br><br><br>
        <div>
            <div id="banner">
                <div id="header">
                    <h1>Mission de la mairie</h1>
                    <p class="sub">Mern CMS.</p>
                </div>
            </div>
            <div>

                <p> <?php printMission($_SESSION['id'])?></p>
                <p>.</p>
            </div>
            <!-- <div class="two-col-cell">
   
         <ol>
          <li>first mission</li>
          <li>Second one goes here</li>
          <li>Third item on the list</li>
          <li>Fourth item here</li>
          <li>Fifth and some more to go</li>
          <li>Sixth, just because</li>
          <li>Seventh item</li>
          <li>Eighth and nearing the end </li>
          <li>Ninth and one more to go</li>
          <li>Tenth and last</li>
         </ol>
        </div>
      
       </div> -->
            <br><br><br><br>




            <div id="banner">
                <div id="header">
                    <h1> Conseil Municipal</h1>
                    <p class="sub">Mettre le curseur de la sourus sur une image pour voir son cv et ces informations
                        personnelles.</p>
                </div>
            </div>


            <?php 
            
            GetConseilprofileName($_SESSION['id'], 1);
            GetConseilprofileimage($_SESSION['id'], 1);

            ?>

            <div class="conteneur">



                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>

                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>

                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div style="  padding-left: 10px; padding-top: 10px;" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/index.jpeg" alt="Avatar" style="width:300px;height:300px;">
                            <p> </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1>
                            <p><input type="button" value="voir detail"></p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>

            </div>


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
