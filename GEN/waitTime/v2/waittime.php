<?php require_once("gettime.php"); ?>
<html>
<head>
	<title>AAC Lobby Wait Time</title>
	<link rel="stylesheet" href="waittime.css">
</head>
<body>
	<h1>AAC Lobby Wait Time</h1>

	<div class="lobbyWaitShell">
		<h2>AAC Lobby Wait Time</h2>

		<?php if ($lobbyIsOpen === "open") { ?>
			<div class="leftSide" id="open">
				<p id="currentStudent"><span class="bigNumber"><?php echo $students; ?></span> <b>students</b> waiting</p>
				<p id="nextStudent">Next student has been waiting:</p>
				<p><span class="mediumNumber darkRed"><?php echo $h . $m; ?></span> <span class="tiny">minutes</span></p>
			</div>

			<div class="rightSide">
				<h3>Walk-in Hours: M-F</h3>
				<p>mornings:</p>
				<ul>
					<li>8:00 - 11:30</li>
				</ul>
				<p>afternoons:</p>
				<ul>
					<li>1:30 - 4:30</li>
				</ul>
			</div><!-- end right side -->
			<div class="clear"></div>

			<div class="currentTime">
				<p id="asOfTime"><i><span class="light">as of</span> <?php echo $time; ?></i></p>
			</div>

		<?php } else { ?>

			<div class="leftSide" id="closed">
				<p>The lobby is currently closed to walk-ins.</p>
			</div>

			<div class="rightSide">
				<h3>Walk-in Hours: M-F</h3>
				<p>mornings:</p>
				<ul>
					<li>8:00 - 11:30</li>
				</ul>
				<p>afternoons:</p>
				<ul>
					<li>1:30 - 4:30</li>
				</ul>
			</div><!-- end right side -->
			<div class="clear"></div>
			<div class="currentTime" id="closedCurrentTime">
				<?php if ($theTime > $afternoonClose || $theTime < $morningOpen) { ?>
					<p>Sessions will <span class="blue">resume <?php if ($day == 5) {echo "Monday"; } ?> at 8 a.m.</span></p>
				<?php } elseif ($theTime > $morningClose && $theTime < $afternoonOpen) { ?>

					<p>Sessions will <span class="blue">resume at 1:30 p.m.</span></p>

				<?php } ?>
			</div>


			<?php } ?><!-- full if statement -->
		</div><!-- end shell -->


		<?php echo '<center><p><strong>AAC Lobby Wait Time</strong><br /><br />'.$display.'</p></center>'; ?>

</body>
</html>
