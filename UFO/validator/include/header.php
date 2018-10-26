<?php
	require("include/glid.php");
	$acknowledge = "I acknowledge this";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UF Online Acknowledgement Form</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/<?php echo $page; ?>.css">
	<link rel="icon" href="image/favicon.ico">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
	<!--PING A FILE TO KEEP THE PAGE ALIVE-->
	<script type="text/javascript" src="scripts/email.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>UF Online Acknowledgement Form</h1>

			<nav>
				<ul<?php if ($submitted == true) {echo " style=\"display: none;\"";	} ?>>
					<?php

						$pages = array("1", "2", "3", "4", "5");

						foreach ($pages as $page) {
							echo "<li>";

							if ($page <= $thisPage) {

								echo "<a ";
								if ($page === $thisPage) { echo "class=\"thisPage\" ";									}
								echo "href=\"{$page}.php\">";
							}

							if ($page < $thisPage) {
								echo "<img src=\"image/check.png\">";
							} else {echo $page;}
							echo "</a></li>";
						}
						?>
					<div class="clear"></div>
				</ul>
				<?php if ($submitted == true) { ?>
						<p id="greenThankYouText">Thank you for submitting the form!</p>
				<?php } ?>
			</nav>
		</header>
		<div class="content">
