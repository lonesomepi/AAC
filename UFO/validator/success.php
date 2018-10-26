<?php

  //ensure the page was reached via the previous page
  require("include/functions.php");

  // if (!isset($_POST['submit'])) {
  //   redirectTo("index.php");
  // }

  // database connection variables
  // $dbhost = "localhost";
  // $dbuser = "root";
  // $dbpassword = "";
  // $dbname = "ufovalidator";
  // $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
  //
  // //check if the database is able to connect
  // if (mysqli_connect_error()) {
  //   die("Database connection failed" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  // }

  //temporary hard-coded values to submit to database:
  $glid = "4081-1353";
  $name = "acatalano2";
  $now = date("ymd G:i");
  $writtenResponse = $_POST['writtenResponse'];
  $writtenResponse = $writtenResponse;

  //insert the variables into the database
  $query = "INSERT INTO submissions (glid, Name, writtenResponse, now) VALUES ('{$glid}', '{$name}', '$writtenResponse', '{$now}')";
  $result = mysqli_query($connection, $query);



 	$thisPage = "7";
  $submitted = 1;
  $page = "thankyou";
	require_once("include/header.php");

?>
    <section id="contactSection">

      <h2>Contact:<br><a href="https://www.advising.ufl.edu/uf-online/contact/" target="_blank">CLAS UF Online Advising Staff</a></p>

      <!-- <p><a href="index.php">home</a></p> -->
    </section>

<?php include("include/footer.php"); ?>
