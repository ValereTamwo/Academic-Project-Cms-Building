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
        <br><br>

        <div class="contactez-nous">
            <h1>Mise a Jour du Personnel et Conseil municipal</h1>
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

$extensions_photo = array('.png', '.jpg', '.jpeg');
$extensions_cv = array('.pdf', '.PDF');
   //var_dump($_FILES);
    if(!empty($_FILES)){

        $nameP1 = $_FILES['pho1']['name'];
        $extP1 = strrchr($nameP1,'.');
        $fileCp1 = 'files/'.$nameP1;
        $tmpStore1 = $_FILES['pho1']['tmp_name'];
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


        $nameP2 = $_FILES['pho2']['name'];
        $extP2 = strrchr($nameP2,'.');
        $fileCp2 = 'imagefile/'.$nameP2;
        $tmpStore2 = $_FILES['pho2']['tmp_name'];
        $file_dest2 = 'files/'.$nameP2;
        if(in_array($extP2,$extensions_photo)){
            if(move_uploaded_file($tmpStore2, $file_dest2)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

         $nameP3 = $_FILES['pho3']['name'];
        $extP3 = strrchr($nameP3,'.');
        $fileCp3 = 'imagefile/'.$nameP3;
        $tmpStore3 = $_FILES['pho3']['tmp_name'];
        $file_dest3 = 'files/'.$nameP1;
        if(in_array($extP3,$extensions_photo)){
            if(move_uploaded_file($tmpStore3, $file_dest3)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP4 = $_FILES['pho4']['name'];
        $extP4 = strrchr($nameP4,'.');
        $fileCp1 = 'imagefile/'.$nameP4;
        $tmpStore4 = $_FILES['pho4']['tmp_name'];
        $file_dest4 = 'files/'.$nameP4;
        if(in_array($extP4,$extensions_photo)){
        if(move_uploaded_file($tmpStore4, $file_dest4)){
        
            echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP5 = $_FILES['pho5']['name'];
        $extP5 = strrchr($nameP5,'.');
        $fileCp5 = 'imagefile/'.$nameP5;
        $tmpStore5 = $_FILES['pho5']['tmp_name'];
        $file_dest5 = 'files/'.$nameP5;
        if(in_array($extP5,$extensions_photo)){
            if(move_uploaded_file($tmpStore5, $file_dest5)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

        $nameP6 = $_FILES['pho6']['name'];
        $extP6 = strrchr($nameP6,'.');
        $fileCp6 = 'imagefile/'.$nameP6;
        $tmpStore6 = $_FILES['pho6']['tmp_name'];
        $file_dest6 = 'files/'.$nameP6;
        if(in_array($extP6,$extensions_photo)){
            if(move_uploaded_file($tmpStore6, $file_dest6)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }

         $nameP7 = $_FILES['pho7']['name'];
        $extP7 = strrchr($nameP7,'.');
        $fileCp7 = 'imagefile/'.$nameP7;
        $tmpStore7 = $_FILES['pho6']['tmp_name'];
        $file_dest7 = 'files/'.$nameP7;
        if(in_array($extP7,$extensions_photo)){
            if(move_uploaded_file($tmpStore7, $file_dest7)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers png jpg et jpeg sont autorises";
        }



        /*  */
  
    

    /**=-------------------------UPLOAD DES CVS-------------------------------------------------------- */


        $nameC1 = $_FILES['cv1']['name'];
        $extC1 = strrchr($nameC1,'.');
        $fileCp1 = 'imagefile/'.$nameP1;
        $tmpStoreC1 = $_FILES['cv1']['tmp_name'];
        $file_destC1 = 'files/'.$nameC1;
        if(in_array($extC1,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC1, $file_destC1)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }


        $nameC2 = $_FILES['cv2']['name'];
        $extC2 = strrchr($nameC2,'.');
        $fileCp2 = 'imagefile/'.$nameP1;
        $tmpStoreC2 = $_FILES['cv2']['tmp_name'];
        $file_destC2 = 'files/'.$nameC2;
        if(in_array($extC2,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC2, $file_destC2)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }
        $nameC3 = $_FILES['cv3']['name'];
        $extC3 = strrchr($nameC3,'.');
        $fileCp3 = 'imagefile/'.$nameP1;
        $tmpStoreC3 = $_FILES['cv3']['tmp_name'];
        $file_destC3 = 'files/'.$nameC3;
        if(in_array($extC3,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC1, $file_destC3)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }

        $nameC4 = $_FILES['cv4']['name'];
        $extC4 = strrchr($nameC4,'.');
        $fileCp4 = 'imagefile/'.$nameP1;
        $tmpStoreC4 = $_FILES['cv4']['tmp_name'];
        $file_destC4 = 'files/'.$nameC4;
        if(in_array($extC4,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC4, $file_destC4)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }

        $nameC5 = $_FILES['cv5']['name'];
        $extC5 = strrchr($nameC5,'.');
        $fileCp5 = 'imagefile/'.$nameP1;
        $tmpStoreC5 = $_FILES['cv5']['tmp_name'];
        $file_destC5 = 'files/'.$nameC5;
        if(in_array($extC5,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC5, $file_destC5)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }

        $nameC6 = $_FILES['cv6']['name'];
        $extC6 = strrchr($nameC6,'.');
        $fileCp6 = 'imagefile/'.$nameP1;
        $tmpStoreC6 = $_FILES['cv6']['tmp_name'];
        $file_destC6 = 'files/'.$nameC6;
        if(in_array($extC6,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC6, $file_destC6)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }

        $nameC7 = $_FILES['cv7']['name'];
        $extC7 = strrchr($nameC7,'.');
        $fileCp7 = 'imagefile/'.$nameP1;
        $tmpStoreC7 = $_FILES['cv7']['tmp_name'];
        $file_destC7 = 'files/'.$nameC7;
        if(in_array($extC7,$extensions_cv)){
            if(move_uploaded_file($tmpStoreC7, $file_destC7)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }
    
      }
?>
<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mairiecms','root','');
        $pre = $pdo->prepare('UPDATE `photoconseille` SET `photmaire`=?,`cvmaire`=?,`photoad1`=?,`cvad1`=?,`photoad2`=?,`cvad2`=?,`photoad3`=?,`cvad3`=?,`photochef`=?,`cvchef`=?,`photofi`=?,`cvfi`=?,`photosec`=?,`cvsec`=? WHERE `iduser`=?');
        $pre->execute(array( $file_dest1, $file_destC1, $file_dest2, $file_destC2,$file_dest3,$file_destC3,$file_dest4,$file_destC4 ,$file_dest5,$file_destC5 , $file_dest6,$file_destC6,$file_dest7,$file_destC7, $_SESSION['id']));
        echo "Mise a jour reussie reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>

<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mairiecms','root','');
        $pre = $pdo->prepare('UPDATE `conseilpersonnelle` SET `nommaire`=?,`adjoin1`=?,`adjoin2`=?,`adjoint3`=?,`chefhygiene`=?,`secretaire`=?,`financier`=? WHERE `iduser`=?');
        $pre->execute(array($_POST['maire'], $_POST['adjoint1'], $_POST['adjoint2'], $_POST['adjoint3'],$_POST['financier'], $_POST['hygiene'], $_POST['secretaire'], $_SESSION['id']));
        echo "Mise a jour reussie reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>
