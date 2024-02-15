<?php

  $to = "info@alternative-energienutzung.de";

  $name = $_POST['name'];
  $from = $_POST['email'];
  $phone = $_POST['phone'];
  $comment = $_POST['message'];

  $subject = "Anfrage von " . $name;

if (empty($name) || empty($from)) {
    exit(0);
}

  $message .= "Name: ".$name."\n";
  $message .= "Email: ".$from."\n";
  $message .= "Telefon: ".$phone."\n";
  $message .= "Nachricht: ".$comment."\n";

  $header = 'From: ' . $from . "\r\n" .
  'Reply-To: ' . $from . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  $mail = mail($to, $subject, $message, $header);

if (!function_exists('Http_Response_code')) {
    function Http_Response_code($newcode = null)
    {
        static $code = 200;
        if ($newcode !== null) {
            header('X-PHP-Response-Code: '.$newcode, true, $newcode);
            if (!headers_sent())
            $code = $newcode;
        }
        return $code;
    }
}

if ($mail) {
    return true;
} else {
    http_response_code(503);
}
?>
