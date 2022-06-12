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

        </div>

        <div class="contactez-nous">
            <h1>Mise a jour des Site touristique </h1>
            <form action="updatesit.php" method="post" name="form" id="form" enctype="multipart/form-data">


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
                    <input type="submit" value="Enregistrer" id="submit" class="submit" />
                    <!-- <button type="submit" onclick="fon()">Enregistrer vos donnees</button> -->
                </div>
            </form>
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
        $pre = $pdo->prepare('UPDATE `site` SET `descrip1`=?,`photo1`=?,`descrip2`=?,`photo2`=?,`descrip3`=?,`photo3`= ? WHERE `iduser`=?');
        $pre->execute(array( $_POST['site1'], $file_dest1, $_POST['site2'], $file_dest2, $_POST['site3'], $file_dest3,$_SESSION['id']));
        echo "Mise a jour reussie reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>
