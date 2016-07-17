<?php
//Prefedined Variables
$to = "delodis35@gmail.com";
$subject = "Demande d'information ou de reservation depuis pergola.fr";

if($_POST) {

	// Collect POST data from form
	$name = stripslashes($_POST['name']);
	$email = stripslashes($_POST['email']);
	$comment = stripslashes($_POST['comment']);

	// Define email variables
	$message = "En date du : "date('d/m/Y')."\n" . $name . " (dont le mail est : " . $email . ") a envoyé la demande suivante" . "\n\n" . $comment;
	$headers = 'From: '.$email."\r\n\'Reply-To: " . $email . "\r\n\'X-Mailer: PHP/" . phpversion();

	//Validate
	$header_injections = 0;
//	$header_injections = preg_match("(\r|\n)", $comment);

	if( !empty($name) && !empty($email) && !empty($comment) ) // && !$header_injections )
	{
		if( mail($to, $subject, $message, $headers) )
		{
/*
			echo "Votre message a bien ete envoye.";
			sleep(3);
			header('location:http://www.pergola.fr/');
*/
				return true;
		}
		else
		{
/*
			echo "1.Votre message n'a pas ete envoye.";
			sleep(3);
			header('location:http://www.pergola.fr/');
*/
			return false;
		}
	}
	else
	{
/*
		echo "2.Votre message n'a pas ete envoye.";
		sleep(3);
		header('location:http://www.pergola.fr/');
*/
		return false;
	}
}
?>