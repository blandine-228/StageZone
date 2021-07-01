<?php

session_start();

include '../../database_connect.php';

$nom = $_POST['name'];
// $prenom = $_POST['prenom'];
$password = $_POST['password'];
$email = $_POST['email'];
$domaine = $_POST['domaine'];


$bdd->exec('INSERT INTO etudiant 
	(nom_etudiant, email_etudiant, password_etudiant, domaine_etudiant) 
	VALUES(\''.$nom.'\', \''.$email.'\', \''.$password.'\', \''.$domaine.'\') ');

// header('Location: trouverStage.php');

$_SESSION["nom"] = $_POST['name'];

http_response_code(200);


?>