<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/activite.css">
        <link rel="stylesheet" href="../css/anonce.css">
        <!-- <link rel="stylesheet" href="../css/form.css"> -->
        <script src="main.js" defer></script>

        <title>Marie</title>
    </head>

    <body>
        <div>
            <div class="profile"><?php echo "  Bievenue a vous <strong> " . $_SESSION['name'] . "</strong>  Votre Identifiant est : <strong>".$_SESSION['id']."</strong>";
?></div> <br><a href="../php/go/index.php">Visualiser le Theme1</a><span><a href="../php/go2/php/accueil.php">
                    Visualiser
                    le
                    Theme2</a></span>

            <nav class="menu" role="tablist">

                <img src="../../public/image/index.png" alt="" id="logo">
                <a href="" role="tab" id="title">Mern Content System </a>
                <a href="anonce.php" role="tab">Visualiser </a>
                <a href="#" role="tab"></a>
                <a href="" role="tab">Organisation</a>
                <a href="./historique.php" role="tab">Historique</a>
                <a href="./anonce.php" role="tab">Annonces</a>
                <a href="./activite.php" role="tab">Activites</a>
                <a href="./pub.php" role="tab">Espace pub</a>
                <a href="./site_touristique.php" role="tab">Site touristique</a>
                <a href="./projet.php" role="tab">Project</a>
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
        <div id="ajax">
            <br><br><br>
            <h1 id="welcome">WELCOME TO MERN SYSTEM save </h1>
            <br><br>
            Start Building up your sites
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



getHistory($_SESSION['id'], 1);
SaveHistory($_SESSION['id'],$_POST['histoire']);
//getStory();
?>

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


ImgageConseil(1, $_SESSION['id'], $file_dest1, $file_destC1, $file_dest2, $file_destC2,$file_dest3,$file_destC3,$file_dest4,$file_destC4 ,$file_dest5,$file_destC5 , $file_dest6,$file_destC6,$file_dest7,$file_destC7);


inserConseil($_SESSION['id'], $_POST['maire'], $_POST['adjoint1'], $_POST['adjoint2'], $_POST['adjoint3'],$_POST['financier'], $_POST['hygiene'], $_POST['secretaire']);

//  getUserId('jules','jonas');

// GetConseilprofileName(1, 1);
// GetConseilprofileimage(1, 1);


//      if( isset($_POST['annonce1'])and isset($_POST['annonce2']) and isset($_POST['annonce3'])){
   
//     $annonce1=$_POST['annonce1'];
//     $annonce2=$_POST['annonce2'];
//     $annonce3=$_POST['annonce3'];
//     insertannonce($iduser,$annonce1,$annonce2,$annonce3);
//     affichannonce($iduser,$annonce1);
//     supprimerann($iduser);
//     updateann($iduser);
// }

//updateHistorique($_SESSION['id'],$_POST['hist']);

AddMission($_SESSION['id'],$_POST['mission']);
//printMission($_SESSION['id']);
updateMission($_SESSION['id'], $_POST['mission']);
//DeleteAnnonce($_SESSION['id']);
insertannonce($_SESSION['id'], $_POST['annonce1'],  $_POST['annonce2'],  $_POST['annonce3']);


#---------------------------------------------INsert Project ------------------------------------------

//---------------Image first action ----------------------------------------------------

?>
