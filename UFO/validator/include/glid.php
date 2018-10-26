<?php
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $date_auto    = date("Y-m-d H:i:s");
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  $nameGivenShort    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
?>
