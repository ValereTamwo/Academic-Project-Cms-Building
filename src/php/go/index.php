<?php session_start();
if(isset($_SESSION['counter'])) {
    $_SESSION['counter']+=1;
} else{
    $_SESSION['counter']=1;
}



$msg="".$_SESSION['counter']?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <script src="main.js" defer></script>
        <title>Marie</title>
    </head>

    <body>
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


        <div class="conteneur">
            <section id="">
                <h2> WELCOME TO CAMEROON</h2>
            </section>
        </div>

        <br><br><br><br>
        <h2> Annonces de la mairie </h2>
        <div class="conteneur">
            <Br><br>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/council.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <p> </p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p><input type="button" value="voir detail"></p>
                        <p></p>
                    </div>
                </div>
            </div>



            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/Duoala.png" alt="Avatar" style="width:300px;height:300px;">
                        <p> </p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p><input type="button" value="voir detail"></p>
                        <p></p>
                    </div>
                </div>
            </div>




            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image//cmt.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <p> </p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p><input type="button" value="voir detail"></p>
                        <p></p>
                    </div>
                </div>
            </div>


            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/cmrflag.jpeg" alt="Avatar" style="width:300px;height:300px;">
                        <p> </p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p><input type="button" value="voir detail"></p>
                        <p></p>
                    </div>
                </div>
            </div>


            <div style="  padding-left: 10px;" class="flip-card">
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

        <br><br><br><br>

        <h2>Presentations des menbres de la mairie</h2>
        <div class="conteneur">
            <Br><br>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/avatar.jpeg" alt="Avatar" style="width:300px;height:300px;">
                        <p> Download pdf</p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>



            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/img_avatar2.png" alt="Avatar" style="width:300px;height:300px;">
                        <p> Download pdf</p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>




            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/avatar1.jpeg" alt="Avatar" style="width:300px;height:300px;">
                        <p> Download pdf</p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>


            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/avatar.png" alt="Avatar" style="width:300px;height:300px;">
                        <p> Download pdf</p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>


            <div style="  padding-left: 10px;" class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/avatar.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <p> Download pdf</p>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <br><br>




            <div class="dummy_page">
                Mobile responsive footer
            </div>
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
                            <li> Nombre de visiteur <?php echo($msg);?> </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END OF FOOTER -->







    </body>



</html>
