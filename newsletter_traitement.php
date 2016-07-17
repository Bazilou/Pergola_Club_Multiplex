<?php

//Prefedined Variables
$to = "delodis35@gmail.com";
$subject = "Inscription à la Newsletter";

if($_POST) {
	// Collect POST data from form
	$nom = stripslashes($_POST['nom']);
	$prenom = stripslashes($_POST['prenom']);
	$ddn = stripslashes($_POST['ddn']);
	$email = stripslashes($_POST['mailNews']);

	// Define email variables
	$message = date('d/m/Y') . "\n" . $nom . ' ' . $prenom .
		" souhaite s\'inscrire à la newsletter avec le mail suivant : " . $email .
		"\n" . "Et dont la date de naissance serait : " . $ddn;
	$headers = 'From: '.$email.'\r\n\'Reply-To: ' . $email . '\r\n\'X-Mailer: PHP/' . phpversion();

	//Validate
	$header_injections = 0;
	if (preg_match("/\n|\r/i", $email))
	{
		$header_injections = 1;
		echo 'email foireux';
	}
	
	if( !empty($nom) && !empty($email) && !empty($prenom) && !empty($ddn) && !$header_injections )
	{
		if( mail($to, $subject, $message, $headers) )
		{
			echo "Votre message a bien ete envoye.";
				return true;
		}
		else
		{
			echo "1.Un probleme serveur nuit à l'envoi du message.\nEssayez ulterieurement...";
			return false;
		}
	}
	else
	{
		echo "2.L'un des champs est vide ou faux. Le message n'a donc pas été envoyé.";
		return false;
	}
}
?>