<?php
session_start();
include 'database_connect.php';

// $nom = $_POST['id_stage'];
$lieu_stage = $_POST['lieu_stage'];
$phone_number_company = $_POST['phone_number_company'];
$dure_stage = $_POST['dure_stage'];
$contenu_stage = $_POST['contenu_stage'];
$creer  = $_SESSION['nom'];
$email  = $_SESSION['email'];
$date_creation = date('Y-m-d');


$bdd->exec('INSERT INTO stage
	(dure_stage, lieu_stage, phone_number_company,  contenu_stage, creer_par,date_creation,email) 
	VALUES
	(\''.$dure_stage.'\',\''.$lieu_stage.'\', \''.$phone_number_company.'\', \''.$contenu_stage.'\',\''.$creer.'\',\''.$date_creation.'\',\''.$email.'\') ');

header('Location: list_stages_admin.php');


	// On affiche chaque entrée une à une
	// while ($donnee = $reponse->fetch() ) {
	// 	echo $donnee['dure_stage']. "\n";
	// }



 ?>