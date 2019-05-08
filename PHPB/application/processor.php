<?php

  if (isset($_POST['submit'])) {
    include("../email/thankyou/thankyou_email.php");
    header("Location: career/index.php");
    exit;
  }



  // include("{$root}email/email.php");
  // echo "<pre>";
  // echo print_r($_POST);
  // echo "</pre>";
?>
