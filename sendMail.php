<?php

	$to = "info@alternative-energienutzung.de";
	
	function died($error) {

		echo "Es tut uns Leid, aber in ihren Eingaben ist ein Fehler aufgetreten.";
		echo "<br /><br />";
		echo $error."<br /><br />";
		echo "Bitte gehen zurück und korrigieren Ihre Eingabe.<br /><br />";
		die();
  }

	if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['comment'])) {

    died('Sie haben scheinbar eines der angegebenen Felder nicht ausgefüllt.');       

  }
  
	$name = $_REQUEST['name'];
	$from = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$comment = $_REQUEST['comment'];
	
	$error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$from)) {
	  $error_message .= 'Die von Ihnen eigegebene E-Mail Adresse entspricht keinem bekannten Format.<br />';
  }
 
  if(strlen($comment) < 2) {
    $error_message .= 'Der von ihnen eigegebene Text enthält keinen sinnvollen Inhalt.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
	  	
	$subject = "Anfrage von " . $name;

  $message .= "Name: ".$name."\n";
  $message .= "Email: ".$from."\n";
  $message .= "Telefon: ".$phone."\n";
  $message .= "Nachricht: ".$comment."\n";
	
	$header = 'From: ' . $from . "\r\n" .
  'Reply-To: ' . $from . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
	 
	$mail = mail($to, $subject, $message, $header);  
	if($mail){
		echo "Wir haben Ihre Mail erhalten und werden Sie bald kontaktieren.";
	}else{
		echo "Beim versenden der Mail ist ein Fehler aufgetreten, der nicht an Ihnen liegt. Teilen Sie uns dies bitte auf einem anderem Weg mit, damit wir diesen beheben können."; 
	}
	header("Location: http://www.google.de");
	exit();
?>
