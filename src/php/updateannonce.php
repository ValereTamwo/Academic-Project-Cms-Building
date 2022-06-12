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
        <link rel="stylesheet" href="../css/activite.css">
        <link rel="stylesheet" href="../css/button.css">
        <script src="main.js" defer></script>
        <title>Marie</title>
    </head>

    <body>

        <br><br>
        <div class="contactez-nous">
            <h1>Mise a jour des Annonces</h1>
            <form action="updateannonce.php" method="post" name="form" id="form" enctype="multipart/form-data">


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
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mairiecms','root','');
        $pre = $pdo->prepare('UPDATE `annonce` SET `annonce1`=?,`annonce2`=?,`annonce3`=? WHERE `iduser`=?');
        $pre->execute(array( $_POST['annonce1'],$_POST['annonce2'], $_POST['annonce3'],$_SESSION['id']));
        echo "Mise a jour reussie reussi";
    }
    catch(PDOException $e){
         echo $e->getMessage();
    }
?>
