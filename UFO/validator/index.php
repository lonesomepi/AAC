<?php
 	$thisPage = "0";
  $submitted = 0;
  $page = "index";
	require_once("include/header.php");
?>

  <p>Welcome, <?php echo $nameGivenShort; ?>.</p>

	<form class="" action="disclosure.php" method="post">
		<input type="submit" name="formZero" value="Start Form">
	</form>

<?php require_once("include/footer.php"); ?>
