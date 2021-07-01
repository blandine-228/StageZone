<?php
	
	// Start the session
	session_start();

	include 'database_connect.php';

	$password = $_POST['password'];
	$email = $_POST['email'];


	 $reponse = $bdd->prepare('SELECT * FROM professeur WHERE email_prof = :email AND password_prof = :password');

	 $reponse->execute(
	 	array(
	 		'email' => $email,
	 		'password' => $password
	 	)
	 );

	if ($reponse->rowCount() > 0) {
        $_SESSION["nom"] = $reponse->fetch()['nom_prof']." ".$reponse->fetch()['prenom_prof'];
        $_SESSION["email"] = $email;

        header('Location: list_stages_admin.php');
     }else{
        echo "<script>
        alert('identifiant invalide');
        window.location.href='posterStage.php'; 
        </script>";
        // header('Location: posterStage.php');
     }
 
 ?>