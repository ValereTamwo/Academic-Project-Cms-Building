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
                <a href="./projet.php" role="tab">Project</a>
                <a href="./site_touristique.php" role="tab">Site touristique</a>
                <a href="./personnel.php" role="tab">Personnel</a>


            </nav>



        </div>

        <br><br>
        <div class="contactez-nous">
            <h1> Projet </h1>
            <p>Poster des Projets sur le site !</p>
            <form action="projet.php" method="post" enctype="multipart/form-data">


                <br><br>
                <div>
                    <label for="logo">image Logo Project</label>
                    <input type="file" id="logo" name="logo" />
                    < </div>

                        <br><br>

                        <div>
                            <label for="pro1">Entrez le projet 1</label>
                            <textarea id="pro1" name="pro1" placeholder="Bonjour,Il est ...."></textarea>
                        </div>


                        <br><br>
                        <div>
                            <label for="pro2">Entrez le projet 2 </label>
                            <textarea id="pro2" name="pro2" placeholder="Bonjour,Il est ...."></textarea>
                        </div>
                        <br><br>

                        <div>
                            <label for="pro3">Entrez le projet 3</label>
                            <textarea id="pro3" name="pro3" placeholder="Bonjour,Il est ...."></textarea>
                        </div>
                        <br><br>


                        <br><br>







                        <div>
                            <input type="submit" value="Enregitrer">
                        </div>
            </form>
        </div>

        <?php 
require('../../config/methode.php');
?>
        <?php
$extensions_photo = array('.png', '.jpg', '.jpeg');
if(!empty($_FILES)){
    $name = $_FILES['logo']['name'];
        $ext = strrchr($name,'.');
        $file = 'imagefile/'.$name;
        $tmpStore = $_FILES['logo']['tmp_name'];
        $file_dest = 'files/'.$name;
        if(in_array($ext,$extensions_photo)){
            if(move_uploaded_file($tmpStore, $file_dest)){
            
                echo "Fichier Envoyee avec succes";
            }
        }else{
            echo "Seul les fichiers PDF  et pdf sont autorises";
        }
}

    
//--------------------------------------insert Data--------------------------
insertProject($_SESSION['id'], $file_dest, $_POST['pro1'], $_POST['pro2'], $_POST['pro3']);
//AddProject($_SESSION['id'], $file_dest, $_POST['pro1'], $_POST['pro2'], $_POST['pro3']);
?>









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
