<?php 
session_start();
?>

<?php
    try{
    $pdo = new PDO('mysql:host=localhost;dbname=mairiecms', 'root', '');
    $prep = $pdo->prepare('INSERT INTO `annonce` (`iduser`, `annonce1`, `annonce2`, `annonce3`) VALUES (?,?,?, ?)');
    $prep->execute(array($_SESSION['id'],$_POST['annonce1'],$_POST['annonce2'],$_POST['annonce3']));
    echo "Donnees Enregistres";
    }
    catch(PDOException $e){
    echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1> Annonces</h1>
            <p>Poster des nouvels annonces sur le site !</p>
            <form action="anonce.php" method="post" name="form" id="form" enctype="multipart/form-data">


                <div>
                    <label for="annonce1">Entrez Votre annonce number 1</label>
                    <textarea id="message1" name="annonce1" placeholder="Bonjour, je vous contacte car...."
                        required></textarea>
                </div>

                <div>
                    <label for="annonce2">Entrez Votre annonce number 2</label>
                    <textarea id="message2" name="annonce2" placeholder="Bonjour,Il est ...." required></textarea>
                </div>

                <div>
                    <label for="annonce3">Entrez Votre annonce number 3</label>
                    <textarea id="message3" name="annonce3" placeholder="Bonjour,Il est ...." required></textarea>
                </div>


                <div>
                    <label for="annonce4">Entrez Votre annonce number 4</label>
                    <textarea id="message4" name="annonce4" placeholder="Bonjour,Il est ...." required></textarea>
                </div>


                <div>
                    <label for="annonce5">Entrez Votre annonce number 5</label>
                    <textarea id="message5" name="annonce5" placeholder="Bonjour,Il est ...." required></textarea>
                </div>

                <div>
                    <label for="annonce6">Entrez Votre annonce number 6</label>
                    <textarea id="message6" name="annonce6" placeholder="Bonjour,Il est ...." required></textarea>
                </div>

                <div>
                    <input type="submit" value="Enregistrer" name="submit" id="submit" />
                </div>
            </form>
        </div>


        <div class="update">
            <ul>
                <li><button id="update" onclick="document.location.href='updateannonce.php'">Modifier
                        Annonce</button></li>
                <li><button id="updat">Suprimer annonce </button></li>
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


        <!-- 
        <script>
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
require('../../../config/methode.php');
          //  insertannonce($_SESSION['id'],$_POST['annonce1'],$_POST['annonce2'],$_POST['annonce3']);
        ?>
