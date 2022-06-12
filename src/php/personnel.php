<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/personnel.css">
        <link rel="stylesheet" href="../css/anonce.css">
        <link rel="stylesheet" href="../css/activite.css">
        <link rel="stylesheet" href="../css/button.css">
        <script src="main.js" defer></script>
        <title>Marie</title>

    </head>

    <body>
        <div>
            <nav class="menu" role="tablist">

                <img src="../../public/image/index.png" alt="" id="logo">
                <a href="" role="tab" id="title">Mern Content System </a>
                <a href="anonce.php" role="tab">Visualiser </a>
                <a href="#" role="tab"></a>
                <a href="./historique.php" role="tab">Historique</a>
                <a href="./anonce.php" role="tab">Annonces</a>
                <a href="./activite.php" role="tab">Activites</a>
                <a href="./pub.php" role="tab">Espace pub</a>
                <a href="./site_touristique.php" role="tab">Site touristique</a>
                <a href="./personnel.php" role="tab">Personnel</a>


                <!-- <button onclick="getContent('historique.html')">Historique</button>
                <button onclick="getContent('anonce.html')">Annonces</button>
                <button onclick="getContent('activite.html')">Activites</button>
                <button onclick="getContent('pub.html')">Espace Pub </button>
                <button onclick="getContent('site_touristique.html')">Site Touristiques</button>
                <button onclick="getContent('personnel.html')">Conseil Municipal+ Personnel </button>
                <button>Project</button> -->
            </nav>

        </div>
        <br><br>

        <div class="contactez-nous">
            <h1> Conseil municipal</h1>
            <p>Poster le conseil municipal sur le site !</p>
            <form action="accueil.php" method="post" name="form" id="form" enctype="multipart/form-data">

                <!--<div>
        <label for="nom"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="fic" size="50" />
        </div>-->
                <div>
                    <label for="maire">Nom du maire</label>
                    <input type="text" id="nom" name="maire" placeholder="Martin" required>

                    <div>
                        <label for="pho1"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pho1" size="50" />

                        <label for="cv1"> Ajouter CV </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="cv1" size="50" />
                    </div>


                </div>
                <br><br><br><br><br><br>

                <div>
                    <label for="adjoint1">Nom du prenier adjoint du maire</label>
                    <input type="text" id="nom1" name="adjoint1" placeholder="Martin" required>

                    <div>
                        <label for="pho2"> Ajouter photo</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pho2" size="50" />

                        <label for="cv2"> Ajouter CV </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="cv2" size="50" />
                    </div>

                </div>
                <br><br><br><br><br><br>

                <div>
                    <label for="adjoint2">Nom du deuxieme adjoint du maire</label>
                    <input type="text" id="nom2" name="adjoint2" placeholder="Martin" required>

                    <div>
                        <label for="pho3"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pho3" size="50" />

                        <label for="cv3"> Ajouter CV </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="cv3" size="50" />
                    </div>


                </div>
                <br><br><br><br><br><br>

                <div>
                    <label for="adjoint3">Troisieme adjoint</label>
                    <input type="text" id="nom3" name="adjoint3" placeholder="Martin" required>

                    <div>
                        <label for="pho4">Ajouter photo</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pho4" size="50" />

                        <label for="cv4"> Ajouter CV </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="cv4" size="50" />
                    </div>


                </div>
                <br><br><br><br><br><br>

                <fieldset>
                    <legend>
                        Personnel Non Administratif
                    </legend>

                    <div>
                        <label for="financier">Chef Service Financier</label>
                        <input type="text" id="nom4" name="financier" placeholder="Martin" required>

                        <div>
                            <label for="pho5"> Ajouter photo </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="pho5" size="50" />

                            <label for="cv5"> Ajouter CV </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="cv5" size="50" />
                        </div>


                    </div>
                    <br><br><br><br><br><br>


                    <div>
                        <label for="hygiene">Chef Services des Hygienes</label>
                        <input type="text" id="nom5" name="hygiene" placeholder="Martin" required>


                        <div>
                            <label for="pho6"> Ajouter photo </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="pho6" size="50" />

                            <label for="cv6"> Ajouter CV </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="cv6" size="50" />
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                    <div>
                        <label for="secretaire">Secretaire General</label>
                        <input type="text" id="nom6" name="secretaire" placeholder="Martin" required>

                        <div>
                            <label for="pho7"> Ajouter photo </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="pho7" size="50" />

                            <label for="cv7"> Ajouter CV </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                            <input type="file" name="cv7" size="50" />
                        </div>


                    </div>

                </fieldset>
                <br><br><br><br><br><br>

                <div>
                    <input type="submit" value="Enregistrer" class="submit" />
                    <!-- <button type="submit" onclick="fon()">Enregistrer vos donnees</button> -->
                </div>
            </form>
        </div>

        <div class="update">
            <ul>
                <li><button id="update" onclick="document.location.href='updatepersonnel.php'">Modifier
                        le personnel </button></li>
                <li><button id="updat">Suprimer personnel </button></li>
            </ul>


        </div>

        <!--
    <div id="content">
  
      <form method="POST" 
            action="" 
            enctype="multipart/form-data">
          <input type="file" 
                 name="uploadfile" 
                 value="" />

          <div>
              <button type="submit"
                      name="upload">
                UPLOAD
              </button>
          </div>
      </form>
  </div>


-->
        <!-- <script>
      let form = document.getElementById('form');
      form.addEventListener('submit', (e) => {
          let data = new FormData(form);
          console.dir(data);
          e.preventDefault();
        })
    </script> -->
    </body>

</html>
