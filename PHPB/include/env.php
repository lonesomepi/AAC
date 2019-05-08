<?php
  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {
    $date_auto    = date("Y-m-d H:i:s");
    $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
    $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
    $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
    $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
    $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  } else { ?>
    <p id="localHost">local host</p>
    <?php

    $date_auto      = "2018-12-20 09:27:49";
    $UFID           = "12345678";
    $email          = "marthagator@ufl.edu";
    $firstName      = "Martha";
    $nameGiven      = "Martha Gator";
    $nameBusiness   = "Gator,Martha Allie";

    $to = "acatalano2@ufl.edu";
    $email = $to;

  } ?>
