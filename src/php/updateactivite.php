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

        <br><br>
        <div class="contactez-nous">

            <p>
            <h1> Mise a jour des Activites </h1>!</p>
            <form action="activite.php" method="post" name="form" id="form" enctype="multipart/form-data">


                <div>
                    <label for="activite1">Entrez Vos activites number 1</label>
                    <textarea id="message" name="activite1" placeholder="Bonjour, je vous contacte car...."
                        required></textarea>

                    <div>
                        <label for="pic1"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic1" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="activite2">Entrez Vos activites number 2</label>
                    <textarea id="message" name="activite2" placeholder="Bonjour,Il est ...." required></textarea>
                    <div>
                        <label for="pic2"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic2" size="50" />
                    </div>
                </div>


                <br><br>
                <div>
                    <label for="activite3">Entrez Vos activites number 3</label>
                    <textarea id="message" name="activite3" placeholder="Bonjour,Il est ...." required></textarea>
                    <div>
                        <label for="pic3"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic3" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="activite4">Entrez Vos activites number 4</label>
                    <textarea id="message" name="activite4" placeholder="Bonjour,Il est ...." required></textarea>
                    <div>
                        <label for="pic4"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic4" size="50" />
                    </div>
                </div>
                <br><br>

                <div>
                    <label for="activite5">Entrez Vos activites number 5</label>
                    <textarea id="message" name="activite5" placeholder="Bonjour,Il est ...." required></textarea>
                    <div>
                        <label for="pic5"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic5" size="50" />
                    </div>
                </div>
                <br><br>
                <div>
                    <label for="activite6">Entrez Vos activites number 6</label>
                    <textarea id="message" name="activite6" placeholder="Bonjour,Il est ...." required></textarea>
                    <div>
                        <label for="pic6"> Ajouter photo </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
                        <input type="file" name="pic6" size="50" />
                    </div>
                </div>






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
    </body>

</html>

<?php
 require('../../config/methode.php');
?>

<?php

$extensions_photo = array('.png', '.jpg', '.jpeg');
$extensions_cv = array('.pdf', '.PDF');
   //var_dump($_FILES);
    if(!empty($_FILES)){

        $nameP1 = $_FILES['pic1']['name'];
        $extP1 = strrchr($nameP1,'.');
        $fileCp1 = 'files/'.$nameP1;
        $tmpStore1 = $_FILES['pic1']['tmp_name'];
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


        $nameP2 = $_FILES['pic2']['name'];
        $extP2 = strrchr($nameP2,'.');
        $fileCp2 = 'imagefile/'.$nameP2;
        $tmpStore2 = $_FILES['pi2']['tmp_name'];
        $file_dest2 = 'files/'.$nameP2;
        if(in_array($extP2,$extensions_photo)){
            if(move_uploaded_file($tmpStore2, $file_dest2)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

         $nameP3 = $_FILES['pic3']['name'];
        $extP3 = strrchr($nameP3,'.');
        $fileCp3 = 'imagefile/'.$nameP3;
        $tmpStore3 = $_FILES['pic3']['tmp_name'];
        $file_dest3 = 'files/'.$nameP3;
        if(in_array($extP3,$extensions_photo)){
            if(move_uploaded_file($tmpStore3, $file_dest3)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP4 = $_FILES['pic4']['name'];
        $extP4 = strrchr($nameP4,'.');
        $fileCp1 = 'imagefile/'.$nameP4;
        $tmpStore4 = $_FILES['pic4']['tmp_name'];
        $file_dest4 = 'files/'.$nameP4;
        if(in_array($extP4,$extensions_photo)){
        if(move_uploaded_file($tmpStore4, $file_dest4)){
        
            echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP5 = $_FILES['pic5']['name'];
        $extP5 = strrchr($nameP5,'.');
        $fileCp5 = 'imagefile/'.$nameP5;
        $tmpStore5 = $_FILES['pic5']['tmp_name'];
        $file_dest5 = 'files/'.$nameP5;
        if(in_array($extP5,$extensions_photo)){
            if(move_uploaded_file($tmpStore5, $file_dest5)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP6 = $_FILES['pic6']['name'];
        $extP6 = strrchr($nameP6,'.');
        $fileCp6 = 'imagefile/'.$nameP6;
        $tmpStore6 = $_FILES['pic6']['tmp_name'];
        $file_dest6 = 'files/'.$nameP6;
        if(in_array($extP6,$extensions_photo)){
            if(move_uploaded_file($tmpStore6, $file_dest6)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

         $nameP7 = $_FILES['pic5']['name'];
    }

//nsertActivite($_SESSION['id'], $_POST['activite1'], $file_dest1, $_POST['activite2'], $file_dest2,

//printActivite($_SESSION['id']);
?>
<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mairiecms','root','');
        $pre = $pdo->prepare('UPDATE `activite` SET `activ1`=?,`photo1`=?,`activ2`=?,`phot02`=?,`activ3`=?,`photo3`=?,`activ4`=?,`photo4`=?,`activ5`=?,`photo5`=?,`activ6`=?,`photo6`=? WHERE `iduser`=?');
        $pre->execute(array( $_POST['activite1'], $file_dest1, $_POST['activite2'], $file_dest2, $_POST['activite3'], $file_dest3,$_POST['activite4'], $file_dest4, $_POST['activite5'], $file_dest5, $_POST['activite5'], $file_dest6,$_SESSION['id']));
        echo "Mise a jour reussie reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>
