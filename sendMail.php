<?php
    $email_to = "info@alternative-energienutzung.de";
    $email_subject = "Anfrage von XYZ";
 
    $name = $_REQUEST['name'];
    $email_from = $_REQUEST['email'];
    $telephone = $_REQUEST['phone'];
    $comments = $_REQUEST['comment'];

    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Comments: ".$comments."\n";
		
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		 
		@mail($email_to, $email_subject, $email_message, $headers);  
?>
