<?session_start()?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/activite.css">

        <script src="main.js" defer></script>
        <title>Marie</title>
    </head>

    <body>

        <div>
            <nav class="menu" role="tablist">

                <img src="../../public/image/index.png" alt="" id="logo">
                <a href="" role="tab" id="title">Mern Content System </a>
                <a href="anonce.php" role="tab">Annonce2 </a>
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
            <h1> Publicites </h1>
            <p>Nombre d'utlisateurs de MERN CONTENT generate System <br><br><br> </p>



            <?php
                try{
                $bdd = new PDO('mysql:host=localhost;dbname=mairiecms', 'root', '');
            $element = $bdd->query('SELECT* FROM user ');
           //  echo "Mern CMS dispose d'une popularite de " . $element . "Utilisateurs";
    $nbreuser = 0;
           while ($row = $element->fetch(PDO::FETCH_ASSOC)) {
            $nbreuser++;
	 }
            echo "Mern CMS dispose d'une popularite de <h1>" .$nbreuser. " Utilisateurs</h1>";


                }catch(PDOException $e){
    echo $e->getMessage();
                }
            ?>
            <!-- <form action="" method="post" name="form" id="form" enctype="multipart/form-data">
        
    
        <div>
        <label for="pub1">Entrez la pub number 1</label>
        <textarea id="message1" name="pub1" placeholder="Bonjour, je vous contacte car...." required></textarea>
        
       <div>
        <label for="img1"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="img1" size="50" />
        </div>
    </div>
    <br><br>

        <div>
        <label for="pub2">Entrez la pub number 2</label>
        <textarea id="message2" name="pub2" placeholder="Bonjour,Il est ...." required></textarea>
        <div>
            <label for="img2"> Ajouter photo </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
            <input type="file" name="img2" size="50" />
            </div>
        </div>


        <br><br>
        <div>
        <label for="pub3">Entrez la pub number 3</label>
        <textarea id="message3" name="pub3" placeholder="Bonjour,Il est ...." required></textarea>
       <div>
        <label for="img3"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="img3" size="50" />
        </div>
        </div>
        <br><br>

        <div>
        <label for="pub4">Entrez la pub number 4</label>
        <textarea id="message4" name="pub4" placeholder="Bonjour,Il est ...." required></textarea>
        <div>
        <label for="img4"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="img4" size="50" />
        </div>
        </div>
<br><br>

        <div>
        <label for="pub5">Entrez Vos la pub number 5</label>
        <textarea id="message5" name="pub5" placeholder="Bonjour,Il est ...." required></textarea>
        <div>
        <label for="img5"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="img5" size="50" />
        </div>
        </div>
        <br><br>
        <div>
        <label for="pub6">Entrez la pub number 6</label>
        <textarea id="message6" name="pub6" placeholder="Bonjour,Il est ...." required></textarea>
        <div>
        <label for="img6"> Ajouter photo </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" name="img6" size="50" />
        </div>
        </div>


      


       
        <div>
            <input type="submit" value="Enregistrer" class="submit"/>
        <!-- <button type="submit" onclick="fon()">Enregistrer vos donnees</button> -->
        </div>
        </form>
        </div> -->

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


        <script>
        let form = document.getElementById('form');
        form.addEventListener('submit', (e) => {
            let data = new FormData(form);
            console.dir(data);
            e.preventDefault();
        })
        </script>

    </body>

</html>
