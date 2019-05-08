<?php

// $to        = $email;
$to        = "phpostbac@clas.ufl.edu";
// $to        = "acatalano2@ufl.edu";
$subject   = 'PHPB ' . $application . ' Application Submission';
$message   = messageContent("content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers

$headers[] = 'From: PHPB Application Submission <phpostbac@clas.ufl.edu>';

// $headers[] = 'Cc: acatalano2@ufl.edu';
// $headers[] = 'Bcc: alex.catalano2@gmail.com';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
