<?php
$message   = messageContent("two_content.php");
// $to        = $email;
$subject   = 'Test Two';
$to =  $_POST['email'];


// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
// $headers[] = 'To: <'.$to.'>';
$headers[] = 'From: UF PHPB <phpostbac@clas.ufl.edu>';


// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
