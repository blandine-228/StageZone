<?php 
	$host  =  'mysql:host=127.0.0.1;dbname=archivage_de_stage';
	$user  =  'root';
	$pass  =  '';


	try
	{
		// On se connecte à MySQL
		$bdd = new PDO($host, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		// En cas d'erreur, on affiche un message et on arrête tout
	}
	catch (Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : ' . $e->getMessage());
	}

	// Si tout va bien, on peut continuer
	// On récupère tout le contenu de la table jeux_video
	// $reponse = $bdd->query('SELECT * FROM stage');

	// // On affiche chaque entrée une à une
	// while ($donnee = $reponse->fetch() ) {
	// 	echo $donnee['dure_stage']. "\n";
	// }

 ?>