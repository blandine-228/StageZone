<?php

include 'database_connect.php';

$nom = $_POST['name'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$email = $_POST['email'];


$bdd->exec('INSERT INTO professeur 
	(nom_prof, prenom_prof, email_prof, password_prof) 
	VALUES(\''.$nom.'\', \''.$prenom.'\', \''.$email.'\', \''.$password.'\') ');

header('Location: PosterStage.php');


	// On affiche chaque entrée une à une
	// while ($donnee = $reponse->fetch() ) {
	// 	echo $donnee['dure_stage']. "\n";
	// }



 ?>