<!-- footer -->

	<?php
		if (DEV_ENV) {
			printDebugger();
		}
	?>
	
	</div>
	
	<!-- !!!ANALYTICS!!! -->
</body>
</html>
<?php
// Close database
// ****************************************************************************	

	$mysqli->close();


// END FILE
// ****************************************************************************
?>