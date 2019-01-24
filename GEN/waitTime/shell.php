
<?php if ($preholiday) { ?>
	<p><?php echo $preholidayName; ?>: sesions resume $thatday</p>
<?php } ?>

<?php elseif ($preholiday) { ?>
	<p>pre holiday message <?php echo $preholidayName; ?>: sesions resume $thatday</p>
<?php } ?><!-- else for non-pre-holidays -->
