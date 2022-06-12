<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/activite.css">
        <link rel="stylesheet" href="../css/anonce.css">
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

        <div class="contactez-nous">
            <h1> Site touristique </h1>
            <p>Poster des sites rouristiques sur le site !</p>
            <form action="site_touristique.php" method="post" name="form" id="form" enctype="multipart/form-data">


                <div>
                    <label for="message">Entrez le site touristique number 1</label>
                    <textarea id="message1" name="site1" placeholder="Bonjour, je vous contacte car...."
                        required></textarea>

                    <div>
                        <label for="fic1"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic1" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="site2">Entrez le site touristique number 2</label>
                    <textarea id="message2" name="site2"
                        placeholder="Bien vouloir Entrer la description du site touristique NB:  max 700 mots"
                        required></textarea>
                    <div>
                        <label for="fic2"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic2" size="50" />
                    </div>
                </div>


                <br><br>
                <div>
                    <label for="site3">Entrez le site touristique number 3</label>
                    <textarea id="message3" name="site3"
                        placeholder="Bien vouloir Entrer la description du site touristique NB:  max 700 mots"
                        required></textarea>
                    <div>
                        <label for="fic3"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic3" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="site4">Entrez le site touristique number 4</label>
                    <textarea id="message4" name="site4"
                        placeholder="Bien vouloir Entrer la description du site touristique NB:  max 700 mots"></textarea>
                    <div>
                        <label for="fic4"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic4" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="site5">Entrez le site touristique number 5</label>
                    <textarea id="message5" name="site5"
                        placeholder="Bien vouloir Entrer la description du site touristique NB:  max 700 mots"></textarea>
                    <div>
                        <label for="fic5"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic5" size="50" />
                    </div>
                </div>
                <br><br>
                <div>
                    <label for="site6">Entrez le site touristique number 6</label>
                    <textarea id="message6" name="site6"
                        placeholder="Bien vouloir Entrer la description du site touristique NB:  max 700 mots"></textarea>
                    <div>
                        <label for="fic6"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="fic6" size="50" />
                    </div>
                </div>

                <div>
                    <input type="submit" value="Enregistrer" id="submit" class="submit" />
                    <!-- <button type="submit" onclick="fon()">Enregistrer vos donnees</button> -->
                </div>
            </form>
        </div>


        <div class="update">
            <ul>
                <li><button id="update" onclick="document.location.href='updatesit.php'">Modifier
                        Site</button></li>
                <li><button id="updat">Suprimer site </button></li>
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

<?php
 require('../../config/methode.php');
?>

<?php

$extensions_photo = array('.png', '.jpg', '.jpeg');
   //var_dump($_FILES);
    if(!empty($_FILES)){

        $nameP1 = $_FILES['fic1']['name'];
        $extP1 = strrchr($nameP1,'.');
        $fileCp1 = 'files/'.$nameP1;
        $tmpStore1 = $_FILES['fic1']['tmp_name'];
        $file_dest1 = 'files/'.$nameP1;
        if(in_array($extP1,$extensions_photo)){
            if(move_uploaded_file($tmpStore1, $file_dest1)){
            
                echo "Fichier Envoyee avec succes";
            }else{
                echo "Une erreur est survenue lors de l'envoi du fichier";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }


        $nameP2 = $_FILES['fic2']['name'];
        $extP2 = strrchr($nameP2,'.');
        $fileCp2 = 'imagefile/'.$nameP2;
        $tmpStore2 = $_FILES['fic2']['tmp_name'];
        $file_dest2 = 'files/'.$nameP2;
        if(in_array($extP2,$extensions_photo)){
            if(move_uploaded_file($tmpStore2, $file_dest2)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

         $nameP3 = $_FILES['fic3']['name'];
        $extP3 = strrchr($nameP3,'.');
        $fileCp3 = 'imagefile/'.$nameP3;
        $tmpStore3 = $_FILES['fic3']['tmp_name'];
        $file_dest3 = 'files/'.$nameP3;
        if(in_array($extP3,$extensions_photo)){
            if(move_uploaded_file($tmpStore3, $file_dest3)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

    echo $file_dest1;
    }

// printSite($_SESSION['id']);
//insertSITE($_SESSION['id'], $_POST['site1'], $file_dest1, $_POST['site2'], $file_dest2, $ $_POST['site3'], $file_dest3);
?>

<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mairiecms','root','');
        $pre = $pdo->prepare('INSERT INTO `site`(`iduser`, `descrip1`, `photo1`, `descrip2`, `photo2`, `descrip3`, `photo3`) VALUES (?,?,?,?,?,?,?)');
        $pre->execute(array($_SESSION['id'], $_POST['site1'], $file_dest1, $_POST['site2'], $file_dest2, $_POST['site3'], $file_dest3));
        echo "insertion reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>
