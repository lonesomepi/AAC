<?php
  require("include/functions.php");

  // if (!isset($_POST['formThree'])) {
  //   redirectTo("index.php");
  // }

 	$thisPage = "4";
  $submitted = 0;
  $page = "requirements";
	require_once("include/header.php");
?>

      <section>
          <form class="" action="form.php" method="post">
    				<h2><span class="orange"><?php echo $thisPage; ?>.</span> Requirements</h2>
          	<p>Changing from UF residential to UF Online requires:</p>
    				<ol>
    					<li>Applying through the UF Online website (<a href="https://ufonline.ufl.edu/admissions/how-to-apply/#readmit" target="_blank">ufonline.ufl.edu</a>)</li>
    					<li>Petitioning CLAS to document the reasons you are no longer able to complete your degree residentially</li>
    				</ol>
            <input type="submit" name="formFour" value="<?php echo $acknowledge; ?>">
        </form>
      </select>


<?php require_once("include/footer.php"); ?>
