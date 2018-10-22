<?php

/*
  About Email();

    1. "email.php":
      - form template, (+) add fields / inputs here within form

      1.2. "include/inputTirggers.php":
        - input / fields required to submit the form

    2. "includes/formInfo.php":
      - edit the form recipient
      - edit the types of files submitted

    3. "includes/editSender.php":
      - line 336, edit the form's sumbitter
      - Validations: line 348, edit validation requirements

    4. "includes/mailEngine.php":
      - code that sends the email

*/

  require_once("include/formInfo.php");
  require_once("include/header.php");

?>


  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

    <input type="text" name="name" tabindex="2">
    <p>name</p>
    <input type="password" name="password" tabindex="3">
    <p>password</p>
    <input type="text" name="email" tabindex="4">
    <p>email</p>
    <!-- add a file as an attachment -->
    <input type="file" name='photo' id='photo' tabindex="5">

    <!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
    <?php require("include/inputTriggers.php"); ?>

    <input type='submit' name='Submit' value='submit this information' tabindex="10">
  </form><!-- form -->

<?php require_once("include/footer.php"); ?>
