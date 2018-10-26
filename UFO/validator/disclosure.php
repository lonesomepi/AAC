<?php
  require("include/functions.php");
  // if (!isset($_POST['formZero'])) {
  //   redirectTo("index.php");
  // }
 	$thisPage = "1";
  $submitted = 0;
  $page = "expectations";
	require_once("include/header.php");
?>
		<section>
		  <h2><span class="orange"><?php echo $thisPage; ?>.</span> Health Professions Disclosure</h2>
      <form class="" action="expectations.php" method="post">
  		  <p>UF Online Majors in the College of Liberal Arts and Sciences (CLAS) <b>were not</b> designed to accommodate students interested in pursuing a career in a health profession such as: pre-med, pre-dent, pre-vet, PA, or Pharmacy.</p>
  		  <p>It is <b>not advisable</b> for CLAS UF Online students to complete pre-professional courses through UF Online or as a transient student; UF Online does not offer all of these courses, and professional schools may not accept these courses, or may view them with diminished competitiveness.</p>
  		  <p class="tempBorder">Changing to UF Online in CLAS would result in being unable to pursue pre-professional health tracks.</p>
        <input  type="submit" name="formOne" value="I acknowledge this">
      </form>
		</section>

<?php require_once("include/footer.php"); ?>


<script src="scripts/back.js"></script>
