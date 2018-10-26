<?php
  require("include/functions.php");

  // if (!isset($_POST['formOne'])) {
  //   redirectTo("index.php");
  // }
 	$thisPage = "2";
  $submitted = 0;
  $page = "expectations";
	require_once("include/header.php");
?>

  <form class="" action="curriculum.php" method="post">
		<section>
		  <h2><span class="orange"><?php echo $thisPage; ?>.</span> Expectation to Remain in UF Online:</h2>
		  <p>UF Online students are expected to graduate through UF Online.</p>
		  <ul>
		    <li>Admission to UF Online prevents taking any <b>residential</b> courses at the University of Florida or switching back to the UF residential program.</li>
		  	<li>If you are interested in taking one semester of online courses, then returning to campus, changing to UF Online is not the correct option for you. Please discuss other options with your academic advisor.</li>
		  </ul>
    <input class="mainSelect oneBox" type="submit" name="formTwo" value="<?php echo $acknowledge; ?>">
  </form>

<?php require_once("include/footer.php"); ?>
