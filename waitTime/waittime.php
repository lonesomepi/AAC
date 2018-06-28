<?php require_once("gettime.php"); ?>
<html>
<head>
	<title>AAC Lobby Wait Time</title>
	<link rel="stylesheet" href="css/waittime.css">
</head>
<body>
	<h1>AAC Lobby Wait Time</h1>
	<!-- <?php //include("table.php"); ?> -->

	<div class="lobbyWaitShell">
		<h2>AAC Lobby Wait Time</h2>

		<?php if ($lobbyStatus === "open") { ?>
			<div class="leftSide" id="open">
				<p id="currentStudent"><span class="bigNumber"><?php echo $students; ?></span> <b>student<?php if ($students === 1) { echo ""; } else { echo "s"; } ?></b> waiting</p>
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

		<?php } elseif ($lobbyStatus === "closed") { ?>

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
			</div><!-- end right side --><div class="clear"></div>

			<!-- starting pre holiday -->

			<div class="currentTime" id="closedCurrentTime">
				<!-- closed: if it's outside hours any day, or weekend lunchtime -->
				<?php if (($theTime > $afternoonClose || $theTime < $morningOpen) || ($day >= 6 && ($theTime > $morningClose && $theTime < $afternoonOpen))) {

							if ($preholiday === "preholiday" && $theTime > $afternoonClose) { ?>

								<p>Sessions will resume <span class="darkRed"><b><?php echo $resumeDay; ?> at 8 a.m.</b></span></p>

							<?php } else { ?>

																	<!-- if it's friday or saturday show "Monday" | skips friday morning for "monday" -->
								<p>Sessions will resume <?php if (($day == 5 && $theTime > $morningClose) || $day == 6) {echo "Monday"; } ?> at <span class="blue">8 a.m.</span></p>
							<?php } ?>


						<!-- lunchtime, monday through friday -->
					<?php } elseif (($day <= 5) && ($theTime > $morningClose && $theTime < $afternoonOpen)) { ?>
										<p>Sessions will resume at <span class="blue">1:30 p.m.</span></p>
						<?php } ?>

			</div><!-- end current time, little bottom line -->

		<?php } elseif ($lobbyStatus === "holiday") {
						include("holiday/$value.php"); ?>
			<?php } ?>

		 <!-- ending pre holiday  -->

		</div><!-- end shell -->

		<!-- <?php echo '<center><p><strong>AAC Lobby Wait Time</strong><br /><br />'.$display.'</p></center>'; ?> -->

</body>
</html>
