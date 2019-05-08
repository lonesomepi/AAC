<?php
  $root = "../../";
  $application = "TestEmail";
  require_once("{$root}include/applicationHeader.php");
  if (isset($_POST['submit'])) {
    include("../../email/email.php");
    $name = $_POST['firstName'];
    $email = $_POST['email'];
    header("Location: {$root}thankyou.php?email=" . $email . "&firstName=" . $name);
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="content">

    <h1>Test Email</h1>
    <form action="" method="post">
      <input type="text" name="firstName" value="" placeholder="name">
      <input type="text" name="email" value="" placeholder="email">
      <input type="submit" name="submit" value="submit">
    </form>
  </div><!-- content -->
  </body>
</html>
