<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/anonce.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/activite.css">
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
            <h1> Historique</h1>
            <p>Poster l'historique de la mairie sur le site !</p>
            <form action="accueil.php" method="post" name="form" id="form" enctype="multipart/form-data">


                <div>
                    <label for="histoire">Entrez l'historique de la mairie</label>
                    <textarea id="histoire" name="histoire" placeholder="L'histoire de  notre mairie...."
                        required></textarea>
                </div>

                <div>
                    <label for="mission">Entrez les missions de la mairie</label>
                    <textarea id="mission" name="mission" placeholder="Les missions de la Mairie...."
                        required></textarea>
                </div>


                <div>
                    <input type="submit" value=" Enregistrer " class="submit" />
                    <!-- <button type="submit" onclick="fon()">Enregistrer vos donnees</button> -->
                </div>
            </form>
        </div>

        <div class="update">
            <ul>
                <li><button id="update" onclick="document.location.href='updateHistorique.php'">Modifier
                        Historique</button></li>
                <li><button id="updat">Suprimer Historique</button></li>
            </ul>


        </div>
        <!-- <script>
        let forme = document.querySelector('form');
        forme.addEventListener('submit', (e) => {
            let data = new FormData(forme);
            console.log(data.entries());
            alert('Charging php Script');
            e.preventDefault();
        })
        </script> -->
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
    </body>

</html>
