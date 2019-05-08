<?php
  // include("include/env.php");
  $name = "";
  if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $name  = ", " . ucfirst(strtolower($_GET['firstName']));
    include("email/thankyou/thankyou_email.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UF CLAS Pre-Health Postbac</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.ico"/>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/thankyou.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>UF CLAS Pre-Health Postbac</h1>
      </div>
    </header>

    <p id="thankYou">Success! We've received your application<?php echo $name; ?>!<br><span id="tiny">Thank you for applying to the Pre-Health Post-Baccalaureate Program (PHPB)!</span></p>

<?php require_once("include/footer.php"); ?>
