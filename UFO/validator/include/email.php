<?php
  // where should the form be emailed to:
  $emailThisTo = "clasufonline@advising.ufl.edu";
  // then, after submitting, redirect to:
  $redirectTo = "success.php";

  $date_auto = date("Y-m-d H:i:s");
  $name=$_SERVER["HTTP_UFSHIB_BUSINESSNAME"];
  include ("include/editSender.php");

  $formproc = new FGContactForm();

  //1. Add your email address here. You can add more than one receipient.
  $formproc->AddRecipient($emailThisTo); //<<---Put your email address here

  //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
  // and put it here
  $formproc->SetFormRandomKey('xdvgMTQYvH3VfOm');

  //3. Identify the types and size of file allowed for sending
  $formproc->AddFileUploadField('photo','jpg,gif,pdf,docx,png',2024);

  if(isset($_POST['submitted']))
  {
     if($formproc->ProcessForm())
     {
          $formproc->RedirectToURL($redirectTo);
     }
  }

?>
