<?php

use FTP\Connection;

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
#----------------------------------------------------working with the User------------------------------------------
    function SaveUser($login, $passwd)
	{
		try{
			$bdd = Connection();
			$req = $bdd->prepare('INSERT INTO user (nom, prenom) values(?,?)');
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

function getUserId($username, $password)
{
	
	$bdd = Connection();
	$prep = $bdd->prepare('SELECT iduser FROM user WHERE nom = ? AND prenom =?');
	$element = $prep->execute(array($username, $password));
	$row = $prep->fetchAll();
	
	foreach($row as $id){
		return $id['iduser'];
	}	// $element = $bdd->query('SELECT iduser FROM user WHERE nom ="jules" AND prenom ="jonas"');

	// while ($row = $element->fetch(PDO::FETCH_ASSOC)) {
	// 	echo $row['iduser'];
	// }
}

function checkinfo($username, $password)
{
	
	$bdd = Connection();
	// $element = $bdd->query('SELECT iduser FROM user WHERE nom ="jules" AND prenom ="jonas"');
	$prep = $bdd->prepare('SELECT * FROM user WHERE nom = ? AND prenom =?');
	$element = $prep->execute(array($username, $password));
	$row = $prep->fetchAll();
	
	if(!$row){
		echo ":( unfound informations . Please suscribe and come in then";
		return false;
	}
	else{
		return true;
	}
	// foreach($row as $id){
	// 	return $id['iduser'];
	// }
	// while ($row = $element->fetch(PDO::FETCH_ASSOC)) {
	// 	echo $row['iduser'];
	// }
}


/**-------------------------------Woking with Histoire Data------------------------------------------------ */
	function SaveHistory($iduser,$histoire){

		try{
				$bdd = Connection();
				$req = $bdd->prepare('INSERT INTO histoire (iduser, histoire) values(?,?)');
				$req->execute(array($iduser, $histoire));
			echo "enregistrement effectuee";
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
	}

	function getHistory($iduser){
			try{
				$bdd = Connection();
				$req = $bdd->prepare('SELECT histoire FROM  `histoire` WHERE iduser = ? ');
					$req->execute(array($iduser));
				$row = $req->fetchAll(PDO::FETCH_ASSOC);
				foreach ($row as $ligne){
				echo $ligne['histoire'];
		}
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
	}

	function getStory(){
		$bdd = Connection();
		$element = $bdd->query('SELECT histoire FROM histoire WHERE iduser = 3');
		while($row = $element->fetch(PDO::FETCH_ASSOC)) {
			echo "<br>". $row['histoire']."<br>";
	}

	}
#---------------------gestion du personnel--------------------------------------------------
function ImgageConseil($idconseil, $iduser, $photmaire, $cvmaire, $photoad1, $cvad1, $photoad2, $cvad2, $photoad3, $cvad3, $photochef, $cvchef, $photofi, $cvfi, $photosec, $cvsec){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("INSERT INTO `photoconseille` (`idconseil`, `iduser`, `photmaire`, `cvmaire`, `photoad1`, `cvad1`, `photoad2`, `cvad2`, `photoad3`, `cvad3`, `photochef`, `cvchef`, `photofi`, `cvfi`, `photosec`, `cvsec`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$prep->execute(array($idconseil, $iduser, $photmaire, $cvmaire, $photoad1, $cvad1, $photoad2, $cvad2, $photoad3, $cvad3, $photochef, $cvchef, $photofi, $cvfi, $photosec, $cvsec));
		echo "Reference des images sauvegarder avec sucess";
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

	function inserConseil($iduser, $nommaire, $adjoint, $adjoint2, $adjoint3, $chefhygiene, $secretaire, $financier){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("INSERT INTO `conseilpersonnelle` (`iduser`, `nommaire`, `adjoin1`, `adjoin2`, `adjoint3`, `chefhygiene`, `secretaire`, `financier`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
		$prep->execute(array($iduser, $nommaire, $adjoint, $adjoint2, $adjoint3, $chefhygiene, $secretaire, $financier));
		echo "Membres du perSonnel Sauvegarder avec Sucess";
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	}

	function GetConseilprofileName($iduser){
		try{
				$bdd = Connection();
				$prep = $bdd->prepare('SELECT * FROM  `conseilpersonnelle`WHERE iduser = ?');
				// $prep = $bdd->prepare('SELECT * FROM  `conseilpersonnelle` INNER JOIN `photoconseille` WHERE iduser = ? AND idconseil= ? AND `conseilpersonelle`.`idconeil`=`photoconseille`.`idconseil`');

				$prep->execute(array($iduser));
				$ligne = $prep->fetchAll();
			foreach ($ligne as $membre) {
				?>
<p><?php echo'<H3>Maire<H3>'. $membre['nommaire']; ?></p><br>
<p><?php echo'<H3>Adjoint1<H3>'.  $membre['adjoin1']; ?></p><br>
<p><?php echo '<H3>Adjoint2<H3>'. $membre['adjoin2']; ?></p><br>
<p><?php echo'<H3>Adjoin3<H3>'.  $membre['adjoint3']; ?></p><br>
<p><?php echo'<H3>Secretaire<H3>'.  $membre['secretaire']; ?></p><br>

<?php
			}
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
	}

#-------------------profil-image----------------------------------

	function GetConseilprofileimage($iduser,$idconseil){
		try{
				$bdd = Connection();
				$prep = $bdd->prepare('SELECT * FROM  `photoconseille`WHERE iduser = ? AND idconseil= ? ');
				// $prep = $bdd->prepare('SELECT * FROM  `conseilpersonnelle` INNER JOIN `photoconseille` WHERE iduser = ? AND idconseil= ? AND `conseilpersonelle`.`idconeil`=`photoconseille`.`idconseil`');

				$prep->execute(array($iduser,$idconseil));
				$ligne = $prep->fetchAll();
			foreach ($ligne as $membre) {

			echo "<p>Maire : <img src= ../".$membre['photmaire']." /> </p><br>";
			echo "<p>CV Maire : <a href=../" . $membre['cvmaire'] . " > Download CvMaire</a> </p><br>";

			echo "<p>Adjoint1 : <img src=../" . $membre['photoad1'] . " /> </p><br>";
			echo "<p>CV ajoint1 : <a href=../" . $membre['cvad1'] . " > Download Cv 1er A djoint au maire</a> </p><br>";

			echo "<p>Adjoint2 : <img src=../" . $membre['photoad2'] . " /> </p><br>";
			echo "<p>CV ajoint2 : <a href=../" . $membre['cvad2'] . " > Download Cv 2e A djoint au maire</a> </p><br>";

			echo "<p>Adjoint3 : <img src=../" . $membre['photoad3'] . " /> </p><br>";
			echo "<p>CV ajoint3 : <a href=../" . $membre['cvad3'] . " > Download Cv 3er A djoint au maire</a> </p><br>";

			echo "<p>Chef Services des hygiennes : <img src=" . $membre['photochef'] . " /> </p><br>";
			echo "<p>CV Chef Hygienne : <a href=../" . $membre['cvchef'] . " > Download Cv Chef Services des hygiennes</a> </p><br>";

			echo "<p>Chef Services Financier : <img src=../" . $membre['photofi'] . " /> </p><br>";
			echo "<p>CV Chef service Financier : <a href=../" . $membre['cvfi'] . " > Download Cv Chef services financier</a> </p><br>";

			echo "<p>Secretaire Generale : <img src=../" . $membre['photosec'] . " /> </p><br>";
			echo "<p>CV secretaire Generale : <a href=../" . $membre['cvsec'] . " > Download Cv 1er A djoint au maire</a> </p><br>";

			}
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
	}
#--------------------------------------mise a jour d--------------------------------------------------------------------
	function updateHistorique($iduser,$update){
		try{
			$bdd = Connection();
			$req = $bdd->prepare('UPDATE `histoire` SET `histoire` = ? WHERE  `histoire`.`iduser` = ?  ');
			$req->execute(array($update, $iduser));
			echo "Mise a jour effectue effectuee";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	function insertActivite($iduser, $activ1, $photo1, $activ2, $photo2, $activ3, $photo3, $acti4, $photo4, $activ5, $photo5, $activ6, $photo6){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("INSERT INTO `activite` (`iduser`, `activ1`, `photo1`, `activ2`, `phot02`, `activ3`, `photo3`, `activ4`, `photo4`, `activ5`, `photo5`, `activ6`, `photo6`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$prep->execute(array( $iduser, $activ1, $photo1, $activ2, $photo2, $activ3, $photo3, $acti4, $photo4, $activ5, $photo5, $activ6, $photo6));
		echo "Activites sauvegarder avec sucess";
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


	function printActivite($iduser){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("SELECT * FROM `activite` WHERE iduser = ?  ");
		$prep->execute(array( $iduser));
		$ligne = $prep->fetchAll();
		
		foreach($ligne as $row){
			echo "<p> : <img src=../".$row['photo1']." /> </p><br>";
			echo "<p>Activite1 : " . $row['activ1'] . " > </p><br>";

			echo "<p> : <img src=../".$row['phot02']." /> </p><br>";
			echo "<p>Activite2: " . $row['activ2'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo3']." /> </p><br>";
			echo "<p>Activite3  : " . $row['activ3'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo4']." /> </p><br>";
			echo "<p>Activite 4  : " . $row['activ4'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo5']." /> </p><br>";
			echo "<p>Activite5  : " . $row['activ5'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo6']." /> </p><br>";
			echo "<p>Activite3  : " . $row['activ6'] . " > </p><br>";

		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

#------------------------------------------------SITES TOURISTIQUES----------------------------------------


function insertSITE($iduser, $site1, $photo1, $site2, $photo2, $site3, $photo3){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("INSERT INTO `site` (`iduser`, `descrip1`, `photo1`, `descrip2`, `photo2`, `descrip3`, `photo3`) VALUES ( ?, ?,?,?,?,?,?)");
		$prep->execute(array( $iduser, $site1, $photo1, $site2, $photo2, $site3, $photo3));
		echo "sites sauvegarder avec sucess";
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


	function printSite($iduser){
	try{
		$bdd = Connection();
		$prep = $bdd->prepare("SELECT * FROM `site` WHERE iduser = ?  ");
		$prep->execute(array( $iduser));
		$ligne = $prep->fetchAll();
		
		foreach($ligne as $row){
			echo "<p> : <img src=../ ".$row['photo1']." /> </p><br>";
			echo "<p>Site1 : " . $row['descrip1'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo2']." /> </p><br>";
			echo "<p>Site2: " . $row['descrip2'] . " > </p><br>";

			echo "<p> : <img src=../".$row['photo3']." /> </p><br>";
			echo "<p>Site3  : " . $row['descrip3'] . " > </p><br>";

		
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


function insertannonce($iduser,$annonce1,$annonce2,$annonce3){
		try{
		$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
		$req=$bdd->prepare('INSERT INTO `annonce` (`iduser`, `annonce1`, `annonce2`, `annonce3`) VALUES (?,?,?,?)');
		$req->execute(array($iduser,$annonce1,$annonce2,$annonce3));
			echo "Insertion annonce Reussie";
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function affichannonce($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('SELECT* FROM `annonce` where  iduser=?');
			$req->execute(array($iduser));
		    $param = $req->fetch();
		if(!$param)
		{
			echo"pas d'annonce disponible";
		}
		else
		{
			echo "<h3>".$param['annonce1']."</h3><br><br>";
			echo"<h3>".$param['annonce2']."</h3><br><br>";
			echo"<h3>".$param['annonce3']."</h3><br><br>";
		

			}
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function supprimerann($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('DELETE*FROM `annonce` where iduser=?');
			$req->execute(array($iduser));
				echo "suppression annonce Reussie";
			}
			catch(PDOException $e){
				die("Erreur:".$e->getMessage());  
		}
	}
	function updateann($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('UPDATE`mairiecms`.`annonce`');
			$req->execute(array($iduser));
				echo "Mise a jour annonce Reussie";
			}
			catch(PDOException $e){
				die("Erreur:".$e->getMessage());  
		}
	}
	//fonction sur hisorique

	function inserthist($iduser,$histoire){
		try{
		$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
		$req=$bdd->prepare('INSERT INTO `histoire` (`iduser`, `histoire`) VALUES (?,?)');
		$req->execute(array($iduser,$histoire));
			echo "Insertion histoire Reussie";
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function affichhist($idhis,$iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('SELECT* FROM `histoire` where idhis=? AND iduser=?');
			$req->execute(array($idhis,$iduser));
		    $param = $req->fetch();
		if(!$param)
		{
			echo"pas d'historique disponible";
		}
		else
		{
			echo$param['histoire'];
			}
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function supprimerhist($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('DELETE*FROM `histoire` where iduser=?');
			$req->execute(array($iduser));
				echo "suppression histoire Reussie";
			}
			catch(PDOException $e){
				die("Erreur:".$e->getMessage());  
		}
	}
	function updatehist($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('UPDATE`mairiecms`.`histoire`');
			$req->execute(array($iduser));
				echo "Mise a jour histoire Reussie";
			}
			catch(PDOException $e){
				die("Erreur:".$e->getMessage());  
		}
	}

	// function IsertSite ($iduser,$desc1,$photo1,$desc2,$photo2,$desc3,$photo){
	// 	try{
	// 		$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
	// 		$req = $bdd->prepare("INSERT INTO `site` (`iduser`, `descrip1`, `photo1`, `descrip2`, `photo2`, `descrip3`, `photo3`) VALUES (?, ?, ?, ?, ?, ?, ?)");
	// 		$req->execute(array($iduser,$desc1,$photo1,$desc2,$photo2,$desc3,$photo));
	// 		return true;
	// 	}
	// 	catch(PDOException $e){
	// 		die("Erreur:".$e->getMessage());
		
	// 	}
	// }


	// projets
	
	function insertproj($iduser,$description){
		try{
		$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
		$req=$bdd->prepare('INSERT INTO `projet` (`iduser`, `description`) VALUES (?,?)');
		$req->execute(array($iduser,$description));
			echo "Insertion projet Reussie";
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function affichproj($idprojet,$iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('SELECT* FROM `projet` where idprojet=? AND iduser=?');
			$req->execute(array($idprojet,$iduser));
		    $param = $req->fetch();
		if(!$param)
		{
			echo"pas de projet disponible";
		}
		else
		{
			echo$param['description'];
			}
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}
	function supprimerproj($iduser){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
			$req=$bdd->prepare('DELETE*FROM `projet` where iduser=?');
			$req->execute(array($iduser));
				echo "suppression projet Reussie";
			}
			catch(PDOException $e){
				die("Erreur:".$e->getMessage());  
		}
	 }
	// function updateproj($iduser){
	// 	try{
	// 		$bdd=new PDO('mysql:host=localhost;dbname=mairiecms','root','');
	// 		$req=$bdd->prepare('UPDATE`mairiecms`.`projet`');
	// 		$req->execute(array($iduser));
	// 			echo "Mise a jour projet Reussie";
	// 		}
	// 		catch(PDOException $e){
	// 			die("Erreur:".$e->getMessage());  
	// 	}
	// }


	#------------------------Mission de la Mairie---------------------------------------------------------

	function AddMission($iduser,$mission){
			try{
				$bdd = Connection();
				$req = $bdd->prepare('INSERT INTO missions (iduser, mission) values(?,?)');
				$req->execute(array($iduser, $mission));
			echo "enregistrement effectuee";
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
		}
	}

function printMission($iduser)
{
	try {
		$bdd = Connection();
		$prep = $bdd->prepare("SELECT * FROM `missions` WHERE iduser = ?  ");
		$prep->execute(array($iduser));
		$ligne = $prep->fetchAll();

		foreach ($ligne as $row) {
			echo "<p>" . $row['mission'] . " > </p><br>";
		}
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
}

	function updateMission($iduser,$update){
		try{
			$bdd = Connection();
			$req = $bdd->prepare('UPDATE `missions` SET `mission` = ? WHERE  `missions`.`iduser` = ?  ');
			$req->execute(array($update, $iduser));
			echo "Mise a jour effectue effectuee";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	function DeleteMission($iduser){
		try{
			$bdd = Connection();
			$req = $bdd->prepare('DELETE FROM `missions` WHERE `missions`.`iduser` = ?');
			$req->execute(array($iduser));
			echo "Suppression effectue ";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}

	}

	#--------------------print Annonces-----------------------------------------------------------------

	function printAnnonce($iduser)
{
	try {
		$bdd = Connection();
		$prep = $bdd->prepare("SELECT * FROM `annonce` WHERE iduser = ?  ");
		$prep->execute(array($iduser));
		$ligne = $prep->fetchAll();

		foreach ($ligne as $row) {
			
			echo "<p>" . $row['annonce1'] . " > </p><br><br><br>";
			echo "<p>" . $row['annonce2'] . " > </p><br><br><br>";
			echo "<p>" . $row['annonce3'] . " > </p><br><br><br>";

		}
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function UpdateAnnonce($iduser,$update1,$update2,$update3){
			try{
			$bdd = Connection();
			$req = $bdd->prepare('UPDATE `annonce` SET `annonce1` = ?, `annonce2` =?, `annonce3` = ? WHERE `annonce`.`iduser` = ? ');
			$req->execute(array($update1,$update2,$update3, $iduser));
			echo "Mise a jour effectue effectuee";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
}

	function DeleteAnnonce($iduser){
		try{
			$bdd = Connection();
			$req = $bdd->prepare('DELETE FROM `annonce` WHERE `annonce`.`iduser` = ?');
			$req->execute(array($iduser));
			echo "Suppression effectue ";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}

	}
	#-------------------------------Project De la Marie-------------------------------------------
	function printProject($iduser)
{
	try {
		$bdd = Connection();
		$prep = $bdd->prepare("SELECT * FROM `project` WHERE iduser = ?  ");
		$prep->execute(array($iduser));
		$ligne = $prep->fetchAll();

		foreach ($ligne as $row) {
			
			echo "<p> : <img src= ../".$row['logo']." /> </p><br>";
			echo "<p>" . $row['project1'] . " > </p><br><br><br>";
			echo "<p>" . $row['project2'] . " > </p><br><br><br>";
			echo "<p>" . $row['project3'] . " > </p><br><br><br>";


		}
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function UpdateProject($iduser,$update1,$update2,$update3){
			try{
			$bdd = Connection();
			$req = $bdd->prepare('UPDATE `project` SET `project1` = ?, `project2` =?, `project3` = ? WHERE `project`.`iduser` = ? ');
			$req->execute(array($update1,$update2,$update3, $iduser));
			echo "Mise a jour effectue effectuee";
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
}

function DeleteProject($iduser)
{
	try {
		$bdd = Connection();
		$req = $bdd->prepare('DELETE FROM `project` WHERE `project`.`iduser` = ?');
		$req->execute(array($iduser));
		echo "Suppression effectue ";
		return true;
	}
	catch (PDOException $e) {
		echo $e->getMessage();
		return false;
	}
}
function InsertProject($iduser,$image,$project1,$project2,$project3){
		try{
		$bdd=Connection();
		$req=$bdd->prepare('INSERT INTO `project` (`iduser`, `logo`, `project1`, `project2`, `project3`) VALUES (?,?,?,?,?)');
		$req->execute(array($iduser,$image,$project1,$project2,$project3));
			echo "Insertion project Reussie";
		}
		catch(PDOException $e){
			die("Erreur:".$e->getMessage());  
	}
	}

function AddProject($iduser,$image,$project1,$project2,$project3){
	try{
				$bdd = Connection();
				$req = $bdd->prepare('INSERT INTO `project` (`iduser`, `logo`, `project1`, `project2`, `project3`) VALUES (?,?, ?,?,?)');
				$req->execute(array($iduser,$image,$project1,$project2,$project3));
			echo "enregistrement effectuee";
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return false;
		}
}
	?>
