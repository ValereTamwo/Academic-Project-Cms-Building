<?php
function Connection()
	{
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=mairiecms', 'root', '', $pdo_options);
			//echo "Connexion reussi";
			$bdd->query("SET NAMES UTF8");
			return $bdd;
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}

	}

    function SaveUser($login, $passwd)
	{
		try{
			$bdd = Connection();
			$req = $bdd->prepare('INSERT INTO user (username, passwd) values(?,?)');
			$req->execute(array($login, $passwd));
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

    function CheckUser($login,$password)
	{
		$bdd = Connection();
		$req = $bdd->prepare('SELECT * FROM user WHERE username = ? AND passwd = ?');
		$p = $req->execute(array($login,$password));
		$param = $req->fetchAll();
		if(!$param)
		{
			$chaine = 'Compte inexistant';
		return false;
		}
		else
		{
			while($param){
				return $param['id'];
			}
		   /*?>
           <!DOCTYPE html>
           <html>
            <head>
                <title>Paneau de Configuration</title>
            </head>
            <body onload="document.location.href='../src/php/panneau.php'">

            </body>
           </html>
           <?php*/
		}
	    
	}
	?>