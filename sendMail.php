<?php

	$to = "info@alternative-energienutzung.de";
  
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$comment = $_POST['message'];
	  	
	$subject = "Anfrage von " . $name;

  $message .= "Name: ".$name."\n";
  $message .= "Email: ".$from."\n";
  $message .= "Telefon: ".$phone."\n";
  $message .= "Nachricht: ".$comment."\n";
	
	$header = 'From: ' . $from . "\r\n" .
  'Reply-To: ' . $from . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  
	$mail = mail($to, $subject, $message, $header);  
	
	if (!function_exists('http_response_code')){
		function http_response_code($newcode = NULL){
			static $code = 200;
			if($newcode !== NULL){
				header('X-PHP-Response-Code: '.$newcode, true, $newcode);
				if(!headers_sent())
					$code = $newcode;
			}       
			return $code;
		}
	}
	
	if($mail){
		return true;
	}else{
		http_response_code(503);
	}
?>
