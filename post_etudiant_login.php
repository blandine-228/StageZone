<?php

	// Start the session
	session_start();

	include 'database_connect.php';

	$password = $_POST['password'];
	$email = $_POST['email'];


	 $reponse = $bdd->prepare('SELECT * FROM etudiant WHERE email_etudiant = :email AND password_etudiant = :password');

	 $reponse->execute(
	 	array(
	 		'email' => $email,
	 		'password' => $password
	 	)
	 );

	if ($reponse->rowCount() > 0) {
        $_SESSION["nom"] = $reponse->fetch()['nom_etudiant']." ".$reponse->fetch()['prenom_etudiant'];
        $_SESSION["email"] = $reponse->fetch()['email_etudiant'];
        header('Location: listStages.php');
     }else{
        echo "<script>
        alert('identifiant invalide');
        window.location.href='trouverStage.php'; 
        </script>";
        // header('Location: posterStage.php');
     }
 

 ?>